# Filename: processSatImage.py
# v1.0: 02.15.2020 (rdgarcia)
# This will process Sentinel 2A satellite image
# of the specified city
# (Angeles is selected as an example)

import numpy as np
import geopandas as gpd
import pandas as pd
import rasterio as rio
from rasterio.plot import show
import rasterio.mask
import matplotlib.pyplot as plt

# Open Bands with Rasterio: set image names here
b4 = rio.open('T50PRB_20200128T021941_B04_10m.jp2')
b3 = rio.open('T50PRB_20200128T021941_B03_10m.jp2')
b8 = rio.open('T50PRB_20200128T021941_B08_10m.jp2')

# Set to shapefile of the city here (must be in the root folder)
nAngeles = gpd.read_file('Angeles.shp')
nAngeles_proj = nAngeles.to_crs({'init': 'epsg:32650'})

# Read Red(b4), Green(b3) and NIR(b8) as arrays
red = b4.read()
green = b3.read()
nir = b8.read()

# Calculate FAPAR: ((nir-red)/(nir+red)*(1.25‐0.025))
fapar = (nir.astype(float) - red.astype(float))/(nir+red) * 1.225

# Create the FAPAR image
meta = b4.meta
meta.update(driver='GTiff')
meta.update(dtype=rasterio.float32)
with rasterio.open('FAPAR.tif', 'w', **meta) as dst:
    dst.write(fapar.astype(rasterio.float32))

# Convert to FAPAR_masked image
with rio.open("FAPAR.tif") as src:
    out_image, out_transform = rio.mask.mask(src, nAngeles_proj.geometry,crop=True)
    out_meta = src.meta.copy()
    out_meta.update({"driver": "GTiff",
                     "height": out_image.shape[1],
                     "width": out_image.shape[2],
                     "transform": out_transform})
with rasterio.open("FAPAR_masked.tif", "w", **out_meta) as dest:
    dest.write(out_image)

# Calculate NDWI: (green-nir)/(green+nir)
ndwi = (green.astype(float) - nir.astype(float))/(green+nir)

# Create the NDWI image
meta = b3.meta
meta.update(driver='GTiff')
meta.update(dtype=rasterio.float32)
with rasterio.open('NDWI.tif', 'w', **meta) as dst:
    dst.write(ndwi.astype(rasterio.float32))

# Convert to NDWI_masked image
with rio.open("NDWI.tif") as src:
    out_image, out_transform = rio.mask.mask(src, nAngeles_proj.geometry,crop=True)
    out_meta = src.meta.copy()
    out_meta.update({"driver": "GTiff",
                 "height": out_image.shape[1],
                 "width": out_image.shape[2],
                 "transform": out_transform})
with rasterio.open("NDWI_masked.tif", "w", **out_meta) as dest:
    dest.write(out_image)

with rasterio.open('NDWI_masked.tif', 'r+') as ndwi:
    NDWI_masked = ndwi.read()  # read all raster values

with rasterio.open('FAPAR_masked.tif', 'r+') as fapar:
    FAPAR_masked = fapar.read()  # read all raster values

# Calculate Stagnant: (("NDWI_masked" > 0.xx) AND ("FAPAR_masked" > 0.xx)) * 1
stagnant = np.logical_and(NDWI_masked > 0.05, FAPAR_masked > 0.05)

# Create the Stagnant image
meta = ndwi.meta.copy()
meta.update(driver='GTiff')
meta.update(dtype=rasterio.float32)
with rasterio.open('Stagnant.tif', 'w', **meta) as dst:
    dst.write(stagnant.astype(rasterio.float32))

# Check Stagnant Image
# if all black: no stagnant spots detected, then recompute stagnant
# else: proceed to processing
sw = rio.open(r"Stagnant.tif")
fig, ax = plt.subplots(1, figsize=(20, 20))
show(sw, ax=ax)
plt.show()

# Convert stagnant image to vector layer: raster pixel to points
# Generate joined layer: join vector layer by location
# Save as csv output

# Filename: downloadSatImage.py
# v1.0: 02.15.2020 (rdgarcia)
# This will download Sentinel 2A satellite image
# of the specified city
# (Catbalogan is selected as an example)

import folium
from sentinelsat import SentinelAPI
import geopandas as gpd

# Set your scihub user and password here
user = 'yourusername'
password = 'yourpassword'

api = SentinelAPI(user, password, 'https://scihub.copernicus.eu/dhus')

# Set to shapefile of the city here (must be in the root folder)
nCatbalogan = gpd.read_file('Catbalogan.shp')

# Set to lat and long coordinates of the city here (use Google maps)
m = folium.Map([11.827248, 124.846270], zoom_start=11)
folium.GeoJson(nCatbalogan).add_to(m)

footprint = None
for i in nCatbalogan['geometry']:
    footprint = i

# Specify the date and processing level here (either Level-2A or Level-1C)
# cloudcoverpercentage of 10% is selected
products = api.query(footprint,
                     date = ('20190101', '20200131'),
                     platformname = 'Sentinel-2',
                     processinglevel = 'Level-2A',
                     cloudcoverpercentage = (0,10))
# Check if sat image is available, change query settings if 0
len(products)

# Sorting of available images based on cloud cover percentage
products_gdf = api.to_geodataframe(products)
products_gdf_sorted = products_gdf.sort_values(['cloudcoverpercentage'], ascending=[True])
products_gdf_sorted

# Choosing of selected image with lowest cloud cover
product_uuid=products_gdf_sorted.iloc[0]['uuid']

# Initiating download of satellite image
# This may take a few minutes (or hours) depending on the time of the day
api.download(product_uuid)

# end

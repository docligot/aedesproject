

## Drive containing satellite images extracted from Copernicus Sentinel Hub

https://drive.google.com/drive/folders/1nyWbERLM_eoZFGu2vUAEAK7iIknRukTP

## Satellite Images extracted from Copernicus Sentinel Hub Service

Check Sentinel [here](https://sentinel.esa.int/web/sentinel/sentinel-data-access). You can request for a free account [here](https://scihub.copernicus.eu/).  

Use QGIS to access the data. 
![qgis](https://github.com/aedesproject/nasa_hack/blob/master/satellite/images/qgis-extract.png)

Select Sentinel-2 Bands for Landsat 3, 4, 5, 8 for the extraction
![qgis-2](https://github.com/aedesproject/nasa_hack/blob/master/satellite/images/qgis-extract-2.png)

## FAPAR and NDWI Values

Stagnant water (i.e. mosquito-breeding environments were derived using Fraction of Absorbed Photosynthetically Active Radiation (FAPAR) to derive a Vegetation Index and the Normalized Difference Water Index (NDWI).

When a location hits a certain FAPAR and NDWI thresholds it indicates the possibility of a stagnant water pool. 

NDWI:
The NDWI index is most appropriate for water body mapping. The water body has strong absorbability and low radiation in the range from visible to infrared wavelengths. The index uses the green and Near Infra-red bands of remote sensing images based on this phenomenon. The NDWI can enhance the water information effectively in most cases. It is sensitive to built-up land and often results in over-estimated water bodies.
https://www.sentinel-hub.com/eoproducts/ndwi-normalized-difference-water-index

FAPAR:
The Fraction of Absorbed Photosynthetically Active Radiation (FAPAR, sometimes also noted fAPAR or fPAR) is the fraction of the incoming solar radiation in the Photosynthetically Active Radiation spectral region that is absorbed by a photosynthetic organism, typically describing the light absorption across an integrated plant canopy. This biophysical variable is directly related to the primary productivity of photosynthesis and some models use it to estimate the assimilation of carbon dioxide in vegetation.s
https://en.wikipedia.org/wiki/FAPAR

FAPAR Extraction
![fapar](https://github.com/aedesproject/nasa_hack/blob/master/satellite/images/fapar.png)

NDWI Extraction
![ndwi](https://github.com/aedesproject/nasa_hack/blob/master/satellite/images/ndwi.png)

Where:
* -1 to 0 - Bright surface with no vegetation or water content
* +1 - represent water content

Formula to derive stagnant water:
is_pixel_stagnant_water(boolean) = ((NDWIpixel>0.2) AND (FAPARpixel<0.1)) * 1
![fapar-ndwi-formula](https://github.com/aedesproject/nasa_hack/blob/master/satellite/images/fapar-ndwi-formula.png)

Variables: 
* Xgreen = X green band of visible light
* Xnir = X near infra red band
* B8 = Landsat8
* B4 = Landsat4

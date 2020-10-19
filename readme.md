# Welcome to the AEDES Project

## Our Challenge

AEDES is tackling the [SMASH YOUR SDGs](https://2019.spaceappschallenge.org/challenges/living-our-world/smash-your-sdgs/details) challenge under the [LIVING IN OUR WORLD](https://2019.spaceappschallenge.org/challenges/living-our-world/) category. Specifically we are tackling Goal 3: GOOD HEALTH AND WELL BEING under the UN Sustainable Development Goals.

## The Problem

Dengue is now at epidemic levels in the Philippines with over 271,000 cases and more than 1,100 deaths as of August 2019. Data on dengue takes time to be manually gathered which hampers the health sector’s ability to deal with the threat. Dengue is spread between infected cases through the Aedes Aegypti mosquito and mosquitoes are known to breed in damp locations and stagnant water pools.

## Our Solution

We propose an automated information portal that correlates dengue cases and deaths with real-time data from climate, google searches, and satellite maps, giving an advance indicator of when dengue will emerge and potential dengue hotspot locations. This portal is accessible publicly but is targeted towards public health and local government agencies to give them advanced notice of dengue outbreaks and help prioritize resources.

The service relies on 3 data sets:
* Satellite Data: Satellite imaging data from [Sentinel Online Copernicus](https://sentinel.esa.int/web/sentinel/sentinel-data-access)
* Local Weather Data: Climate data from [DOST-PAGASA](http://bagong.pagasa.dost.gov.ph/climate/climatological-normals)
* Google Data: [Search trends for 'dengue' and related terms](https://trends.google.com/trends/explore?date=today%205-y&geo=PH&q=dengue)

To populate the information portal, we propose 3 models:
* Predict dengue cases from climate and search data
* Predict dengue deaths from dengue cases
* Determine likely dengue hotspots by detecting stagnant water areas from satellite data

By doing this we are addressing 2 key challenges for public health and local government officials:
* Get ahead of the lagged delay of dengue reporting by using real-time information (e.g. climate, searches) to infer if dengue cases and deaths are about to spike.
* Precisely anticipate areas that may be affected by dengue to prioritize health aid, supplies, and proactive fumigation to prevent the outbreaks.

## Related Literature

We have conducted research and cite the following prior work that provide the foundation for this solution:
* In Caro, et. al. (2016), *[Forecasting and Data Visualization of Dengue spread in the Philippine Visayas Island group](https://github.com/aedesproject/nasa_hack/blob/master/literature/07785420%20-%20Forecasting%20and%20Data%20Visualization%20of%20Dengue%20Spread%20in%20PH%20Visayas.pdf)*, researchers proposed a method to predict dengue cases in the Visayas regions through the use of an Artificial Neural Network (ANN) which predicted dengue cases (R 0.8) through the use of climate data (temperature and rainfall) and a lagged number of previous dengue cases.
* In Yang, et. al. (2016), *[Advances in using Internet searches to track dengue](https://github.com/aedesproject/nasa_hack/blob/master/literature/Advances_in_using_Internet_searches_to_track_dengu.pdf)*, researchers used Google searches for 'dengue' and related keywords to predict dengue cases in Mexico, Brazil, Thailand, Singapore and Taiwan.
* In Chua, Tan, et. al. (2018), *[Project Still Water](https://github.com/aedesproject/nasa_hack/blob/master/literature/Stagnant%20Water%20Maps%20from%20Satellite%20Infrared%20Data.pdf)*, researchers proposed a methodology to detect dengue hotspots using FAPAR (Vegetation) and NDWI (Water) areas.
* In Chan, Johnson (2012), *[The Incubation Periods of Dengue Viruses](https://github.com/aedesproject/nasa_hack/blob/master/literature/Incubation-Dengue-pone.0050972.pdf)*, researchers establish the incubation periods for dengue. 95% of EIPs are between 5 and 33 days at 25C, and 2 and 15 days at30C, with means of 15 and 6.5 days, respectively which suggests that climate has an effect on the incubation of the disease.

## Objectives and Principles

Our proposed solution intends to builds on this work by the following principles:
* We test and propose independent and mixed models that combine Google searches and climate data to detect possible factors that affect dengue cases and deaths as well as provide an accurate forecast.
* We provide the information on an easily navigable interactive web application accessible by the public to help disseminate crucial information and also assist in public health efforts to prevent and contain the disease.

![dengue-cycle](https://github.com/aedesproject/nasa_hack/blob/master/deck/dengue_data.png)

Logically, the behavior captured by the datasets in our study is:
1. First, precipitation and temperature climate creates mosquito-breeding environments
2. Mosquitoes spread and get infected by existing dengue cases, thereby spreading the disease
3. New infections cause alarm which drives internet searches for dengue
4. Dengue cases result in deaths
5. Cases and deaths are reported to public health officials

Therefore by detecting #1 and #3 we can address and hopefully disrupt the disease cycle before an epidemic spreads.

## Selecting Pilot Areas For Prototype



For our initial prototype we decided to focus on four areas:

* National Capital Region (Quezon City as a focus)
* Eastern Visayas (Tacloban City as a focus)
* Western Visayas (Iloilo City as a focus)
* ARMM (Cotabato City as a focus)

We selected the above areas due to availability of local weather station in these locations. We decided on NCR as a default and added the three other cities due to the observed spike in Google Searches for dengue related terms indicating possible prevailing public panic in these areas.

Google Searches Spiking in July: 
![searches](https://github.com/aedesproject/nasa_hack/blob/master/deck/dengue_searches.png)

## Predicting Dengue Cases and Deaths

We propose to forecast dengue cases and deaths using a combination of:

* Climate Data: Average monthly temperature readings from local weather stations
* Climate Data: Average monthly rainfall (precipitation) readings from local weather stations
* Google Data: Search index for 'dengue', 'dengue symptoms', 'dengue cure', and 'dengue medicine'
* Lagged values for Climate factors, Google data, and actual cases and deaths

![model](https://github.com/aedesproject/nasa_hack/blob/master/deck/dengue_model.png)

## Surfacing Mosquito Hotspots From Satellite Data

We propose calculating dengue hotspots from satellite images as the intersection of the following:

* Fraction of Absorbed Photosynthetically Active Radiation (FAPAR) to identify areas with vegetation.
* Normalized Difference Water Index (NDWI) to identify areas with water.

Combining the two indices and testing for various thresholds we can approximate areas that have stagnant water which are breeding grounds for mosquitoes.

![satellite](https://github.com/aedesproject/nasa_hack/blob/master/deck/satellite.png)

## Results

We visualized the resulting models on a web interface for easy navigation. Check the prototype [here](http://aedesproject.org).

The preliminary run of our forecast model shows we are able to approximate the trendmonth-to-date dengue cases (R 0.82). We also visualized the dengue hotspots on an interactive map that can zoom down to street level for public health sector targeting.

## Contact Us

AEDES was [2019 Global Winner](https://2019.spaceappschallenge.org/awards/) of the NASA Space Apps Challenge winning **Best Use Of Data**. 

![alt text](https://github.com/docligot/aedesproject/blob/master/deck/TEAM_AEDES.jpg "Grand Prize")

The AEDES team consists of the following: 

* [Dominic Ligot](https://www.linkedin.com/in/docligot/), Team Lead
* [Claire Tayco](https://www.linkedin.com/in/claire-san-juan-tayco-81361828/), Statistical Models
* [Jansen Lopez](https://www.linkedin.com/in/jansen-lopez/), Geospatial Models
* [Mark Toledo](https://www.linkedin.com/in/toledomark/), Data Engineer

We welcome collaborators. Contact us via Linked-IN, or email us at support@aedesproject.org.

## License

This work is provided under the terms of Creative Commons Attribution Share Alike 4.0 International ([CC-BY-SA-4.0](https://creativecommons.org/licenses/by-sa/4.0/)) license. 

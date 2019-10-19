This is the github of Project Aedes. 

## Our Challenge

AEDES is tackling the SMASH YOUR SDGs challenge under the LIVING IN OUR WORLD category. Specifically we are tackling Goal 3: GOOD HEALTH AND WELL BEING under the UN Sustainable Development Goals.

## The Problem

Dengue is now at epidemic levels in the Philippines with over 271,000 cases and more than 1,100 deaths as of August 2019. Data on dengue takes time to be manually gathered which hampers the health sector’s ability to deal with the threat. Dengue is spread between infected cases through the Aedes Aegypti mosquito and mosquitoes are known to breed in damp locations and stagnant water pools.

## Our Solution

We propose an automated information portal that correlates dengue cases and deaths with real-time data from climate, google searches, and satellite maps, giving an advance indicator of when dengue will emerge and potential dengue hotspot locations. This portal is accessible publicly but is targeted towards public health and local government agencies to give them advanced notice of dengue outbreaks and help prioritize resources.

The service relies on 3 data sets:
* Climate data from DOST-PAGASA
* Google searches for 'dengue' and related terms
* Satellite imaging data from NASA Landsat (Copernicus)

To populate the information portal, we propose 3 models:
* Predict dengue cases from climate and search data
* Predict dengue deaths from dengue cases
* Determine likely dengue hotspots by detecting stagnant water areas from satellite data

By doing this we are addressing 2 key challenges for public health and local government officials:
* Get ahead of the lagged delay of dengue reporting by using real-time information (e.g. climate, searches) to infer if dengue cases and deaths are about to spike.
* Precisely anticipate areas that may be affected by dengue to prioritize health aid, supplies, and proactive fumigation to prevent the outbreaks.

## Related Literature

We have conducted research and cite the following prior work that provide the foundation for this solution:
* In Caro, et. al. (2016), "*Forecasting and Data Visualization of Dengue spread in the Philippine Visayas Island group*", researchers proposed a method to predict dengue cases in the Visayas regions through the use of an Artificial Neural Network (ANN) which predicted dengue cases (R 0.8) through the use of climate data (temperature and rainfall) and a lagged number of previous dengue cases.
* In Yang, et. al. (2016), "*Advances in using Internet searches to track dengue*", researchers used Google searches for 'dengue' and related keywords to predict dengue cases in Mexico, Brazil, Thailand, Singapore and Taiwan.
* In Chua, Tan, et. al. (2018), "*Project Still Water*", researchers proposed a methodology to detect dengue hotspots using FAPAR (Vegetation) and NDWI (Water) areas.
* In Chan, Johnson (2012), "*The Incubation Periods of Dengue Viruses*", researchers establish the incubation periods for dengue. 95% of EIPs are between 5 and 33 days at 25C, and 2 and 15 days at30C, with means of 15 and 6.5 days, respectively which suggests that climate has an effect on the incubation of the disease.

## Objectives and Principles

Our proposed solution intends to builds on this work by the following principles:
* We test and propose independent and mixed models that combine Google searches and climate data to detect possible factors that affect dengue cases and deaths as well as provide an accurate forecast.
* We provide the information on an easily navigable interactive web application accessible by the public to help disseminate crucial information and also assist in public health efforts to prevent and contain the disease.

Logically, the behavior captured by the datasets in our study is:
1. First, precipitation and temperature climate creates mosquito-breeding environments
2. Mosquitoes spread and get infected by existing dengue cases, thereby spreading the disease
3. New infections cause alarm which drives internet searches for dengue
4. Dengue cases result in deaths
5. Cases and deaths are reported to public health officials

Therefore by detecting #1 and #3 we can address and hopefully disrupt the disease cycle before an epidemic spreads.
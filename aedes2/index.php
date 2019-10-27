<!DOCTYPE HTML>
<html>
<head>
	<title>Project AEDES</title>
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/app_css.css"/>
	<link rel="stylesheet" href="resources/w3.css"/>	
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Project AEDES" />
    <meta name="description" content="AEDES aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data." />
    <meta name="keywords" content="philippines, satellite data, dengue, google searches, climate, fapar, ndwi, dominic ligot, claire tayco, mark toledo, jansen lopez" />
    <meta property="og:url" content="http://aedesproject.org" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Project AEDES" />
    <meta property="og:description" content="AEDES aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data." />
    <meta property="og:image" content="resources/images/slide1.png" />
    <meta name="twitter:image" content="resources/images/slide1.png" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126660213-5"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-126660213-5');
	</script>
</head>

<body class="roboto" onresize="toggleClose('navBar');">
<script src="forecast/chart.bundle.js"></script>

	<header class="w3-top">
		<div class="w3-black w3-xlarge w3-bar">
			<div class="w3-bar-item w3-button w3-hide-large" onclick="toggle('navBar');"><i class="fa fa-bars"></i></div>
			<div class="w3-bar-item"><a href="http://aedesproject.org"><img src="resources/images/aedes_logo_white.png" height="30" /></a></div>
		</div>
	</header>
	
	<div class="spacer"></div>	
	
	<nav class="quattrocento">
		<div class="w3-sidebar ambient w3-col l2 w3-bar-block w3-hide-medium w3-hide-small">
			<? include('menu.php'); ?>
		</div>

		<div id="navBar" class="w3-sidebar ambient w3-animate-left w3-bar-block w3-hide w3-large">
			<? include('menu.php'); ?>
		</div>
	</nav>

	<div class="w3-row">
		<div class="w3-col l2 w3-hide-medium w3-hide-small">&nbsp;</div>
		<div class="w3-col w3-grey l10">
			<span id="section1" ><br/></span><hr/>
			<section class="w3-padding">
				<div class="w3-xlarge" >Predicted Mosquito Hotspots</div>	
				<br/><? include ('maps/index.html'); ?>
				<p class="w3-small">Source: Sentinel-2 Copernicus, Landsat</p>
				<p class="w3-small">Please allow time to load data. Pins represent intersection of NDWI, NDVI, FAPAR readings. See <a class="w3-text-indigo" href="#about">below</a> for references.</p>
			</section>

			<span id="section2" ><br/><br/></span><hr/>
			<section class="w3-padding">
				<div class="w3-xlarge">Social Listening: Dengue Trends</div>	
				<br/><? include ('searches/index.html'); ?>
				<p class="w3-small">Source: Google Search Index 'dengue' (January 2017 = 1)</p>
				<p class="w3-small">Please allow time to load data. Indices represent relative number of searches from 2017.</p> 
			</section>

			<span id="section3" ><br/><br/></span><hr/>
			<section class="w3-padding">
				<div class="w3-xlarge">Dengue Forecast</div>	
				<br/><? include ('forecast/index.html'); ?>
				<p class="w3-small">Source: Climate DOST-PAGASA, Google Searches</p>
				<p class="w3-small">Please allow time to load data. Models represent top 3 fitted forecasts for period 2015-2018. Model predictors tested: average rainfall, average temperature, google searches (dengue, dengue fever, dengue symptoms, dengue medicine), monthly seasonality, lagged effects. Please <a class="w3-text-indigo" href="#contact">contact us</a> for model definitions. </p>
			</section>
			
			<span id="about" ><br/><br/></span><hr/>
			<section class="w3-padding">
				<div class="w3-xlarge" >Advanced Early Dengue Prediction and Exploration Service (AEDES)</div>
				<p>AEDES aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data.</p>
				
				<p>The service relies on 3 data sets:
				<ul><li>Global Data: Satellite imaging data from <a class="w3-text-indigo" href="https://sentinel.esa.int/web/sentinel/sentinel-data-access">Sentinel-2 Copernicus</a> and <a href="https://www.usgs.gov/land-resources/nli/landsat/landsat-8">Landsat</a></li>
				<li>Local Data: Climate data from <a class="w3-text-indigo" href="http://bagong.pagasa.dost.gov.ph/climate/climatological-normals">DOST-PAGASA</a></li>
				<li>Digital Data: <a class="w3-text-indigo" href="https://trends.google.com/trends/explore?date=today%205-y&geo=PH&q=dengue">Google search trends for 'dengue'</a> and related terms</li></ul></p>

				<p>We propose to forecast dengue cases using a combination of:
				<ul><li>Climate Data: Average monthly temperature readings from local weather stations</li>
				<li>Climate Data: Average monthly rainfall (precipitation) readings from local weather stations</li>
				<li>Google Data: Search index for 'dengue', 'dengue symptoms', 'dengue fever', and 'dengue medicine'</li>
				<li>Lagged values for Climate factors, Google data, and actual dengue cases</li></ul></p>

				<p>We propose to detect likely mosquito hotspots using Satellite data readings:
				<ul><li>FAPAR: Fraction of Absorbed Photosynthetically Active Radiation, reference <a class="w3-text-indigo" href="https://pdfs.semanticscholar.org/d178/bd58b51fd18c2b97b07aa5c6154d49562a87.pdf">here</a>.</li>
				<li>NDVI: Normalized difference vegetation index, reference <a class="w3-text-indigo" href="https://earthobservatory.nasa.gov/features/MeasuringVegetation/measuring_vegetation_2.php">here</a>.</li>
				<li>NDWI: Normalized Difference Water Index, reference <a class="w3-text-indigo" href="http://ceeserver.cee.cornell.edu/wdp2/cee6150/Readings/Gao_1996_RSE_58_257-266_NDWI.pdf">here</a>.</li></ul></p>
			</section>
			<span id="contact" ><br/><br/></span><hr/>
			<section class="w3-padding">
				<div class="w3-xlarge" >Contact Us</div>	
				<p>The AEDES team consists of the following:
				<ul><li><a class="w3-text-indigo" href="https://www.linkedin.com/in/docligot/">Dominic Ligot</a>, Team Lead</li>
				<li><a class="w3-text-indigo" href="https://www.linkedin.com/in/claire-san-juan-tayco-81361828/">Claire Tayco</a>, Statistical Models</li>
				<li><a class="w3-text-indigo" href="https://www.linkedin.com/in/jansen-lopez/">Jansen Lopez</a>, Geospatial Models</li>
				<li><a class="w3-text-indigo" href="https://www.linkedin.com/in/toledomark/">Mark Toledo</a>, Data Engineer</li></ul></p>
				<p>We welcome collaborators. Contact us via Linked-IN, or email us at <a class="w3-text-indigo" href="mailto:support@cirrolytix.com">support@cirrolytix.com</a>.</p>
			</section>
			<footer class="w3-padding w3-small w3-black">
				&copy; 2019 Team AEDES
			</footer>
		</div>	
	</div>
	
	<script src="resources/app_js.js"></script> 

</body>
</html>
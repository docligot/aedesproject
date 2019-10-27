<!DOCTYPE HTML>
<html>
<head>
	<title>Project AEDES</title>
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/app_css.css"/>
	<link rel="stylesheet" href="resources/w3.css"/>	
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
</head>

<body class="roboto" onresize="toggleClose('navBar');">
<script src="forecast/chart.bundle.js"></script>

	<header class="w3-top">
		<div class="w3-black w3-xlarge w3-bar">
			<div class="w3-bar-item w3-button w3-hide-large" onclick="toggle('navBar');"><i class="fa fa-bars"></i></div>
			<div class="w3-bar-item"><img src="resources/images/aedes_logo_white.png" height="30" /></div>
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
				<p class="w3-small">Source: NDWI, NDVI, FAPAR Readings; Sentinel-2 Copernicus, Landsat</p>
			</section>

			<span id="section2" ><br/><br/></span><hr/>
			<section class="w3-padding">
				<div class="w3-xlarge">Social Listening: Dengue Trends</div>	
				<br/><? include ('searches/index.html'); ?>
				<p class="w3-small">Source: Google Search Index 'dengue' (January 2017 = 1)</p>
			</section>

			<span id="section3" ><br/><br/></span><hr/>
			<section class="w3-padding">
				<div class="w3-xlarge">Dengue Forecast</div>	
				<br/><? include ('forecast/index.html'); ?>
				<p class="w3-small">Source: Climate DOST-PAGASA, Google Searches</p>
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
				<hr/>
			</section>			

			<footer class="w3-padding w3-small w3-black">
				&copy; 2019 Team AEDES
			</footer>
		</div>	
	</div>
	
	<script src="resources/app_js.js"></script> 

</body>
</html>
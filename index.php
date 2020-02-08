<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Eduroam charts">
	<link rel="stylesheet" type="text/css" href="css/my-style2.css"/>
	<title>Eduroam Charts</title>
</head>

<body>
	<header>
		<nav>
		<div class="page-header">
			<ul class="header-menu">
				<li><a href="#" id='mapGlobal'>Global</a></li>
				<li>
					Eduroam Data (API Ip lookup)
				</li>
				<li><a  href="#" id='mapEurope'>Europe</a></li>
			</ul>
		</div>					
		</nav>
			
			
	</header>
	<div id="main-body">

		<script src="https://code.highcharts.com/maps/highmaps.js"></script>
		<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="https://code.highcharts.com/mapdata/custom/europe.js"></script>
		<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
		
		<div id="container">
		
			<script src="selector.js"></script>
			<?php include('data.php') ?>
			<script src="data.js"></script>

		</div>
	
	</div>
	<?php include('footer/footer.php') ?>
</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Eduroam charts">
	<link rel="stylesheet" type="text/css" href="css/my-style2.css"/>
	<title>Eduroam Charts - Home</title>
</head>

<body>
	<header>
			<div class="page-header">
				Test (API Ip lookup) <a href="index.php">[Back]</a>
			</div>
			
	</header>
	<div id="main-body">

		<script src="https://code.highcharts.com/maps/highmaps.js"></script>
		<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="https://code.highcharts.com/mapdata/custom/europe.js"></script>
		<script src="https://code.highcharts.com/mapdata/custom/world-lowres.js"></script>
		
		<div class="container">
			<!-- <script src="chart-global-api-test.js"></script> -->
		
		
		<?php

		$token = '336d1a2258d432';
				
		$ips = array("114.22.88.124","187.149.189.194","25.238.174.19","190.170.217.117","33.76.120.40","29.93.223.167","44.216.100.95","178.40.17.54","88.67.11.65","58.30.69.187","172.204.73.37","207.136.52.158","72.54.137.101","98.160.99.55","22.24.227.70","163.241.118.9","171.230.29.148","121.195.50.13","160.151.139.186","6.147.88.231","153.215.92.107","164.72.207.233","156.223.50.238","204.165.178.133","68.99.158.100","53.143.45.195");//,"215.73.235.210","245.14.177.130","0.150.250.148","119.61.254.197","234.185.104.198","26.45.157.212","21.184.2.24","80.211.246.144","156.2.239.132","20.208.87.117","82.110.161.224","53.2.98.194","20.61.79.147","180.86.202.239","86.150.181.80","65.128.157.190","8.151.245.226","113.79.140.217","198.233.79.180","130.221.139.69","94.159.150.5","4.231.30.102","126.241.243.174","224.232.161.61","69.198.203.220","237.27.173.183","53.50.108.152","153.157.148.171","50.213.155.22","146.20.105.11","172.54.70.249","100.188.45.26","246.25.131.67","19.124.44.50","162.6.39.179","177.66.175.145","185.18.245.232","80.51.73.173","19.102.6.255","201.75.8.174","133.87.47.81","182.15.253.231","182.190.214.91","46.252.216.148","37.124.95.49","23.183.94.184","229.142.177.46","7.235.19.179","216.102.88.131","145.218.158.85","33.111.83.177","229.227.42.244","50.156.247.202","119.40.60.76","48.207.79.254","40.205.253.221","181.244.1.27","27.41.247.17","56.18.55.31","198.142.150.239","226.120.236.108","245.9.71.203","52.5.236.107","235.156.158.33","126.215.23.203","98.66.229.47","26.6.99.193","248.14.178.164","61.33.60.54","229.180.150.54","223.191.61.127","85.6.95.115","172.43.19.86","116.127.206.249","190.151.115.70","103.154.86.125","232.235.170.225","107.6.63.209","148.94.102.60","131.170.233.0","162.229.82.149","43.157.136.34","158.73.99.247","187.204.210.100","105.17.243.136","36.218.116.187","31.170.187.14","212.20.12.164","92.19.202.119","150.210.116.63","69.85.92.245","147.244.135.209","64.80.139.249","81.229.192.36","74.202.255.91","30.43.171.93","142.225.40.149","144.233.218.25","194.202.178.173","206.135.27.69","197.124.115.118","219.167.108.121","112.26.223.183","80.4.87.116","80.209.176.60","83.194.186.23","51.113.222.9","33.107.120.134","243.198.120.30","27.209.72.186","33.87.4.84","96.226.19.60","158.248.85.36","102.38.95.213","212.82.237.188","6.212.73.217","241.66.144.195","58.238.166.210","132.124.39.107","89.91.144.200","165.159.246.212","129.92.97.131","59.115.102.118");

		//$ip = '94.67.30.176';
	
		$counter = 0;
		foreach ($ips as $ip)
		{

			$ips[$counter] .= "/country";
			$counter = $counter + 1;
			// $tags=json_decode(file_get_contents('http://getcitydetails.geobytes.com/GetCityDetails?fqcn='.$ip), true);
			// if($tags['geobytesipaddress']!='' && $tags['geobytescountry']!='' && $tags['geobytesinternet']!='')
			// {
			// 	// echo '<p>IP:           '.$tags['geobytesipaddress'].'. '.PHP_EOL ;
			// 	// echo '<p>Country:      '.$tags['geobytescountry'].'. '.PHP_EOL ;
			// 	echo '<p>Country Code: '.$tags['geobytesinternet'].'. '.PHP_EOL ;
			// }

			// $tags=json_decode(file_get_contents('https://ipinfo.io/'.$ip.'/country'), true);
			// if($tags['country']!='')
			// {
			// 	echo '<p>Country Code: '.$tags['country'].'. '.PHP_EOL ;
			// }

			// $tags = file_get_contents('https://ipinfo.io/'.$ip.'/country');
			// echo '<p>Country Code: '.$tags.'. '.PHP_EOL ;



		}

		
		$myJSON = json_encode($ips, JSON_UNESCAPED_SLASHES);

		//API URL
		$url = 'ipinfo.io/batch?token='.$token;

		//create a new cURL resource
		$ch = curl_init($url);

		//setup request to send json via POST
		$data = array(
			'username' => 'codexworld',
			'password' => '123456'
		);
		$payload = json_encode(array("user" => $data));

		//attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $myJSON);

		//set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

		//return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//execute the POST request
		$result = curl_exec($ch);

		//close cURL resource
		curl_close($ch);

		$resultArray = json_decode( $result, true );


		echo '<p>Data:';
		foreach($resultArray as $x => $x_value) {
			echo " " . $x_value;
		}
		echo '</p>';
		
		?>

		</div>
	
	</div>
	<?php include('footer/footer.php') ?>
</body>


</html>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<meta charset="utf-8">
		<script src = "JS/main.js"> </script>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Capital cities</title>
		<style>
		section {
				font-family: Verdana;
				}
		aside {
				font-family: Verdana;
			  }
		</style>
	</head>

<body>
	<div id="wrapper">
	<header style="font-family:georgia">Find a capital</header>
	<canvas id = "canvas" width ="1200" height ="220"></canvas> 
	<nav>
	<ul>
	<li><a rel="external" href="index.html">Home</a></li>
	<li><a rel="external" href="info.php">Documentation</a></li>
	
	</li>
	</ul>
	</nav>

	<article>
	<section>
<?php

    $jsondata = file_get_contents("documentation.json");
    $json = json_decode($jsondata, true);

    echo $json[0]['function'];
    echo '<br>';
    echo $json[0]['language'];
    echo '<br>';
    echo $json[0]['process'];
    echo '<br>';
	echo $json[0]['location'];
    echo '<br>';
	echo $json[0]['author'];
    echo '<br>  </br>';
   echo $json[1]['function'];
    echo '<br>';
    echo $json[1]['language'];
    echo '<br>';
    echo $json[1]['process'];
    echo '<br>';
	echo $json[1]['location'];
    echo '<br>';
	echo $json[1]['author'];
    echo '<br>  </br>';
	echo $json[2]['function'];
    echo '<br>';
    echo $json[2]['language'];
    echo '<br>';
    echo $json[2]['process'];
    echo '<br>';
	echo $json[2]['location'];
    echo '<br>';
	echo $json[2]['author'];
    echo '<br>  </br>';
	echo $json[3]['function'];
    echo '<br>';
    echo $json[3]['language'];
    echo '<br>';
    echo $json[3]['process'];
    echo '<br>';
	echo $json[3]['location'];
    echo '<br>';
	echo $json[3]['author'];
    echo '<br>  </br>';
	echo $json[4]['function'];
    echo '<br>';
    echo $json[4]['language'];
    echo '<br>';
    echo $json[4]['process'];
    echo '<br>';
	echo $json[4]['location'];
    echo '<br>';
	echo $json[4]['author'];
    echo '<br>  </br>';
	echo $json[5]['function'];
    echo '<br>';
    echo $json[5]['language'];
    echo '<br>';
    echo $json[5]['process'];
    echo '<br>';
	echo $json[5]['location'];
    echo '<br>';
	echo $json[5]['author'];
    echo '<br>  </br>';
	echo $json[6]['function'];
    echo '<br>';
    echo $json[6]['language'];
    echo '<br>';
    echo $json[6]['process'];
    echo '<br>';
	echo $json[6]['location'];
    echo '<br>';
	echo $json[6]['author'];
    echo '<br>  </br>';
	echo $json[7]['function'];
    echo '<br>';
    echo $json[7]['language'];
    echo '<br>';
    echo $json[7]['process'];
    echo '<br>';
	echo $json[7]['location'];
    echo '<br>';
	echo $json[7]['author'];
    echo '<br>  </br>';
	echo $json[8]['function'];
    echo '<br>';
    echo $json[8]['language'];
    echo '<br>';
    echo $json[8]['process'];
    echo '<br>';
	echo $json[8]['location'];
    echo '<br>';
	echo $json[8]['author'];
    echo '<br>  </br>';
	echo $json[9]['function'];
    echo '<br>';
    echo $json[9]['language'];
    echo '<br>';
    echo $json[9]['process'];
    echo '<br>';
	echo $json[9]['location'];
    echo '<br>';
	echo $json[9]['author'];
    echo '<br>  </br>';
	echo $json[10]['function'];
    echo '<br>';
    echo $json[10]['language'];
    echo '<br>';
    echo $json[10]['process'];
    echo '<br>';
	echo $json[10]['location'];
    echo '<br>';
	echo $json[10]['author'];
    echo '<br>  </br>';
	echo $json[11]['function'];
    echo '<br>';
    echo $json[11]['language'];
    echo '<br>';
    echo $json[11]['process'];
    echo '<br>';
	echo $json[11]['location'];
    echo '<br>';
	echo $json[11]['author'];
    echo '<br>  </br>';
	echo $json[12]['function'];
    echo '<br>';
    echo $json[12]['language'];
    echo '<br>';
    echo $json[12]['process'];
    echo '<br>';
	echo $json[12]['location'];
    echo '<br>';
	echo $json[12]['author'];
    echo '<br>  </br>';

?>
	</article>
	</section>
	<aside>
		<p>The webiste uses javascript for country suggestions</p>
		<p>Google's API is used for displaying map section, and the Javascript takes care of the rest. </p>
		<p>Javascript is also used for the header animation, as well as displaying countries.</p>
	</aside>
	</body>
	</html>

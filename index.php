<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta charset="utf-8">
		<script src = "main.js"> </script>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Capital cities</title>
	</head>

<body>
	<div id="wrapper">
	<header style="font-family:georgia">Find a capital</header>
	<canvas id = "canvas" width ="1200" height ="220"></canvas> 
	<nav>
	<ul>
	<li><a rel="external" href="#">Home</a></li>
	<li><a rel="external" href="info.html">Documentation</a></li>
	
	</li>
	</ul>
	</nav>

	<article>
	<section>
	<p> Welcome to the website which allows you to find the capital of every country simply by selecting the name of the country!
		<br>  </br>
	<p> Please start typing the name of the country and click on the suggestion when it shows up. After that, click on "Go" button.
		
	<form name="myForm" autocomplete="off" action="#">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="myCountry" placeholder="Country">
  </div>
  </form>
	<button id="clickMe" type="submit" value="findCapital"onclick="findCapital()">Go
		<script>
			document.getElementById("clickMe").onclick = testFunction;
		</script>
	</button>
		<input id="secondInput" type="text" name="myCapital" placeholder="Capital">
	<script>
		autocomplete(document.getElementById("myInput"), countries);
	</script>
	</section>	
	</article>
	
	<aside>
	<div class="mapouter"><div class="gmap_canvas"><iframe width="543" height="325" id="gmap_canvas" src="https://maps.google.com/maps?q=dublin&t=&z=11&ie=UTF8&iwloc=&output=embed"
	frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net">
	wordpress themes by crocothemes.net</a></div><style>.mapouter{text-align:right;height:325px;width:443px;}.gmap_canvas 
	{overflow:hidden;background:none!important;height:325px;width:443px;}</style></div>
	
	</aside>
	<br>  </br>
	<br>  </br>
	<br>  </br>
	<br>  </br>
	<br>  </br>
	<footer>Copyright Krunoslav Bubanj 2018</footer>
	</div>
</body>
</html>

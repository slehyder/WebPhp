<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>Adri@net</title>
<link rel="stylesheet" href="../css/principal.css"  type="text/css" media="screen">
<link rel="stylesheet" href="../css/lavalamp.css" type="text/css" media="screen">
<link type="text/css" rel="stylesheet" href="../css/sliderman.css"  />

<script type="text/javascript" src="../js/sliderman.1.3.7.js"></script>
<script type="text/javascript" src="../js/jquery-1.2.3.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>
<script type="text/javascript">
$(function() {
$("#1, #2, #3").lavaLamp({
fx: "backout",
 speed: 700,
click: function(event, menuItem) {
return false;
}
});
});
    </script>
</head>

<body>

<div id="banner">
<a href="../index.php" >
<img alt="banner" src="../imagenes/logo.png" />
</a>
</div>

<div id="social">

<a href="http://www.facebook.com" target="_blank">
<img  id="facebook" alt="fb" src="../imagenes/facebook.png" />
</a>

<a href="http://www.twitter.com" target="_blank">

<img id="twitter" alt="tw" src="../imagenes/twitter.png" />

</a>


</div>

<ul class="lavaLampWithImage" id="1">
    <li class="current"><a href="../registro/registro_usuario.php">Registrate</a></li>
    <li><a href="../inicio_session/inicio_form.php">Ingresa</a></li>
    <li><a href="#">Informacion</a></li>
</ul>

<div id="wrapper">

		<div id="examples_outer">
			<div id="slider_container_2">

				<div id="SliderName_2" class="SliderName_2">
					<img src="../imagenes/cerebro.png" width="897" height="253" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description">Su web de confianza:<strong>Adri@net</strong></div>
					<img src="../imagenes/mundo.png" width="897" height="253" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description">Su web de confianza: <strong>Adri@net</strong></div>
					<img src="../imagenes/mundillo.png" width="897" height="253" alt="Demo2 third" title="Demo2 third" />
					<div class="SliderName_2Description">Su web de confianza: <strong>Adri@net</strong></div>
					<img src="../imagenes/web.png" width="897" height="253" alt="Demo2 fourth" title="Demo2 fourth" />
					<div class="SliderName_2Description">Su web de confianza: <strong>Adri@net</strong></div>
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation_2"></div>
				<div class="c"></div>

				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 857, height: 253, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'imagenes/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="imagenes/clear.gif" />'}
						}
					});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
		</div>

		<div class="c"></div>
</div>

<div id="fondoprincipal">
</div>

<div id="piepagina">
</div>
</body>
</html>

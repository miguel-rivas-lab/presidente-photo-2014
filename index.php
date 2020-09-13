<!DOCTYPE html>
<html>
<head>

	<?php if (isset($_GET['img'])): ?>
	<meta name="og:image" content="<?php echo $_GET['img']; ?>" />
	<?php else: ?>
	<meta name="og:image" content="http://presidente.com.do/photo-assignment/img/pv_fb_photoassignment_2014.png" />
	<?php endif; ?>

	<?php
		include('mod/metadata.php');
		metadata(array(
			"titulo" => "Presidente Photo Assignment",
			"tags" => ", festival, photo, assignment",
			"icon_path" => "img/ico.png",
			"device" => true,
			"description" => "Revive el Festival Presidente 2014 desde otra perspectiva."
		));

		function galer($a1) {
			for($ccc=1; $ccc<=3; $ccc++){
				echo "
			<div class=\"gal gal0".$ccc."\">";
				for($c=0; $c<=14; $c++){
				$cc = ($c > 9 ? $c : "0".$c );
				echo "
				<div class=\"imag\">
					<a href=\"img/fts/".$a1."_".$ccc."_0".$cc.".jpg\" rel=\"".$a1."_".$ccc."\">
						<img width=\"100%\" src=\"img/pvfts/".$a1."_".$ccc."_0".$cc.".jpg\"/>
					</a>
				</div>";
				}
				echo "
			</div>";
			}
		}
	?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="mod/fancy/jquery.fancybox.css?v=2.1.5" media="screen" />

<script src="js/jquery-1112.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="mod/fancy/jquery.fancybox.js?v=2.1.5"></script>


</head>
<body>

<div id="cover"><div></div></div>

<hr/>

<div id="pbox"></div>
<div id="bkmenu"></div>
<div id="menu"></div>

<div id="menu_box">
	<div id="opc_01"> 
		<div class="tab">
		<div class="cel">
		<h3>-Hilda Pellerano-</h3><br/>
		<a hreft="#" class="btn btn_04">Viernes 3</a>
		<a hreft="#" class="btn btn_05">Sábado 4</a>
		<a hreft="#" class="btn btn_06">Domingo 5</a>
		</div>
		</div>
	</div>

	<div id="opc_02">
		<div class="tab">
		<div class="cel">
		<h3>-Karla Read-</h3><br/>
		<a hreft="#" class="btn btn_04">Viernes 3</a>
		<a hreft="#" class="btn btn_05">Sábado 4</a>
		<a hreft="#" class="btn btn_06">Domingo 5</a>
		</div>
		</div>
	</div>

	<div id="opc_03">
		<div class="tab">
		<div class="cel">
		<h3>-Máximo del castillo-</h3><br/>
		<a hreft="#" class="btn btn_04">Viernes 3</a>
		<a hreft="#" class="btn btn_05">Sábado 4</a>
		<a hreft="#" class="btn btn_06">Domingo 5</a>
		</div>
		</div>
	</div>

	<a hreft="#" id="btn_00" class="btn">Home</a>
</div>

<div class="tab">
<div id="box_01" class="cel rsz">
	<div class="bk_stat">
		<div class="orn_01"></div>
		<div class="orn_02"></div>
	</div>
	<div id="logo"></div><br/>
	<h2>-Photo assignment-</h2><br/>
	<br/>
	<div class="txt">
		Artistas, fans, prensa… miles de ojos estuvieron puestos sobre el Festival Presidente.<br/>
		Pero este año también invitamos a tres jóvenes fotógrafos para que, más allá de la cobertura tradicional, nos dieran un visión personal y artística del evento musical más importante de la región.<br/>
		Karla, Hilda y Máximo fueron seleccionados para el primer #PresidentePhotoAssignment.<br/>
		A través de su talento, su visión personal y sus lentes podemos ver otra cara del Festival Presidente.<br/>
		Esta es una perspectiva más subjetiva, donde la energía que se vive tanto desde arriba como desde abajo de la tarima es la protagonista y donde el arte de la fotografía se une a la pasión, el ritmo y la alegría. </div>
	<br/><br/><br/><br/>
	<a hreft="#" id="btn_01" class="btn">Hilda Pellerano</a>
	<a hreft="#" id="btn_02" class="btn">Karla Read</a>
	<a hreft="#" id="btn_03" class="btn">Máximo del Castillo</a>
</div>
</div>

<div id="box_02_01" class="rsz_h profile">
	<div class="bk_stat">
		<div class="orn_01"></div>
		<div class="orn_02"></div>
	</div>
	<div class="tab">
	<div class="cel">
	<h1>Hilda Pellerano</h1><br/>
	<br/>
	<div class="txt">Licenciada en Comunicación Publicitaria, nacida en la República Dominicana. Especializada en fotografía de música tanto en el país como en los Estados Unidos. Con más de seis años en la industria, Hilda ha documentado los artistas más influyentes de nuestros tiempos: Paul McCartney, Sting, Shakira, David Guetta, John Mayer, Arcade Fire, entre otros.
	<p>Su trabajo ha sido celebrado por la prensa nacional e internacional, logrando así publicaciones importantes como The Huffington Post, Stereogum, Prefix Magazine, QRO MAG, y The Wild Honey Pie.</p>
<p>Apasionada y curiosa por el comportamiento humano, Hilda percibe belleza en los sentimientos más crudos y vulnerables. Esto, usualmente, lo representa de forma simple y pura: en blanco y negro.</p>
	</div>
	<br/><br/>
	<a hreft="#" class="btn btn_04">Viernes 3</a>
	<a hreft="#" class="btn btn_05">Sábado 4</a>
	<a hreft="#" class="btn btn_06">Domingo 5</a>
	</div>
	</div>
	<?php galer("H");?>
</div>

<div id="box_02_02" class="rsz_h profile">
	<div class="bk_stat">
		<div class="orn_01"></div>
		<div class="orn_02"></div>
	</div>
	<div class="tab">
	<div class="cel">
	<h1>Karla Read</h1><br/>
	<br/>
	<div class="txt">Nacida en el año 1988, en la ciudad de Santo Domingo,  República  Dominicana.  Poco después de graduarse como bachiller en el 2007, Karla Read decide partir a la ciudad de Buenos Aires, donde estudia y trabaja como fotógrafa hasta el año 2013.<p>Actualmente reside en la cuidad de Santo Domingo, donde sigue trabajando en medios audio visuales.</p></div>
	<br/><br/>
	<a hreft="#" class="btn btn_04">Viernes 3</a>
	<a hreft="#" class="btn btn_05">Sábado 4</a>
	<a hreft="#" class="btn btn_06">Domingo 5</a>
	</div>
	</div>
	<?php galer("K");?>
</div>

<div id="box_02_03" class="rsz_h profile">
	<div class="bk_stat">
		<div class="orn_01"></div>
		<div class="orn_02"></div>
	</div>
	<div class="tab">
	<div class="cel">
	<h1>Máximo del Castillo</h1><br/>
	<br/>
	<div class="txt">Nacido en 1980 en un pueblito dentro de la ciudad de Santo Domingo. Soñador de carrera, diseñador por conveniencia y fotógrafo de manía. Su trabajo ha sido expuesto en el Museo de Arte Moderno "Terra en transe", en Mata de Mango  "Becoming China Town", y en el Centro Cultural de España "Da Pa Lo Do" y "Doble Exposición". En el 2012 ganó el Premio Joven de la Imagen, otorgado por el Centro de la Imagen.
<p>Gusta de atesorar momentos para luego recordarlos.</p>
	</div>
	<br/><br/>
	<a hreft="#" class="btn btn_04">Viernes 3</a>
	<a hreft="#" class="btn btn_05">Sábado 4</a>
	<a hreft="#" class="btn btn_06">Domingo 5</a>
	</div>
	</div>
<?php galer("M");?>
</div>

</body>
</html>
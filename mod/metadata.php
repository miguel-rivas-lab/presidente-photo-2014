<?php

function metadata($opt)
{

if($opt['device'])
{

?>
	<meta name="viewport" content="width=device-width">

<?php
}
?>

	<title><?php echo $opt['titulo']; ?></title>
	<meta charset='utf-8' />

	<meta property='og:description' content='<?php echo $opt['description']; ?>' />
	<meta property='og:image:type' content='image/png' />
	<meta property='og:image:width' content='1200' />
	<meta property='og:image:height' content='630' />
	<meta name='keywords' content='presidente, santo, domingo, republica, dominicana, cerveceria, nacional, cerveza, verdadero, sabor, ambev<?php echo $opt['tags']; ?>'/>
	<meta name='description' content='La mejor cerveza, el verdadero sabor. Bienvenido a la página web oficial de Cerveza Presidente. No. 1 en el mercado dominicano e ícono nacional de frescura.'>

	<link rel='icon' type='image/png' href='<?php echo $opt['icon_path']; ?>'>
	<!-- Safari APP -->
	<link rel='apple-touch-icon-precomposed' href='<?php echo $opt['icon_path']; ?>' />
	<link rel='apple-touch-icon' href='<?php echo $opt['icon_path']; ?>' />
	<!-- W8 -->
	<meta name='msapplication-TileColor' content='#669900' />
	<meta name='msapplication-TileImage' content='<?php echo $opt['icon_path']; ?>' />

<?php
}
?>
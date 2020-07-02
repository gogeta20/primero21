<?php
//session_start();

if (isset($_SESSION['sesion'])) {
  $nombre = $_SESSION['sesionNombre'];
  $icono = "fas fa-futbol";
}else{
  $nombre = "Login";
  $icono = "fas fa-ghost";
}



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Practica Pagina PHP</title>
		<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> -->
		<link href="https://fonts.googleapis.com/css?family=Righteous|Shadows+Into+Light&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/estilos.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<script src="https://kit.fontawesome.com/ca1ebe22a5.js" crossorigin="anonymous"></script>
	</head>
	<body onload="banner()">
		<header class="barraSuperior">
            <h1 class="tituloPagina"> <a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name'); ?>">Futbol Lugo</a></h1>
                <?php 
                    wp_nav_menu(array(
                        'theme_location'    => 'superior',
                        'container'         => 'nav'
                    ));
                ?>
			<div class="busqueda">
				<form name="busqueda" action="buscar.php" method="get">
					<button type="submit" class="fas fa-search"></button>
					<input type="text" name="buscar" placeholder="buscar">
				</form>
			</div>
		</header>
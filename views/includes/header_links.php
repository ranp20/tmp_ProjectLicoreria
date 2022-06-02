<?php 
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  // CONFIGURACIÓN - LOCALHOST
  $url_base =  $actual_link . "/tmp_ProjectLicoreria/";
  $url_cli_views = $actual_link . "/tmp_ProjectLicoreria/views/";
  $url_cli_assets =  $actual_link . "/tmp_ProjectLicoreria/views/assets/";
  $url_adm_assets =  $actual_link . "/tmp_ProjectLicoreria/admin/views/assets/";
  // CONFIGURACIÓN - SERVIDOR
  /*
  $url_base =  $actual_link . "/";
  $url_cli_views = $actual_link . "/views/";
  $url_cli_assets =  $actual_link . "/views/assets/";
  $url_adm_assets =  $actual_link . "/admin/views/assets/";
  */
?>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0,shrink-to-fit=no,viewport-fit=cover">
<meta name="description" content="¡Gana cambiando con MiCambista! Dale a tu dinero el valor que merece."/>
<meta name="theme-color" content="#FFF394">
<meta name="author" content="R@np-2021"/>
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<meta name="twitter.card" content="summary">
<meta property="og:locale" content="es_ES"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Mi Cambista"/>
<meta property="og:url" name="twitter.url" content="https://localhost/MiCambista">
<meta property="og:title" name="twitter.title" content="Centro de cambio en línea con las mejores tasas | Mi Cambista"/>
<meta property="og:description" name="twitter.description" content="¡Gana cambiando con MiCambista! Dale a tu dinero el valor que merece."/>
<meta property="og:image" name="twitter.image" content=""/>
<link rel="icon" type="image/x-icon" href=""/>
<link rel="apple-touch-icon" href="views/assets/img/svg/logo.svg">
<link rel="canonical" href="https://localhost/MiCambista">
<!-- JQUERY UNCOMPRESSED -->
<script type="text/javascript" src="<?php echo $url_base; ?>views/js/jquery/jquery-3.6.0.min.js"></script>
<!-- BOOSTRAP DOWNLOADED -->
<link rel="stylesheet" type="text/css" href="<?php echo $url_base; ?>views/js/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="<?php echo $url_base; ?>views/js/bootstrap/js/bootstrap.min.js"></script>
<!-- STYLESSHEET -->
<link rel="stylesheet" type="text/css" href="<?php echo $url_base; ?>views/assets/css/styles.min.css">
<!-- GOOGLE FONTS -->
<!--
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
-->
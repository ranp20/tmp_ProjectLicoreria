<?php
	require_once 'php/compress_text_files.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Licorería - Home</title>	
	<?php require_once 'views/includes/header_links.php';?>
	<link rel="stylesheet" href="<?php echo $url_cli_views; ?>js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
	<script type="text/javascript" src="<?php echo $url_cli_views; ?>js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
</head>
<body>
	<div class="c-cont">
		<main class="c-cont__cMain">
			<?php require_once 'views/includes/inc_topinfolinks.php';?>
			<?php require_once 'views/includes/inc_headertop.php';?>
			<?php require_once 'views/includes/inc_heroimage.php';?>
			<?php require_once 'views/includes/inc_brandlist.php';?>
			<?php require_once 'views/includes/inc_recentsproducts.php';?>
		</main>
	</div>
	<footer class="c-contFooter"></footer>
	<script type="text/javascript" src="<?php echo $url_cli_views;?>js/actions_pages/landingpage-home.js"></script>
</body>
</html>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Imagenes.php';

$page_name = "Imagenes";

$divshot_css = "";

$css_array[]="imagenes.css";
$js_array[]="imagenes.js";
$css_array[]="jquery.fancybox-1.3.4.css";
$js_array[]="jquery.fancybox-1.3.4.js";

$imagenes = new Imagenes();

?>

<?php include 'includes/master-header.php'?>
<div class="container body imagenes">
	
	<h1>Imagenes</h1>
	
	<ul>
		<?php foreach ($imagenes->getImagenes() as $key => $imagen): ?>
			<li>
				<a class="fancybox" href="<?php echo $imagen->url ?>" title="<?php echo $imagen->titulo ?>" rel="imagenes">
					<img src="<?php echo $imagen->url ?>" alt="<?php echo $imagen->titulo ?>"/>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

</div>
<?php include 'includes/master-footer.php'?>
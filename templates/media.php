<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Media.php';

$page_name = "Media";

$css_array[]="videos.css";
$css_array[]="imagenes.css";
$js_array[]="videos.js";
$js_array[]="imagenes.js";
$css_array[]="jquery.fancybox-1.3.4.css";
$js_array[]="jquery.fancybox-1.3.4.js";

$media = new Media();
?>

<?php include 'includes/master-header.php'?>
<div class="container body">
	
	<h1> Videos </h1><a href="/media/videos" alt="Videos">ver mas</a>
	
	<ul class="videos-list videos">
		<?php foreach ($media->videos as $key => $video): ?>
			<li>
				<a class="youtube iframe"  href="http://www.youtube.com/embed/<?php echo $video['youtube_id'] ?>?autoplay=1&hl=es&cc_load_policy=1" >
					<p><?php echo $video['nombre'] ?></p>
					<img src="http://img.youtube.com/vi/<?php echo $video['youtube_id'] ?>/0.jpg" />
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
	
	<h1>Imagenes</h1><a href="/media/imagenes" alt="Imagenes">ver mas</a>
	
	<ul class="imagenes">
		<?php foreach ($media->imagenes as $key => $imagen): ?>
			<li>
				<a class="fancybox" href="<?php echo $imagen->url ?>" title="<?php echo $imagen->titulo ?>" rel="imagenes">
					<img src="<?php echo $imagen->url ?>" alt="<?php echo $imagen->titulo ?>"/>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

</div>
<?php include 'includes/master-footer.php'?>
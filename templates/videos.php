<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Videos.php';

$page_name = "Videos";

$divshot_css = "";

$css_array[]="videos.css";
$js_array[]="jquery.youtubepopup.js";
$js_array[]="videos.js";

$videos = new Videos();

?>

<?php include 'includes/master-header.php'?>
<div class="container body videos">
	
	<h1> Videos </h1>
	
	<ul class="videos-list">
		<?php foreach ($videos->getVideos() as $key => $video): ?>
			<li>
				<a class="youtube"  href="http://www.youtube.com/embed/<?php echo $video['youtube-id'] ?>" >
					<p><?php echo $video['nombre'] ?></p>
					<img src="http://img.youtube.com/vi/<?php echo $video['youtube-id'] ?>/0.jpg" />
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php include 'includes/master-footer.php'?>
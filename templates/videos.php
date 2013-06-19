<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Videos.php';



if (isset($_GET['pagina'])){
	$pagina_pedida = (int)$_GET['pagina'];
}else{
	$pagina_pedida = 1;
}

if($pagina_pedida == 0){
	header("Location:/media/videos?pagina=1");
}

$page_name = "Videos";

$divshot_css = "videos.css";

$css_array[]="videos.css";
$css_array[]="jquery.fancybox-1.3.4.css";
$js_array[]="jquery.fancybox-1.3.4.js";
$js_array[]="videos.js";

$cant_videos = 16;

$videos = new Videos();

$paginas = ceil($videos->cant_videos / $cant_videos);

?>

<?php include 'includes/master-header.php'?>
<div class="container body ">
	
	<div class="contenedor videos">
		<h1> Videos </h1>
		
		<ul class="videos-list">
			<?php foreach ($videos->getVideos($cant_videos, $pagina_pedida) as $key => $video): ?>
				<li>
					<a class="youtube iframe"  href="http://www.youtube.com/embed/<?php echo $video['youtube_id'] ?>?autoplay=1&hl=es&cc_load_policy=1" >
						<p><?php echo $video['nombre'] ?></p>
						<img src="http://img.youtube.com/vi/<?php echo $video['youtube_id'] ?>/0.jpg" />
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	
	<div class="pagination pagination-centered">
	    <ul>
	      <li class="<?= ($pagina_pedida == 1)?"disabled":""?>">
	        <a href="/media/videos?pagina=<?=$pagina_pedida-1?>">Menos</a>
	      </li>
	      <?php for ($i = 1; $i <= $paginas; $i++):?>
	      	<li class="<?= ($pagina_pedida == $i)?"active":""?>">
		    	<a href="/media/videos?pagina=<?=$i?>"><?=$i?></a> 
		    </li>
	      <?php endfor;?>
	      <li class="<?= ($pagina_pedida == $paginas)?"disabled":""?>">
	        <a href="/media/videos?pagina=<?=$pagina_pedida+1?>">Mas</a> 
	      </li>
	    </ul>
	</div>
	
</div>
<?php include 'includes/master-footer.php'?>
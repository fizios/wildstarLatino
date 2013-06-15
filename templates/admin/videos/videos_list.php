<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Videos.php';

$page_name = "admin videos";

if(!isset($_SESSION['Usuario_log']) || !$_SESSION['Usuario_log']){
	header("Location: /");
}

$videos = new Videos();
$misVideos = $videos->getVideos();

$divshot_css = "";

$js_array[] = "noticias_list.js"

?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
<h3><a href="content-admin/admin/">Menu</a></h3>
<h1> Noticias </h1>
	<span><a href="/content-admin/videos/nuevo">Nuev Video</a></span>
	<ul>
		<?php foreach($misVideos as $video):?>
			<li>
				<?php echo $video['nombre'] ?>
				<a href="/content-admin/videos/editar/<?php echo $video['id'] ?>" class="action editar">Editar</a>
				<a href="/content-admin/videos/accion/borrar/<?php echo $video['id'] ?>" class="action borrar">Borrar</a>
			</li>
		<?php endforeach;?>
	</ul>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>
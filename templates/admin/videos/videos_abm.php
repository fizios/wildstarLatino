<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Video.php';

$page_name = "videos abm";

if(!isset($_SESSION['Usuario_log']) || !$_SESSION['Usuario_log']){
	header("Location: /");
}

if (isset($_GET['id'])){
	$video = new Video($_GET['id']);
}else {
	$video = new Video();
}

$divshot_css = "";
$js_array[] = "";

?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
<h3><a href="/content-admin/noticias">Volver al listado</a></h3>
<h1> Video </h1>
	<form action="/content-admin/videos/accion/guardar/<?=$video->id?>" method="post">
		<h3>Edicion</h3>
		<label>Nombre:</label>
		<input type="text" name="nombre" value="<?= $video->nombre?>"/>
		<label>Id Youtube:</label>
		<input type="text" name="youtube-id" value="<?= $video->youtubeId?>"/>
		<label>Seccion:</label>
		<input type="text" name="seccion" value="<?= $video->seccion?>"/>
		<label>SubSeccion:</label>
		<input type="text" name="subseccion" value="<?= $video->subseccion?>"/>
		<input type="submit" value="Guardar" />
	</form>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>
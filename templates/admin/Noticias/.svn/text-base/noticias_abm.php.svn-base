<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Noticias/Noticia.php';

$page_name = "noticias abm";

if(!isset($_SESSION['Usuario_log']) || !$_SESSION['Usuario_log']){
	header("Location: /");
}

if (isset($_GET['id'])){
	$noticia = new Noticia($_GET['id']);
}else {
	$noticia = new Noticia();
}

$divshot_css = "";
$js_array[] = "";

?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
<h3><a href="/content-admin/noticias">Volver al listado</a></h3>
<h1> Noticia </h1>
	<form action="/content-admin/noticias/accion/guardar/<?=$noticia->id?>" method="post">
		<h3>Edicion</h3>
		<label>titulo:</label>
		<input type="text" name="titulo" value="<?= $noticia->titulo?>"/>
		<label>Fecha:</label>
		<input type="text" name="fecha" value="<?= $noticia->fecha?>"/>
		<label>resumen:</label>
		<textarea rows="" cols="" name="resumen"><?= $noticia->resumen?></textarea>
		<label>imagen:</label>
		<input type="text" name="imagen" value="<?= $noticia->imagen?>">
		<label>Cuerpo:</label>
		<textarea rows="20" cols="30" name="cuerpo"><?= $noticia->cuerpo?></textarea>
		<input type="submit" value="Guardar" />
	</form>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>
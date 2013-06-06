<?php
include $_SERVER['DOCUMENT_ROOT'].'/src/Noticias/Noticia.php';

$titulo = $_GET['noticia'];

$noticia = new Noticia();
$id = $noticia->getIdByTitulo($titulo);
$noticia = new Noticia($id);

$page_name = "Noticia";

$css_array[] = "noticia.css";

$divshot_css= ""; 
?>

<?php include 'includes/master-header.php'?>
<div class="container body noticia">

<div class="row">
	<h1><?=$noticia->titulo?></h1>
	<div class="span10">
		<div class="row-fluid">
			<div class="span2">
				<img alt="" src="<?=$noticia->imagen?>">
			</div>
			<div class="span8">
				<p><?=$noticia->resumen?></p>
			</div>
		 </div>
	</div>
	<div class="span10">
		<div class="row">
			<div class="span8 offset1">
				<?=$noticia->cuerpo?>
			</div>
		</div>
	</div>
</div>

</div>
<?php include 'includes/master-footer.php'?>
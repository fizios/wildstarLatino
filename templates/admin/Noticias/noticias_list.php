<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Noticias/Noticias.php';

$page_name = "admin menu";

if(!isset($_SESSION['Usuario_log']) || !$_SESSION['Usuario_log']){
	header("Location: /");
}

$noticias = new Noticias(10,1);
$misNoticias = $noticias->noticias;

$divshot_css = "";

$js_array[] = "noticias_list.js"

?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
<h3><a href="content-admin/admin/">Menu</a></h3>
<h1> Noticias </h1>
	<span><a href="/content-admin/noticias/nuevo">Nueva Noticia</a></span>
	<ul>
		<?php foreach($misNoticias as $noticia):?>
			<li>
				<?php echo $noticia->titulo ?>
				<a href="/content-admin/noticias/editar/<?php echo $noticia->id ?>" class="action editar">Editar</a>
				<a href="/content-admin/noticias/accion/borrar/<?php echo $noticia->id ?>" class="action borrar">Borrar</a>
			</li>
		<?php endforeach;?>
	</ul>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>
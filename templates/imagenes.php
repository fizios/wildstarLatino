<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Imagenes.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Categorias.php';

$page_name = "Imagenes";

$divshot_css = "";

$css_array[]="imagenes.css";
$js_array[]="imagenes.js";
$css_array[]="jquery.fancybox-1.3.4.css";
$js_array[]="jquery.fancybox-1.3.4.js";

$categorias = new Categorias();
$misCategorias = $categorias->categorias;

?>

<?php include 'includes/master-header.php'?>
<div class="container body imagenes">
	
	<h1>Imagenes</h1>
	<!--
	<h3>Que queres ver ??</h3>
	<form id="filtros"action="/" method="get" class="form-inline">
		<label>Seccion
		<select class='categoria' name="categoria">
			<option value="todas">todas</option>
			<?php foreach ($misCategorias as $key => $value):?>
					<option value="<?=$value->nombre?>"><?=$value->nombre?></option>
			<?php endforeach;?>
		</select>
		</label>
		<label>Subseccion
		<select class='subcategoria todas' name="subcategoria">
		</select>
		<?php foreach ($misCategorias as $key => $value):?>
					<select class='subcategoria <?=$value->nombre?>' name="subcategoria" style="display: none" disabled>
						<?php foreach ($value->subcategorias as $key2 => $subca):?>
							<option value="<?=$subca->nombre?>"><?=$subca->nombre?></option>
						<?php endforeach;?>
					</select>
		<?php endforeach;?>
		</label>
		
		<input type="submit" value="Filtrar" />	
		
	</form>
	-->
	<div id="imgContainer">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/imagenes_grilla.php';?>
	</div>

</div>
<?php include 'includes/master-footer.php'?>
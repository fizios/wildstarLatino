<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Imagen.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Categorias.php';

$page_name = "imagenes abm";

if(!isset($_SESSION['Usuario_log']) || !$_SESSION['Usuario_log']){
	header("Location: /");
}

if (isset($_GET['id'])){
	$imagen = new Imagen($_GET['id']);
}else {
	$imagen = new Imagen();
}

$categorias = new Categorias();
$misCategorias = $categorias->categorias;

$divshot_css = "";
$js_array[] = "imagenes_abm.js";
$css_array[] = "imagenes_abm.css"
?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
<h3><a href="/content-admin/imagenes">Volver al listado</a></h3>
<h1> Imagen </h1>
	<form class="form-horizontal" action="/content-admin/imagenes/accion/guardar/<?=$imagen->id?>" method="post">
		<h3>Edicion</h3>
		
	    <div class="control-group">
			<label class="control-label" for="inputNombre">Nombre</label>
			<div class="controls">
				<input type="text" id="inputNombre" placeholder="titulo" name="titulo" value="<?= $imagen->titulo?>">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputURL">Ubicacion</label>
			<div class="controls">
				<input type="text" id="inputURL" placeholder="url" name="url" value="<?= $imagen->url?>">
			</div>
		</div>
		
		<div class="previa-contenedor">
			<img class="previa" src="<?= $imagen->url?>" />
		</div>
		
		<label>Categorias:</label>
		
		<?php foreach ($misCategorias as $key => $categoria):?>
			
			<?php
				$checked =  (isset( $imagen->categorias[ $categoria->nombre ] ) )? 'checked' : '';
				$disabled = (isset( $imagen->categorias[ $categoria->nombre ] ) )? '' : 'disabled';
			 ?>
			
			<div class="control-group">
				<label class="control-label" for="categoria[ <?php echo $categoria->nombre?> ]"> <?php echo $categoria->nombre?></label>
				<div class="controls">
					<input type="checkbox" id="categoria[ <?php echo $categoria->nombre?> ]" name="categoria[]" value="<?php echo $categoria->nombre?>" <?php echo $checked; ?> >
					<select id="subcategoria" style="width: 90%;" name="subcategoria[]" <?php echo $disabled; ?> >
						<?php foreach ($categoria->subcategorias as $key => $subcategoria):?>
							<option value="<?php echo $subcategoria->nombre ?>" <?php echo ( $checked && $imagen->categorias[ $categoria->nombre ] ==  $subcategoria->nombre)?'selected':'' ?> >
								<?php echo $subcategoria->nombre ?>
							</option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
		<?php endforeach; ?>
		
		<input type="submit" value="Guardar" />
		
	</form>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>
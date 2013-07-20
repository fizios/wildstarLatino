<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Imagenes.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Categorias.php';

$page_name = "admin imagenes";
$css_array[] = "imagenes_list.css";
$js_array[] = "noticias_list.js";

$seccion = "/content-admin/imagenes";

if(!isset($_SESSION['Usuario_log']) || !$_SESSION['Usuario_log']){
	header("Location: /");
}

$cantidad = 25;
$pagina = (isset($_GET['pagina']))? $_GET['pagina']: 1;
$categoria = (isset($_GET['categoria']))? $_GET['categoria']: 'todas';
$subcategoria = (isset($_GET['subcategoria']))? $_GET['subcategoria']: '';

$imagenes = new Imagenes($pagina,$cantidad,$categoria,$subcategoria);
$misImagenes = $imagenes->getImagenes();

$pagina_pedida = $pagina;
$cant_paginas = ceil($imagenes->cantImagenes / $cantidad);

$urlPaginado = $seccion."?categoria=$categoria&subcategoria=$subcategoria";

$categorias = new Categorias();
$misCategorias = $categorias->categorias;

?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-header.php'?>
<div class="container body">
	<h3><a href="/content-admin/admin/">Menu</a></h3>
	<h1> Imagenes </h1>
	<span><a href="<?=$seccion?>/nuevo">Nueva Imagen</a></span>
	
	<h2>Filtros</h2>
	<form action="<?=$seccion?>" method="get" class="form-inline">
		<label>Categoria
		<select class='categoria' name="categoria">
			<option value="todas">todas</option>
			<?php foreach ($misCategorias as $key => $value):?>
					<option value="<?=$value->nombre?>"><?=$value->nombre?></option>
			<?php endforeach;?>
		</select>
		</label>
		<label>Subcategoria
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
	
	<?php if($misImagenes):?>
		<ul id="imagenes_list">
			<?php foreach($misImagenes as $imagen):?>
				<li>
					<div> <img src="<?php echo $imagen->url ?>">  </div>
					<a href="<?=$seccion?>/editar/<?php echo $imagen->id ?>" class="action editar">Editar</a>
					<a href="<?=$seccion?>/accion/borrar/<?php echo $imagen->id?>" class="action borrar">Borrar</a>
				</li>
			<?php endforeach;?>
		</ul>
	<?php else:?>
		<h3>No hay resultados</h3>
	<?php endif;?>
</div>
<div class="pagination pagination-centered">
    <ul>
      <li class="<?= ($pagina_pedida == 1)?"disabled":""?>">
        <a href="<?=$urlPaginado?>&pagina=<?=$pagina_pedida-1?>">Menos</a>
      </li>
      <?php for ($i = 1; $i <= $cant_paginas; $i++):?>
      	<li class="<?= ($pagina_pedida == $i)?"active":""?>">
	    	<a href="<?=$urlPaginado?>&pagina=<?=$i?>"><?=$i?></a> 
	    </li>
      <?php endfor;?>
      <li class="<?= ($pagina_pedida == $cant_paginas)?"disabled":""?>">
        <a href="<?=$urlPaginado?>&pagina=<?=$pagina_pedida+1?>">Mas</a> 
      </li>
    </ul>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/includes/master-footer.php'?>
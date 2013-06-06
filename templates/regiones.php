<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Regiones/Regiones.php';

$page_name = "regiones";

$divshot_css = "https://djyhxgczejc94.cloudfront.net/builds/a078ced5eeec49a92f29498b6223496fa330a79e.css";

$css_array[] = "regiones.css";

$regiones = new Regiones();
$misRegiones = $regiones->regiones;

?>

<?php include 'includes/master-header.php'?>
<div class="container body">

<div class="container regiones-header">
      <h1>Regiones</h1>
</div>
<div class="container regiones">
	<div class="row">
		<?php foreach ($misRegiones as $key => $faccion):?>
			<div class="span10">
				<img alt="" src="/imagenes/iconos/facciones/races-<?php echo $key?>.png" class="icono-faccion">
				<h1><?php echo ucfirst($key) ?></h1>
				<ul>
					<?php foreach ($faccion as $region):?>
						<li><?php echo $region->nombre?></li>
					<?php endforeach;?>
				</ul>	
			</div>			
		<?php endforeach;?>
		<div class="span10">
		</div>
		<div class="span10">
		</div>		
	</div>
</div>

</div>
<?php include 'includes/master-footer.php'?>
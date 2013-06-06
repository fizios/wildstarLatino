<?php 
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Paths/Paths.php';

$paths = new Paths();
$mis_paths = $paths->paths;

$page_name = "paths";

$divshot_css = "https://djyhxgczejc94.cloudfront.net/builds/a078ced5eeec49a92f29498b6223496fa330a79e.css";

$css_array[] = "paths.css";

?>

<?php include 'includes/master-header.php'?>

<div class="container paths-header">
      <img src="<?php echo $paths->imagen?>" class="img-polaroid imagen"
      width="100%" height="100%">
      <h4>
      Decidir no s&oacute;lo qui&eacute;n es tu personaje, sino que tambi&eacute;n por qu&eacute; o para que est&aacute; dirigiendose a Nexus. 
      M&aacute;s all&aacute; de las opciones de raza y clase, tu 'vocaci&oacute;n' define la motivaci&oacute;n del personaje 
      y desbloquea contenido exclusivo atendiendo a tu estilo de juego preferido.
      </h4>
</div>

<div class="container">
	<div class="row">
		<?php foreach ($mis_paths as $path):?>
			<div class="path span11" id="<?php echo $path->nombre?>">
	          <div class="row">
	            <div class="span3">
	              <img src="<?php echo $path->imagen?>" width="100%"> 
	            </div>
	            <div class="span7">
	              <h1><?php echo $path->nombre?> (<?php echo $path->nombre_es?>)</h1>
	              <p><?php echo $path->descripcion?></p>
	            </div>
	          </div>
	          <div class="row misiones">
	            <h3>Tipo de Misiones</h3>
	            <ul>
	            	<?php foreach ($path->tipo_misiones as $mision):?>
		              <li>
		              	<img src="/imagenes/Paths/iconos/<?php echo $mision->icono?>"/>
		              	<p><?php echo $mision->nombre?> : <?php echo $mision->descripcion?></p>
		              </li>
	            	<?php endforeach;?>
		          </ul>  
	          </div>
	        </div>
		<?php endforeach;?>
		<div class="path span11 videos">
			<div class="row">
				<div class="span10">
					<iframe id="ytplayer" type="text/html" width="640" height="360"
					src="https://www.youtube.com/embed/lmCyPXv5APY"
					frameborder="0" allowfullscreen></iframe>
					<iframe id="ytplayer" type="text/html" width="640" height="360"
					src="https://www.youtube.com/embed/yJkfhxLEhEU"
					frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'includes/master-footer.php'?>
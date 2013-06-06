<?php
include $_SERVER['DOCUMENT_ROOT'].'/src/clases/Clase.php';

$claseId = $_GET['id'];

$clase = new Clase($claseId);

$page_name = ucfirst($clase->nombre);

$css_array[] = "clase.css";

$divshot_css= ""; 

?>
<?php include 'includes/master-header.php'?>

<div class="container main-content clase">
    <div class="row">
      <div class="span10 imagen">
        <img src="<?php echo $clase->banner?>" width="100%" height="100%"> 
      </div>
      <div class="span10 descripcion">
        <?php foreach ($clase->descripcion_larga as $descripcion):?>
        	<p><?php echo $descripcion['texto']?></p>
        <?php endforeach;?>
      </div>
      <div class="span10 caracteristicas">
	  	<h3>Caracteristicas</h3>
	  	<ul>
	  		<li><strong>Rol:</strong> <?php echo $clase->rol?></li>
	  		<li><strong>Arma:</strong> <?php echo $clase->tipo_arma?></li>
	  		<li><strong>Armadura:</strong> <?php echo $clase->tipo_armadura?></li>
	  		<li><strong>Tipo de Energia:</strong> <?php echo $clase->energia_habilidades?></li>
	  		<li><strong>Atributos principales:</strong> <?php echo $clase->stats_principales?></li>
	  	</ul>     
      </div>
      <div class="span10">
        <h3>Clases disponibles</h3>
        <ul class="pull-left inline">
        	<?php foreach ($clase->razas as $raza):?>
        		<li><a href="/razas/<?php echo ucfirst( $raza['nombre'])?>"><?php echo ucfirst( $raza['nombre'])?></a></li>
        	<?php endforeach;?>
        </ul>
      </div>
      <div class="span10">
        <h3>Imagenes</h3>
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif"> 
      </div>
      <div class="span10">
        <h3>Videos</h3>
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif">
        <img src="//app.divshot.com/img/placeholder-100x100.gif"> 
      </div>
    </div>
  </div>
<?php include 'includes/master-footer.php'?>
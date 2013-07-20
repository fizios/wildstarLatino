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
        <div id="myCarousel" class="carousel slide">
		  <ol class="carousel-indicators">
		    <?php foreach ($clase->imagenes as $key => $imagen):?>
		    	<li data-target="#myCarousel" data-slide-to="<?=$key?>" <?=($key==0)?'class="active"':''?>></li>
		    <?php endforeach;?>
		  </ol>
		  <!-- Carousel items -->
		  <div class="carousel-inner">
		  	<?php foreach ($clase->imagenes as $key => $imagen):?>
		    	<div class="<?=($key==0)?'active':''?> item"><img src="<?=$imagen->url?>"></div>
		    <?php endforeach;?>
		  </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
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
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/clases/Clases.php';

$clases = new Clases();
$clases = $clases->clases;

$page_name = "clases";

$css_array[] = "clases.css";

$divshot_css = "https://djyhxgczejc94.cloudfront.net/builds/a078ced5eeec49a92f29498b6223496fa330a79e.css";

?>

<?php include 'includes/master-header.php'?>

<div class="container main-content">
        <h1>Clases</h1>
        <div class="container clases">
          <?php foreach ($clases as $clase):?>
          	<div class="raza container">
	            <div class="row">
	              <div class="span2 imagen">
	                <a href="/clases/<?php echo ucfirst($clase->nombre)?>"><img src="<?php echo $clase->imagen?>"> </a>
	              </div>
	              <div class="span3">
	                <a href="/clases/<?php echo ucfirst($clase->nombre)?>"><h3><?php echo ucfirst($clase->nombre)?></h3></a>
	                <p class="text-info"><?php echo $clase->descripcion_corta?></p>
	              </div>
	            </div>
	          </div>
          <?php endforeach;?>
        </div>
      </div>

<?php include 'includes/master-footer.php'?>

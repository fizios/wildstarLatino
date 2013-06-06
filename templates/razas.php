<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Razas/Razas.php';

$razas = new Razas();
$razas = $razas->razas;

$page_name = "razas";

$divshot_css = "";

$css_array[] = "razas.css";

?>

<?php include 'includes/master-header.php'?>

<div class="container main">
        <div class="container exiles">
	        <h1>Exiles</h1>	
        	<?php foreach ($razas as $raza):?>
        		<?php if ($raza->faccion == "Exiles"):?>
        			<div class="raza container">
			            <div class="row">
			            <a href="/razas/<?php echo $raza->nombre?>">
			              <div class="span2" style="background-image: url(<?php echo $raza->imagen?>);">
			              </div>
			              <div class="span3">
			                <h3><?php echo $raza->nombre?></h3>
			                <p class="text-info"><?php echo $raza->descripcion?></p>
			              </div>
			            </a>
			            </div>
			        </div>
        		<?php endif;?>
        	<?php endforeach;?>
          
        <div class="container dominion">
	        <h1>Dominion</h1>        
        	<?php foreach ($razas as $raza):?>
        		<?php if ($raza->faccion == "Dominion"):?>
        			<div class="raza container">
			            <div class="row">
			            <a href="/razas/<?php echo $raza->nombre?>">
			              <div class="span2" style="background-image: url(<?php echo $raza->imagen?>);">
			              </div>
			              <div class="span3">
			                <h3><?php echo $raza->nombre?></h3>
			                <p class="text-info"><?php echo $raza->descripcion?></p>
			              </div>
			            </a>
			            </div>
			        </div>
        		<?php endif;?>
        	<?php endforeach;?>
      </div>
<?php include 'includes/master-footer.php'?>

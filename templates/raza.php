<?php
include $_SERVER['DOCUMENT_ROOT'].'/src/Razas/Raza.php';

$razaId = $_GET['id'];

$raza = new Raza($razaId);

$page_name = ucfirst($raza->nombre);

$css_array[] = "raza.css";

$divshot_css= ""; 
?>

<?php include 'includes/master-header.php'?>

<div class="container main-content raza">
    <div class="row">
      <div class="span10 imagen">
        <img src="<?php echo $raza->banner?>"
        width="100%" height="100%"> 
      </div>
      <div class="span10 descripcion">
        <p><?php echo $raza->descripcion?></p>
        <h3>Un poco de historia</h3>
        <?php foreach ($raza->historia as $historia):?>
        	<p><?php echo $historia['texto']?></p>
        <?php endforeach;?>
      </div>
      <div class="span10">
        <h3>Clases disponibles</h3>
        <ul class="pull-left inline">
        	<?php foreach ($raza->clases as $clase):?>
        		<li><a href="/clases/<?php echo ucfirst( $clase['nombre'])?>"><?php echo ucfirst( $clase['nombre'])?></a></li>
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
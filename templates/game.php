<?php 
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/clases/Clases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Paths/Paths.php';

$page_name = "Game";

$divshot_css = "https://djyhxgczejc94.cloudfront.net/builds/8e874dae94342d38c9a67a15743311e47166afb7.css";

$css_array[] = "game.css";

$clases = new Clases();
$clases = $clases->clases;

$paths = new Paths();
$mis_paths = $paths->paths;

?>

<?php include 'includes/master-header.php'?>
<div class="game">
	<div class="container main-content">
	    <div class="row">
	      <h1><a href="/razas">Razas</a></h1>
	      <div class="span5_5">
	      	<div class="row razas">
	          <div class="span2">
	            <img src="/imagenes/iconos/facciones/races-exiles.png"> 
	          </div>
	          <div class="span3">
	            <h3>Exiles</h3>
	            <ul class="unstyled">
	              <li><a href="/razas/Human">Human</a></li>
	              <li><a href="/razas/Aurin">Aurin</a></li>
	              <li><a href="/razas/Granok">Granok</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	      <div class="span5_5">
	      	<div class="row razas">
	          <div class="span2">
	            <img src="/imagenes/iconos/facciones/races-dominion.png"> 
	          </div>
	          <div class="span3">
	            <h3>Dominion</h3>
	            <ul class="unstyled">
	              <li><a href="/razas/Cassian">Cassian</a></li>
	              <li><a href="/razas/Draken">Draken</a></li>
	              <li><a href="/razas/Mechari">Mechari</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </div>
	</div>
	<div class="container clases">
	    <div class="row">
	      <h1><a href="/clases">Clases</a></h1>
	      <div class="span10 clases">
	        <?php foreach ($clases as $clase):?>
	        	<div class="span2">
        			<h4><?php echo ucfirst($clase->nombre)?></h4>
	        		<div class="clase span2">
	        			<a href="/clases/<?php echo ucfirst($clase->nombre)?>" alt="<?php echo ucfirst($clase->nombre)?>"><img src="<?php echo $clase->imagen?>"></a>
	          		</div>
	        	</div>
	        <?php endforeach;?>
	      </div>
	    </div>
	  </div>
	  <div class="container paths">
	    <div class="row">
	      <h1> <a href="/paths">Paths</a></h1>
	      <div class="span10 paths">
	        <div class="row">
	        	<?php foreach ($mis_paths as $path):?>
	        		<div class="span2">
	        			<a href="/paths/<?php echo "#".$path->nombre ?>"><img src="<?php echo $path->imagen?>"></a>
	          		</div>
	        	<?php endforeach;?>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="container regiones">
	    <div class="row">
	      <h1><a href="/regiones">Regiones</a></h1>
	      <div class="span10 iconos">
	        <div class="row">
	        	<img alt="" src="/imagenes/iconos/facciones/races-exiles.png" style="margin-bottom: 30px;">
	        	<img alt="" src="/imagenes/iconos/facciones/races-conquista.png">
	        	<img alt="" src="/imagenes/iconos/facciones/races-dominion.png">
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="container housing">
	    <div class="row">
	      <h1><a href="/housing">Housing</a></h1>
	      <div class="span10 housing">
	        <div class="row">
	        	<a href="/housing"><img alt="housing" src="/imagenes/housing/housing.jpg"></a>
	        </div>
	      </div>
	    </div>
	  </div>
</div>


<?php include 'includes/master-footer.php'?>
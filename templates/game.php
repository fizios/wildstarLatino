<?php 
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/clases/Clases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Paths/Paths.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Razas/Razas.php';

$page_name = "Game";

$divshot_css = "https://djyhxgczejc94.cloudfront.net/builds/8e874dae94342d38c9a67a15743311e47166afb7.css";

$css_array[] = "jquery.fancybox-1.3.4.css";
$js_array[] = "jquery.fancybox-1.3.4.js";
$js_array[] = "videos.js";
$css_array[] = "game.css";

$clases = new Clases();
$clases = $clases->clases;

$paths = new Paths();
$mis_paths = $paths->paths;

$razas = new Razas();
$razas = $razas->razas;

?>

<?php include 'includes/master-header.php'?>
<div class="game">
	<div class="container main">
		<div class="row-fluid">
			
			<div class="span8">
				<h1>¿Que es Wildstar?</h1>
				<p>
					Wildstar es un juego MMORPG de mundo abierto (SandBox) de estilo Sci Fi con un gustito a western.
					Tendremos la oportunidad de recorrer y conocer el planeta NEXUS, planeta el cual fue habitado por la raza mas antigua y misteriosa del universo, los ELDAN.
					Vamos a averiguar que les paso a los ELDAN, porque desaparecieron y que misterios oculta este enigmatico e increible planeta.  
				</p>
			</div>
			<div class="span3">
				<a class="youtube iframe"  href="http://www.youtube.com/embed/_4_riSI7Ydg?autoplay=1&hl=es&cc_load_policy=1" >
					<img src="http://img.youtube.com/vi/_4_riSI7Ydg/0.jpg" />
				</a>
			</div>
		</div>
	</div>
	<div class="container razas">
		<div class="row-fluid">
			<div class="span12">
				<span><h1>Razas</h1> <a href="/razas">ver mas</a></span>
				<div class="row-fluid">
					<div class="span6 exiles">
						<div class="span1 logo">
							<img src="/imagenes/iconos/facciones/races-exiles.png">
						</div>
						<div class="span5 retratos">
							<?php foreach ($razas as $raza):?>
				        		<?php if ($raza->faccion == "Exiles"):?>
							            <a href="/razas/<?php echo $raza->nombre?>">
							              <div class="span2 portrait" style="background-image: url(<?php echo $raza->imagen?>);">
							              	<span><?php echo $raza->nombre?></span>
							              </div>
							            </a>
				        		<?php endif;?>
				        	<?php endforeach;?>
						</div>
					</div>
					<div class="span6 dominion">
						<div class="span5 retratos">
							<?php foreach ($razas as $raza):?>
				        		<?php if ($raza->faccion == "Dominion"):?>
							            <a href="/razas/<?php echo $raza->nombre?>">
							              <div class="span2 portrait" style="background-image: url(<?php echo $raza->imagen?>);">
							              	<span><?php echo $raza->nombre?></span>
							              </div>
							            </a>
				        		<?php endif;?>
				        	<?php endforeach;?>
						</div>
						<div class="span1 logo">
							<img src="/imagenes/iconos/facciones/races-dominion.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container clases">
		<div class="row-fluid">
			<div class="span12">
				<span><h1>Clases</h1> <a href="/clases">ver mas</a></span>
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
	</div>
	
	<div class="container paths">
		<div class="row-fluid">
			<div class="span12">
				<span><h1>Paths</h1> <a href="/paths">ver mas</a></span>
				<div class="span10 paths">
		        <div class="row">
		        	<?php foreach ($mis_paths as $path):?>
			        	<div class="span2 path-container">
		        			<h4><?php echo $path->nombre_es ?></h4>
			        		<div class="span2 path">
			        			<a href="/paths/<?php echo "#".$path->nombre ?>"><img src="<?php echo $path->imagen?>"></a>
			          		</div>
			        	</div>
		        	<?php endforeach;?>
		        </div>
		      </div>
			</div>
		</div>
	</div>
	
	<div class="container regiones">
		<div class="row-fluid">
			<div class="span12">
				<span><h1>Regiones</h1> <a href="/regiones">ver mas</a></span>
				<div class="span10 iconos">
			        <div class="row">
			        	<img alt="" src="/imagenes/iconos/facciones/races-exiles.png" style="margin-bottom: 30px;">
			        	<img alt="" src="/imagenes/iconos/facciones/races-conquista.png">
			        	<img alt="" src="/imagenes/iconos/facciones/races-dominion.png">
			        </div>
		     	 </div>
			</div>
		</div>
	</div>	
	
	<div class="container housing">
		<div class="row-fluid">
			<div class="span12">
				<span><h1>Housing</h1> <a href="/housing">ver mas</a></span>
				<div class="span10 housing">
			        <div class="row">
			        	<a href="/housing"><img alt="housing" src="/imagenes/housing/housing.jpg"></a>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
	
</div>


<?php include 'includes/master-footer.php'?>
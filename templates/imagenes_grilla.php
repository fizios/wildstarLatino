<?php

$imagenesGrilla = 16;
$maxPaginas = 10;

$cantidad = $imagenesGrilla * $maxPaginas;
$pagina = (isset($_GET['pagina']))? $_GET['pagina']: 1;
$categoria = (isset($_GET['categoria']))? $_GET['categoria']: 'todas';
$subcategoria = (isset($_GET['subcategoria']))? $_GET['subcategoria']: '';

$imagenes = new Imagenes($pagina,$cantidad,$categoria,$subcategoria);
$misImagenes = $imagenes->imagenes;

$cant_imagenes = sizeof($misImagenes);
$cant_paginas = ceil($cant_imagenes / $imagenesGrilla);

?>

<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <?php for ($i=0;$i < $cant_paginas; $i++):?>
    	<li data-target="#myCarousel" data-slide-to="<?=$i?>" <?=($i==0)?'class="active"':''?>></li>
    <?php endfor;?>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
  	<?php $imgIndex = 0;?>
  	<?php for ($i=0; $i < $cant_paginas ; $i++):?>
    	<div class="<?=($i==0)?'active':''?> item">
    		
    		<?php for($k =0; $k < $imagenesGrilla && $imgIndex < $cant_imagenes; $k++):?>
    			<?php $imagen = $misImagenes[$imgIndex]?>
    				<div class="item-img">
    				<a class="fancybox" href="<?php echo $imagen->url ?>" title="<?php echo $imagen->titulo ?>" rel="imagenes">
						<img src="<?php echo $imagen->url ?>" alt="<?php echo $imagen->titulo ?>"/>
					</a>
					</div>
    			<?php $imgIndex++;?>
    		<?php endfor;?>
    		
    	</div>
    <?php endfor;?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
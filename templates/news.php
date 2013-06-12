<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Noticias/Noticias.php';

$pagina_pedida = (int)$_GET['pagina'];
if($pagina_pedida == 0){
	header("Location:/news?pagina=1");
}
$cant_noticias = 5;
$noticias = new Noticias($cant_noticias,$pagina_pedida);
$misNoticias = $noticias->noticias;
$cant_paginas = ceil($noticias->cant_noticias / $cant_noticias);


$page_name = "news";
$css_array[] = "news.css";
$divshot_css = "";

?>

<?php include 'includes/master-header.php'?>
<div class="container body">

<div class="content noticias">
	<div class="row-fluid">
		<div class="noticias span8">
			<?php foreach ($misNoticias as $noticia):?>
				<div class="row-fluid fila">
	            	<div class="span3">
	                	<a href="/news/noticia/<?= urlencode($noticia->titulo)?>"><img src="<?= $noticia->imagen?>" width="100%"></a>
	                </div>
	                <div class="span8">
	                	<a href="/news/noticia/<?= urlencode($noticia->titulo)?>"><h3><?= $noticia->titulo?></h3></a>
	                	<p><?= $noticia->resumen?></p>
	                </div>
	            </div>
            <?php endforeach;?>
       	</div>
    </div>
</div>
<div class="pagination pagination-centered">
    <ul>
      <li class="<?= ($pagina_pedida == 1)?"disabled":""?>">
        <a href="/news?pagina=<?=$pagina_pedida-1?>">Menos</a>
      </li>
      <?php for ($i = 1; $i <= $cant_paginas; $i++):?>
      	<li class="<?= ($pagina_pedida == $i)?"active":""?>">
	    	<a href="/news?pagina=<?=$i?>"><?=$i?></a> 
	    </li>
      <?php endfor;?>
      <li class="<?= ($pagina_pedida == $cant_paginas)?"disabled":""?>">
        <a href="/news?pagina=<?=$pagina_pedida+1?>">Mas</a> 
      </li>
    </ul>
</div>

</div>
<?php include 'includes/master-footer.php'?>
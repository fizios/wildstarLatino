<?php 
include 'includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Noticias/Noticias.php';

$page_name = "Home";

$noticias = new Noticias();
$misNoticias = $noticias->getNoticias(5);

$divshot_css = "";

$css_array[] = "home.css";

?>

<?php include 'includes/master-header.php'?>

<div class="container">
        <div class="content">
          <div class="row-fluid">
            <div class="noticias span8">
              <?php foreach ($misNoticias as $noticia):?>
              	<div class="row-fluid">
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
            <div class="adds pull-right span3">
	            <div class="beta-banner">
		        	<a href="http://www.wildstar-online.com/en/beta/"><img src="/imagenes/beta-banner.png" class="pull-right img-rounded" width="100%"></a>
	            </div>
              	<div class="twitter-container">
	              	<a class="twitter-timeline" width="270" height="300" data-link-color="#0084b4" data-theme="light"
	              	href="https://twitter.com/WildstarLatino" data-widget-id="341293685570404353">Tweets by @WildstarLatino</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				
            	<div class="facebook-container">
              		<div class="fb-like-box" data-href="https://www.facebook.com/WildstarLatino" data-width="270" data-show-faces="true" data-colorscheme="" data-stream="false" data-show-border="false" data-header="true"></div>
             	</div>
            </div>
          </div>
        </div>
      </div>

<?php include 'includes/master-footer.php'?>
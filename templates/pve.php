<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';

$page_name = "pve";

$divshot_css = "";

$css_array[] = "pve.css";

?>

<?php include 'includes/master-header.php'?>
<div class="container body pve">
	<h1>PVE</h1>
	<p>Con que contenido nos vamos a encontrar !!!!!</p>
	<div class="container dungeons">
		<div class="dungeons-imagen">
			<a href="/pve/dungeons"><img alt="" src="/imagenes/PVE/dungeons.png"></a>
		</div>
	</div>	
	<div class="container raids">
		<div class="dungeons-imagen">
			<a href="/pve/raids"><img alt="" src="/imagenes/PVE/raids.png"></a>
		</div>
	</div>
	<div class="container elder-games">
		<div class="elder-games-imagen">
			<a href="/pve/eldergames"><img alt="" src="/imagenes/PVE/ElderGames.png"></a>
		</div>
	</div>


</div>
<?php include 'includes/master-footer.php'?>
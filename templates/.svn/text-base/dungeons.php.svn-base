<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/loader.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Dungeons/Dungeons.php';

$page_name = "dungeons";

$divshot_css = "";

$css_array[]="dungeon.css";
$js_array[]="";

$dungeons = new Dungeons();
$misDungeons = $dungeons->dungeons;

?>

<?php include 'includes/master-header.php'?>
<div class="container body dungeon">
<h1>Dungeons</h1>
<div class="row">
	<?php foreach ($misDungeons as $dungeon):?>
		<div class="span10">
			<h3><?=$dungeon->nombre?></h3>
			<div class="row">
				<div class="span2">
					<img alt="<?=$dungeon->nombre?>" src="<?=$dungeon->imagen?>">
				</div>
				<div class="span7">
					 <p><?=$dungeon->descripcion?></p>
					 <p>A partir del nivel <?=$dungeon->level?></p>
				</div>
				
			</div>
		</div>
	<?php endforeach;?>
</div>

</div>
<?php include 'includes/master-footer.php'?>
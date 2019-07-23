<?php
	if(!isset($thumbsize)){
		$thumbsize=1;
	}
	$i=$i+1;
?>

<?php if($type=="websearch") { ?>
	<div class="contbox <?=$class?>"  style="<?=$style?>" articleid="<?php echo $item["articleid"];?>" url="<?php echo getNewsUrl($item);?>">
		<span class="imgwrap_w"><img src="<?php echo getImgUrl($item);?>" alt="" /></span>
		<span class="imgwrap_h"><img src="<?php echo getImgUrl($item);?>" alt="" /></span>
		<span class="mask"><?=$i?></span>
		<span class="icon"></span>
		<span class="title"><span><?=getTitle($item)?></span></span>
		<span class="date"><?php echo formatDate($item["publishdate"]);?></span>
		<span class="content"><?php echo strip_tags($item["article"]);?></span>
	</div>
<?php }else { ?>
	<div class="tile">
		<img src="img/thumb/thumb1.jpg" alt="thumb1">
		<div class="detail">
			<h2>CALACATTA</h2>
			<p>MARBLE</p>
		</div>
		<div class="new"></div>
	</div>
<?php } ?>
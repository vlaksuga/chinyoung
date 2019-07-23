<?php
	if(!isset($thumbsize)){
		$thumbsize=1;
	}
	$i=$i+1;
?>

<?php if(!isset($type) || $type=="websearch") { ?>
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
	<div class="col-md-3 col-sm-6 py-3">
		<div class="conbox">
			<img class="img-fluid" src="img/card-th1.jpg" alt="">
			<div class="box-content">
				<h3 class="title">도깨비</h3>
				<ul class="icon">
					<li><a data-toggle="modal" href="#mo1"><i class="fa fa-search"></i></a></li>
					<li><a href="#"><i class="fa fa-link"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
<?php } ?>
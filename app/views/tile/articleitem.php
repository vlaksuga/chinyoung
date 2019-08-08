
<?php if($type=="tile") { ?>
<div class="col">
	<div class="img_box">
		<a href="#">
			<img src="img/tile/t_0001/td_03.jpg" class="modal_img">
		</a>
	</div>

	<div class="txt_box">
		<h3><?=$item["productname"]?></h3>
		<div class="row">
			<div class="t_label">CODE</div>
			<div class="t_data"><?=$item["collectionid"]?></div>
		</div>
		<div class="row">
			<div class="t_label">DESIGN</div>
			<div class="t_data"><?=$item["effect"]?></div>
		</div>
		<div class="row">
			<div class="t_label">COLOUR</div>
			<div class="t_data"><?=$item["productname"]?></div>
		</div>
		<div class="row">
			<div class="t_label">TECHNOLOGY</div>
			<div class="t_data">PrintTech</div>
		</div>
		<div class="row">
			<div class="t_label">THICKNESS</div>
			<div class="t_data">?T</div>
		</div>
		<div class="row">
			<div class="t_label">SIZE</div>
			<div class="t_data">?*?</div>
		</div>
	</div>
</div>
<?php }else { ?>
	<div class="tile" >
		<a href="?m=product&cid=<?=$item["collectionid"]?>"><img src="./img/i_data/<?=$item["thumb"]?>" alt="thumb1"></a>
		<div class="detail">
			<h2><?=$item["cename"]?></h2>
			<p><?=$item["effect"]?></p>
		</div>
		<div class="new"></div>
	</div>
<?php } ?>
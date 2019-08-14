
<?php if($type=="tile") { ?>
<div class="col">
	<div class="img_box">
		<a onclick="openModal('<?=$item["imgs"]?>','<?=$item["productname"]?>','<?=$item["sizes"]?>');">
			<img src="./img/i_data/<?=$item["imgs"]?>" class="modal_img">
		</a>
	</div>

	<div class="txt_box">
		<h3><?=$item["productname"]?></h3>
		<div class="row  autohide">
			<div class="t_label">CODE</div>
			<div class="t_data"><?=$item["tileid"]?></div>
		</div>
		<div class="row  autohide">
			<div class="t_label">BRAND</div>
			<div class="t_data"><?=$item["brand"]?></div>
		</div>
		<div class="row autohide">
			<div class="t_label">MATERIAL</div>
			<div class="t_data" ><?=$item["material"]?></div>
		</div>
		<div class="row autohide">
			<div class="t_label">ORIGIN</div>
			<div class="t_data" ><?=$item["origin"]?></div>
		</div>
		<div class="row autohide">
			<div class="t_label">TECHNOLOGY</div>
			<div class="t_data" ><?=getTechStr($item)?></div>
		</div>
		<div class="row  autohide">
			<div class="t_label">THICKNESS</div>
			<div class="t_data"><?=getThicknessStr($item)?></div>
		</div>
		<div class="row  autohide">
			<div class="t_label">SIZE</div>
			<div class="t_data"><?=getSizeStr($item)?></div>
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
		<div class="<? if($item["newflag"]>0) echo "new"; else echo "none"?>">NEW</div>
	</div>
<?php } ?>
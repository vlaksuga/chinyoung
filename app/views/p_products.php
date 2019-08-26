<?php
    $data = &$model;
    $list = &$model["list"];
?>
<script>
    $(function(){
        $("#products_tiles li").each(function(){
            if($(this).attr("data-p")==getP("p")){
                $(this).addClass("active");
            }
        });
    });

</script>
    <!-- / HALF BOX / -->
    <section id="half_products" class="half_box">
        <div class="bottom_art">
            <div>
                <p><?php echo $model["productname"];?></p>
                <p><span><?php echo $model["pageinfo"]["itemcnt"];?></span> COLLECTIONS</p>
            </div>
        </div>
    </section>

    <div class="container">

        <!-- / PRODUCTS TILES / -->
        <section id="products_tiles" class="sec_gap">

        <div class="group <?php if( trim($_GET["p"]) == "cotto" ) echo "cotto";?>">
                <ul>
                    <li data-p="ALL"><a href="./?m=l">ALL</a></li>
                    <li data-p="kerlite"><a href="./?m=l&p=kerlite">KERLITE/BIG SLAB</a></li>
                    <li data-p="MARBLE"><a href="./?m=l&p=MARBLE">MARBLE</a></li>
                    <li data-p="STONE"><a href="./?m=l&p=STONE">STONE</a></li>
                    <li data-p="CONCRETE"><a href="./?m=l&p=CONCRETE">CONCRETE</a></li>
                    <li data-p="TERRACOTTA"><a href="./?m=l&p=TERRACOTTA">TERRACOTTA</a></li>
                    <li data-p="WOOD"><a href="./?m=l&p=WOOD">WOOD</a></li>
                    <li data-p="brick"><a href="./?m=l&p=brick">BRICK/DÉCOR</a></li>
                    <li data-p="METAL"><a href="./?m=l&p=METAL">METAL</a></li>
                    <li data-p="COLOUR"><a href="./?m=l&p=COLOUR">COLOUR</a></li>
                    <li data-p="outdoor"><a href="./?m=l&p=outdoor">OUTDOOR</a></li>
                </ul>

            </div>

            <div class="grid">
                <?php
                    for($i=0;$i<count($list);$i++){$item = $list[$i];
                       // print_r($item);
                        echo drawView("tile/articleitem",array("item"=>$item,"productname"=>$data["productname"])); 
                    }
                 ?>
            </div>

 
                 <? echo drawView("tile/paging",$model["page"]);?>


        </section>

    </div>
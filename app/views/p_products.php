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
                <p><span><?php echo $model["producttotalcount"];?></span> COLLECTIONS</p>
            </div>
        </div>
    </section>

    <div class="container">

        <!-- / PRODUCTS TILES / -->
        <section id="products_tiles" class="sec_gap">

            <div class="group">
                <ul>
                    <li data-p="kerlite"><a href="./?m=l&p=kerlite">KERLITE/BIG SLAB</a></li>
                    <li data-p="marble"><a href="./?m=l&p=marble">MARBLE</a></li>
                    <li data-p="stone"><a href="./?m=l&p=stone">STONE</a></li>
                    <li data-p="concrete"><a href="./?m=l&p=concrete">CONCRETE</a></li>
                    <li data-p="terracotta"><a href="./?m=l&p=terracotta">TERRACOTTA</a></li>
                    <li data-p="wood"><a href="./?m=l&p=wood">WOOD</a></li>
                    <li data-p="brick"><a href="./?m=l&p=brick">BRICK/DÉCOR</a></li>
                    <li data-p="colour"><a href="./?m=l&p=colour">COLOUR</a></li>
                    <li data-p="outdoor"><a href="./?m=l&p=outdoor">OUTDOOR</a></li>
                </ul>

            </div>

            <div class="grid">
                <?php
                    for($i=0;$i<count($list);$i++){
                ?>
                <div class="tile">
                    <img src="img/thumb/thumb1.jpg" alt="thumb1">
                    <div class="detail">
                        <h2>CALACATTA</h2>
                        <p>MARBLE</p>
                    </div>
                    <div class="new"></div>
                </div>
                <?php }?>
            </div>


            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
            </div>

        </section>

    </div>
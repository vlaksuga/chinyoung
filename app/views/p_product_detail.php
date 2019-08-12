<?php
    $list = $model["list"];

    $collectionimglist = $model["collectionimglist"];

    $collection = $model["collection"];
?>

<div class="container">


        <!-- / PRODUCT_DETAIL / -->
        <section id="product_detail" class="sec_gap">
            <h2><?=$collection["cename"]?></h2>
            <p><?=$collection["brand"]?></p>
        </section>

        <!-- / PRODUCT_IMAGE / -->
        <section id="product_image" class="sec_gap">
            <h2>IMAGES</h2>

            <!-- SLIDESHOW GALLERY -->
            <div class="image_container">
                <?php
                    for($i=0;$i<count($collectionimglist);$i++){$item = $collectionimglist[$i];
                ?>
                <div class="slides">
                    <img src="./img/i_data/<?=$item["url"]?>" style="width:100%">
                </div>
                 <?php }?>


                

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="nav_row">
                    <?php
                        for($i=0;$i<count($collectionimglist);$i++){$item = $collectionimglist[$i];
                    ?>
                     <div class="nav_column">
                        <img class="thumb cursor" src="./img/i_data/<?=$item["url"]?>" style="width:100%"
                            onclick="currentSlide(<?=$i+1?>)" alt="<?=$i+1?>">
                    </div>
                    <?php }?>
                   
                </div>

                <!-- SLIDES SCRIPT -->
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("slides");
                        var dots = document.getElementsByClassName("thumb");
                        if (n > slides.length) { slideIndex = 1 }
                        if (n < 1) { slideIndex = slides.length }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" nav_active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " nav_active";
                    }
                </script>

            </div>

        </section>

        <!-- / TILE DETAIL / -->
        <section id="tile_detail" class="sec_gap">
            <h2>TILE DETAIL</h2>
            
                        <!-- MODAL START -->

                        <div id="modal_container">
                <div class="bt"><a href="javascript:void(0)" onclick="closeModal()"><span>&times;</span></a></div>
                <div class="tile_container mo_slide">
                    <img src="img/tile/t_0001/td_02.jpg">
                    <div class="tile_data">
                        <p>GARDENA BIANCO</p>
                        <p>400*800*8T</p>
                    </div>
                </div>
            </div>
    
            <script>
                    function closeModal() {
                    document.getElementById("modal_container").style.display = "none";
                    }

                    function openModal() {
                    document.getElementById("modal_container").style.display = "block";
                    }
            </script>

            <!-- MODAL END -->

            <div class="tile_box">
                <div class="row">

<?php
for($i=0;$i<count($list);$i++){$item = $list[$i];

    echo drawView("tile/articleitem",array("item"=>$item,"productname"=>$data["productname"]),"tile"); 
}
?>


                </div>
               
            </div>
        </section>

    </div>
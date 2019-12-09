<?php
    $list = $model["list"];

    $collectionimglist = $model["collectionimglist"];

    $collection = $model["collection"];
    $tilelist = $model["tilelist"];
?>

<div class="container">


        <!-- / PRODUCT_DETAIL / -->
        <section id="product_detail" class="sec_gap">
            <h2><?=$collection["cename"]?></h2>
            <p><?=$collection["effect"]?></p>
        </section>

        <!-- / PRODUCT_IMAGE / -->
        <section id="product_image" class="sec_gap">

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

                    $(function(){
                        $(".autohide").each(function(){
                            var fr = $(".t_data",$(this)).text();

                            if(fr=="" || fr.trim()=="") {
                                $(this).hide();
                            }
                        });
                    });
                </script>

            </div>

        </section>

        <!-- / TILE DETAIL / -->
        <section id="tile_detail" class="sec_gap">
            <h2>TILE DETAIL</h2>
            
                        <!-- MODAL START -->

            <div id="modal_container" style="display:none">
                <div class="mobox">
                <div class="bt"><a href="javascript:void(0)" onclick="closeModal()"><span>&times;</span></a></div>
                <div class="tile_container mo_slide" style="position:relative">
                    <img src="img/tile/t_0001/td_02.jpg">
                    <div class="tile_data">
                        <p data-p="pname">GARDENA BIANCO</p>
                        <p data-p="size">400*800*8T</p>
                    </div>
                    <div class="modal_l" onclick="movetile(-1)"><i class="fas fa-angle-left"></i></div>
                    <div class="modal_r" onclick="movetile(1)"><i class="fas fa-angle-right"></i></div>
                </div>
                </div>
            </div>
    
            <script>
                    function closeModal() {
                    document.getElementById("modal_container").style.display = "none";
                    }

                    function movetile(a){
                        var col = $(".tile_box .row .col");
                        var curid = $(".tile_container").data("id");
                        for(var i = 0;i<col.length;i++){
                            var item = $(col.get(i));
                            if(item.attr("data-id")==curid) {
                               var o = i+a;
                               if(o<0){
                                   item = $(col.get(col.length-1));
                                   openModal(item.attr("data-id"));
                                   return;
                               }
                               if(o>=col.length){
                                   item = $(col.get(0));
                                   openModal(item.attr("data-id"));
                                   return;
                               }
                               item = $(col.get(o));
                               openModal(item.attr("data-id"));
                               return;
                            }
                        }
                    }
                    function openModal(a) {
                        
                        var col = $(".tile_box .row .col");
                        for(var i = 0;i<col.length;i++){
                            var item = $(col.get(i));
                            if(item.attr("data-id")==a) {
                                $(".tile_container img").attr("src","/img/i_data/"+item.attr("data-i"));
                                $(".tile_container [data-p=pname]").text(item.attr("data-p"));
                                $(".tile_container [data-p=size]").text(item.attr("data-s"));
                                $(".tile_container").data("id",item.attr("data-id"));
                                document.getElementById("modal_container").style.display = "block";
                            }
                        }
                        
                    }
            </script>

            <!-- MODAL END -->

            <div class="tile_box">
                <div class="row">

<?php
for($i=0;$i<count($tilelist);$i++){$item = $tilelist[$i];

    echo drawView("tile/articleitem",array("item"=>$item,"productname"=>$data["productname"]),"tile"); 
}
?>


                </div>
               
            </div>
        </section>

        <section id="document" class="sec_gap">
            <h2>DOCUMENTS</h2>

        </section>
    </div>
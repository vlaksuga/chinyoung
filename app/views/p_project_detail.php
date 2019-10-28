<?php
    $item = $model["project"];
    $projectimglist = $model["projectimglist"];
    $projecttilelist = $model["projecttilelist"];
?>
<div class="container">
<script>
    $("#project_detail p").each(function(){
        if($("span",$(this)).html().trim()==""){
         $(this).hide();   
        }
    });
    
</script>
<!-- / PROJECT_DETAIL / -->
<section id="project_detail" class="sec_gap topsec_gap">
    <h2><?=$item["projectname"]?></h2>
    <p>LOCATION : <span><?=$item["location"]?></span></p>
    <p>SPACE : <span><?=getProjectSpaceStr($item)?></span></p> 
    <p>TYPE : <span><?=getProjectTypeStr($item)?></span></p> 
    <p>AREA : <span><?=$item["area"]?></span></p> 
    <p>TILES : 
         
         <?php for($i=0;$i<count($projecttilelist);$i++){ $item = $projecttilelist[$i];?>
            <span><?=$item["productname"]?></span>
                <?php if($i<count($projecttilelist)-1) { echo "<span>,</span>";}?>
        <?php }?>
    </p>
</section>

<div id="modal_container" style="display:none">
                <div class="bt"><a href="javascript:void(0)" onclick="closeModal()"><span>&times;</span></a></div>
                <div class="tile_container mo_slide" style="position:relative">
                    <img src="img/tile/t_0001/td_02.jpg">

                    <div class="modal_l" onclick="movetile(-1)"><i class="fas fa-angle-left"></i></div>
                    <div class="modal_r" onclick="movetile(1)"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
    
            <script>
                    function closeModal() {
                    document.getElementById("modal_container").style.display = "none";
                    }

                    function movetile(a){
                        var col = $("#projects_detail_tiles .grid .tile");
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
                        
                        var col = $("#projects_detail_tiles .grid .tile");
                        for(var i = 0;i<col.length;i++){
                            var item = $(col.get(i));
                            if(item.attr("data-id")==a) {
                                $(".tile_container img").attr("src","/img/i_data/"+item.attr("data-i"));
                                $(".tile_container").data("id",item.attr("data-id"));
                                document.getElementById("modal_container").style.display = "block";
                            }
                        }
                        
                    }
            </script>

<!-- / PROJECTS_DETAIL TILES / -->
<section id="projects_detail_tiles" class="sec_gap">

    <div class="grid">
        <?php for($i=0;$i<count($projectimglist);$i++){ $item = $projectimglist[$i];?>
                        <div class="tile" onclick="openModal('<?=$item["projectimgid"]?>')" data-id="<?=$item["projectimgid"]?>" data-i="<?=$item["url"]?>">
                            <img src="./img/i_data/<?=$item["url"]?>" alt="thumb1">
                        </div>
                 
        <?php }?>
        
    </div>


                
                
            </div>


                <? echo drawView("tile/paging",$model["page"]);?>



</section>

</div>


<!-- / RELATED PROJECT / 

<section id="related_project">

<div class="container">
    <h2>RELATED PROJECT</h2>
</div>

<div class="photos">

    <div class="item">
        <a href="#"><img class="insta" src="img/project/project_01/img_01.jpg"></a>
        <h2>SEOUL CITY-HALL</h2>
    </div>

    <div class="item">
        <a href="#"><img class="insta" src="img/project/project_01/img_02.jpg"></a>
        <h2>SEO-CHO DAESUNG OFFICE</h2>
    </div>

    <div class="item">
        <a href="#"><img class="insta" src="img/project/project_01/img_03.jpg"></a>
        <h2>KANG-SEO BAUHAUS</h2>
    </div>

</div>

</section>
-->

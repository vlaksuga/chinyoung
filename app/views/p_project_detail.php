<?php
    $item = $model["project"];
    $projectimglist = $model["projectimglist"];
    $projecttilelist = $model["projecttilelist"];
?>
<div class="container">

<!-- / PROJECT_DETAIL / -->
<section id="project_detail" class="sec_gap topsec_gap">
    <h2><?=$item["projectname"]?></h2>
    <p>LOCATION : <span><?=$item["location"]?></span></p>
    <p>SPACE : <span>INDOOR</span></p> <!-- 작업후 주석 삭제 요망 -->
    <p>TYPE : <span>RESIDENTIAL, FURNISHING</span></p> <!-- 작업후 주석 삭제 요망 -->
    <p>AREA : <span>싱크 상판, 주방벽</span></p> <!-- 작업후 주석 삭제 요망 -->
    <p>TILES : <span><a href="?m=product&cid=<?=$item["collectionid"]?>"><?=$item["productname"]?></a></span></p>
</section>


<!-- / PROJECTS_DETAIL TILES / -->
<section id="projects_detail_tiles" class="sec_gap">

    <div class="grid">
        <?php for($i=0;$i<count($projectimglist);$i++){ $item = $projectimglist[$i];?>
                        <div class="tile">
                            <img src="./img/i_data/<?=$item["url"]?>" alt="thumb1">
                        </div>
                 
        <?php }?>
        
    </div>


                
                
            </div>


                <? echo drawView("tile/paging",$model["page"]);?>



</section>

</div>


<!-- / RELATED PROJECT / -->
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
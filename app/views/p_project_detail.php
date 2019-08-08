<?php
    $item = $model["project"];
?>
<div class="container">

<!-- / PROJECT_DETAIL / -->
<section id="project_detail" class="sec_gap topsec_gap">
    <h2><?=$item["projectname"]?></h2>
    <p>LOCATION : <span><?=$item["location"]?></span></p>
    <p>YEAR : <span>????</span></p>
    <p>TILES : <span><a href="?m=product&cid=<?=$item["collectionid"]?>"><?=$item["productname"]?></a></span></p>
    <p>DETAIL : <span>?????????????????????<?=$item["area"]?></span></p>
</section>


<!-- / PROJECTS_DETAIL TILES / -->
<section id="projects_detail_tiles" class="sec_gap">

    <div class="grid">
        <div class="tile">
            <img src="img/thumb/thumb1.jpg" alt="thumb1">
            <div class="detail">
                <p>SEOUL CITY-HALL</p>
            </div>
            <div class="new"></div>
        </div>
        <div class="tile">
            <img src="img/thumb/thumb2.jpg" alt="thumb1">
            <div class="detail">
                <p>SEO-CHO DAESUNG OFFICE</p>
            </div>
            <div class="new"></div>
        </div>
        <div class="tile">
            <img src="img/thumb/thumb1.jpg" alt="thumb1">
            <div class="detail">
                <p>SEOUL CITY-HALL</p>
            </div>
            <div class="new"></div>
        </div>
        <div class="tile">
            <img src="img/thumb/thumb2.jpg" alt="thumb1">
            <div class="detail">
                <p>SEO-CHO DAESUNG OFFICE</p>
            </div>
            <div class="new"></div>
        </div>
        <div class="tile">
            <img src="img/thumb/thumb1.jpg" alt="thumb1">
            <div class="detail">
                <p>SEOUL CITY-HALL</p>
            </div>
            <div class="new"></div>
        </div>
        <div class="tile">
            <img src="img/thumb/thumb2.jpg" alt="thumb1">
            <div class="detail">
                <p>SEO-CHO DAESUNG OFFICE</p>
            </div>
            <div class="new"></div>
        </div>
        <div class="tile">
            <img src="img/thumb/thumb1.jpg" alt="thumb1">
            <div class="detail">
                <p>SEOUL CITY-HALL</p>
            </div>
            <div class="new"></div>
        </div>
        <div class="tile">
            <img src="img/thumb/thumb2.jpg" alt="thumb1">
            <div class="detail">
                <p>SEO-CHO DAESUNG OFFICE</p>
            </div>
            <div class="new"></div>
        </div>
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
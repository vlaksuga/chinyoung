<?php
    $data = &$model;
    $list = &$model["list"];
?>

  <!-- / HALF BOX / -->
  <section id="half_projects" class="half_box">
        <div class="bottom_art">
            <div>
                <p>PROJECTS</p>
                <p><span><?=$data["projecttotalcount"]?></span> PROJECTS</p>
            </div>
        </div>
    </section>

    <div class="container">

        <!-- / PROJECTS TILES / -->
        <section id="projects_tiles" class="sec_gap">

            <div class="grid">

                <?php
                    for($i=0;$i<count($list);$i++){
                ?>
                <div class="tile">
                    <img src="img/thumb/thumb1.jpg" alt="thumb1">
                    <div class="detail">
                        <p>SEOUL CITY-HALL</p>
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
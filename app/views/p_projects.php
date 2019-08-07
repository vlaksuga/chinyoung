<?php
    $data = &$model;
    $list = &$model["list"];
?>


    <div class="container">

        <!-- / PROJECTS TILES / -->
        <section id="projects_tiles" class="sec_gap">

        <h2>PROJECTS</h2>
                <div class="group">
                        <ul>
                            <li><a href="#">INDOOR</a></li>
                            <li class="active"><a href="#">OUTDOOR</a></li>
                            <li><a href="#">RESIDENTIAL</a></li>
                            <li><a href="#">COMMERCIAL</a></li>
                            <li><a href="#">PUBLIC</a></li>
                            <li><a href="#">FURNISHING</a></li>
                            <li><a href="#">ETC</a></li>
                        </ul>
        
                    </div>

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
<?php
    $data = &$model;
    $list = &$model["list"];
    $cate = $model["cate"];
?>


    <div class="container">

        <!-- / PROJECTS TILES / -->
        <section id="projects_tiles" class="sec_gap">

        <h2>PROJECTS</h2>
                <div class="group">
                        <ul>
                            <li><a <? if(trim($cate)=="") {?>class="active"<? }?>  href="?&m=projects">ALL</a></li>
                            <li><a <? if($cate=="indoor") {?>class="active"<? }?> href="?&m=projects&cate=indoor">INDOOR</a></li>
                            <li><a <? if($cate=="outdoor") {?>class="active"<? }?> href="?&m=projects&cate=outdoor">OUTDOOR</a></li>
                            <li><a <? if($cate=="residential") {?>class="active"<? }?> href="?&m=projects&cate=residential">RESIDENTIAL</a></li> 
                            <li><a <? if($cate=="commercial") {?>class="active"<? }?> href="?&m=projects&cate=commercial">COMMERCIAL</a></li>
                            <li><a <? if($cate=="public") {?>class="active"<? }?> href="?&m=projects&cate=public">PUBLIC</a></li>
                            <li><a <? if($cate=="furnishing") {?>class="active"<? }?> href="?&m=projects&cate=furnishing">FURNISHING</a></li>
                            <li><a <? if($cate=="etc") {?>class="active"<? }?> href="?&m=projects&cate=etc">ETC</a></li>
                        </ul>
        
                    </div>
                   
            <div class="grid">

                <?php
                    for($i=0;$i<count($list);$i++){ $item = $list[$i];
                        echo drawView("tile/projectitem",array("item"=>$item)); 
                    }
                ?>
                
                
            </div>


                <? echo drawView("tile/paging",$model["page"]);?>



        </section>

    </div>
<?php
    $page = $model["page"];
    $list = &$model["list"];
?>
<script>
    function space(){
        alert($("#space").val());
    }
    function size0(){
        alert($("#size").val());
    }
    function design(){
        alert($("#design").val());
    }
    function finish(){
        alert($("#finish").val());
    }
    function thickness(){
        alert($("#thickness").val());
    }
    function technology(){
        alert($("#technology").val());
    }
    


</script>
    <div class="container">

<!-- / SEARCH / -->
<section id="search" class="sec_gap">
    <h2>SEARCH</h2>
    <div class="alpha">
        <ul>
            <li><a href="#" onclick="sh('A')">A</a></li>
            <li><a href="#" onclick="sh('B')">B</a></li>
            <li><a href="#" onclick="sh('C')">C</a></li>
            <li><a href="#" onclick="sh('D')">D</a></li>
            <li><a href="#" onclick="sh('E')">E</a></li>
            <li><a href="#" onclick="sh('F')">F</a></li>
            <li><a href="#" onclick="sh('G')">G</a></li>
            <li><a href="#" onclick="sh('H')">H</a></li>
            <li><a href="#" onclick="sh('I')">I</a></li>
            <li><a href="#" onclick="sh('J')">J</a></li>
            <li><a href="#" onclick="sh('K')">K</a></li>
            <li><a href="#" onclick="sh('L')">L</a></li>
            <li><a href="#" onclick="sh('M')">M</a></li>
            <li><a href="#" onclick="sh('N')">N</a></li>
            <li><a href="#" onclick="sh('O')">O</a></li>
            <li><a href="#" onclick="sh('P')">P</a></li>
            <li><a href="#" onclick="sh('Q')">Q</a></li>
            <li><a href="#" onclick="sh('R')">R</a></li>
            <li><a href="#" onclick="sh('S')">S</a></li>
            <li><a href="#" onclick="sh('T')">T</a></li>
            <li><a href="#" onclick="sh('U')">U</a></li>
            <li><a href="#" onclick="sh('V')">V</a></li>
            <li><a href="#" onclick="sh('W')">W</a></li>
            <li><a href="#" onclick="sh('X')">X</a></li>
            <li><a href="#" onclick="sh('Y')">Y</a></li>
            <li><a href="#" onclick="sh('Z')">Z</a></li>
            <li><a href="#" onclick="sh('num')">0-9</a></li>
        </ul>
    </div>
    <div class="select">
        <div class="s_space">
            <select id="space" name="space" onchange="space()">
                <option value="" disabled selected>SPACE</option>
                <option value="indoor">INDOOR</option>
                <option value="outdoor">OUTDOOR</option>
            </select>
        </div>
        <div class="s_size">
            <select id="size" name="size" onchange="size0()">
                <option value="" disabled selected>SIZE</option>
                <option value="1">150*600 / 200*800 / 150*900</option>
                <option value="2">200*1200</option>
                <option value="3">260*1600 / 400*1600</option>
                <option value="4">100*300</option>
                <option value="5">200*200</option>
                <option value="6">300*300</option>
                <option value="7">300*600</option>
                <option value="8">600*600</option>
                <option value="9">400*800 / 450*900</option>
                <option value="10">900*900 / 880*880</option>
                <option value="11">600*1200</option>
                <option value="12">750*1500</option>
                <option value="13">800*1600</option>
                <option value="14">900*1800</option>
                <option value="15">1000*1000</option>
                <option value="16">1200*1200</option>
                <option value="17">1200*2600</option>
                <option value="18">1000*3000</option>
            </select>
        </div>
        <div class="s_design">
            <select id="design" name="design" onchange="design()">
                <option value="" disabled selected>DESIGN</option>
                <option value="stone">STONE</option>
                <option value="marble">MARBLE</option>
                <option value="concrete">CONCRETE</option>
                <option value="terracotta">TERRACOTTA</option>
                <option value="wood">WOOD</option>
                <option value="brick">BRICK</option>
                <option value="decor">DÉCOR</option>
                <option value="metal">METAL</option>
                <option value="colour">COLOUR</option>
            </select>
        </div>
        <div class="s_finish">
            <select id="finish" name="finish" onchange="finish()">
                <option value="" disabled selected>FINISH</option>
                <option value="matt">MATT, NATURAL</option>
                <option value="glossy">GLOSSY, POLISHED</option>
                <option value="lappato">LAPPATO, HONED</option>
                <option value="structured">STRUCTURED</option>
            </select>
        </div>

        <div class="s_thickness">
            <select id="thickness" name="thickness" onchange="thickness()">
                <option value="" disabled selected>THICHNESS</option>
                <option value="1">3.5T - 6.5T</option>
                <option value="2">8T</option>
                <option value="3">9T - 11T</option>
                <option value="4">13T</option>
                <option value="5">14T</option>
                <option value="6">16T</option>
                <option value="7">20T</option>
            </select>
        </div>
        <div class="s_technology">
            <select id="technology" name="technology" onchange="technology()">
                <option value="" disabled selected>TECHNOLOGY</option>
                <option value="kerite">KERILITE@</option>
                <option value="bigslab">BIG SLAB</option>
                <option value="porcelain">PORCELAIN</option>
                <option value="ceramic">CERAMIC</option>
                <option value="anti-bacterial">ANTI-BACTERIAL</option>
                <option value="anti-slip">ANTI-SLIP</option>
            </select>
        </div>
    </div>
</section>

<!-- / SEARCH RESULT / -->
<section id="search_result" class="sec_gap">
    <h2>SEARCH RESULT</h2>

    <div class="result">
        <span><?=$page["itemcnt"]?></span> PRODUCTS
    </div>

    <!--  -->
    <div class="null">
        검색 결과가 없습니다.
    </div>

    <div class="grid">
        <?php
                    for($i=0;$i<count($list);$i++){$item = $list[$i];
                       // print_r($item);
                        echo drawView("tile/articleitem",array("item"=>$item,"productname"=>$data["productname"])); 
                    }
                 ?>
    </div>


    <div class="pagination">
                 <? echo drawView("tile/paging",$model["page"]);?>
            </div>

</section>

</div>
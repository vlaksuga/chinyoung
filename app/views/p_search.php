<?php

    $page = $model["page"];
    $list = &$model["list"];
    $p_space = $model["space"];
    $p_design = $model["design"];
    $p_finish = $model["finish"];
    $p_technology = $model["technology"];
    $p_hint = $model["hint"];
    $p_size = $model["size"];
    $p_thickness = $model["thickness"];
?>
<script>
    function reset(){
        window.location.href="./?m=search";
    }
    function size0(){
        alert($("#size").val());
    }

    function thickness(){
        alert($("#thickness").val());
    }
    function sh(a){
        curhint = a;
       search();
    }
    
    function search(){
        var u = "/?m=search&";
        if($("#space").val()){
            u+="&space="+$("#space").val();
        }
        if($("#design").val()){
            u+="&design="+$("#design").val();
        }
        if($("#finish").val()){
            u+="&finish="+$("#finish").val();
        }
        if($("#technology").val()){
            u+="&technology="+$("#technology").val();
        }
        if($("#thickness").val()){
            u+="&thickness="+$("#thickness").val();
        }
        if($("#size").val()){
            u+="&size="+$("#size").val();
        }
        if(curhint!=""){
            u+="&hint="+curhint;
        }

        window.location.href = u;

    }

var curhint = "<?=$p_hint?>";


$(function(){
    $("#space").val("<?=$p_space?>");
    $("#design").val("<?=$p_design?>");
    $("#finish").val("<?=$p_finish?>");
    $("#technology").val("<?=$p_technology?>");
    $("#size").val("<?=$p_size?>");
    $("#thickness").val("<?=$p_thickness?>");
    });

</script>
    <div class="container">

<!-- / SEARCH / -->
<section id="search" class="sec_gap">
    <h2>SEARCH</h2>
    <div class="alpha">
        <ul>
            <li><a onclick="sh('A')">A</a></li>
            <li><a  onclick="sh('B')">B</a></li>
            <li><a onclick="sh('C')">C</a></li>
            <li><a  onclick="sh('D')">D</a></li>
            <li><a  onclick="sh('E')">E</a></li>
            <li><a  onclick="sh('F')">F</a></li>
            <li><a  onclick="sh('G')">G</a></li>
            <li><a  onclick="sh('H')">H</a></li>
            <li style="display:none;"><a  onclick="sh('I')">I</a></li>
            <li><a  onclick="sh('J')">J</a></li>
            <li style="display:none;"><a  onclick="sh('K')">K</a></li>
            <li><a  onclick="sh('L')">L</a></li>
            <li><a onclick="sh('M')">M</a></li>
            <li><a  onclick="sh('N')">N</a></li>
            <li><a  onclick="sh('O')">O</a></li>
            <li><a onclick="sh('P')">P</a></li>
            <li style="display:none;"><a  onclick="sh('Q')">Q</a></li>
            <li><a  onclick="sh('R')">R</a></li>
            <li><a onclick="sh('S')">S</a></li>
            <li style="display:none;"><a  onclick="sh('T')">T</a></li>
            <li style="display:none;"><a  onclick="sh('U')">U</a></li>
            <li><a  onclick="sh('V')">V</a></li>
            <li><a onclick="sh('W')">W</a></li>
            <li><a  onclick="sh('X')">X</a></li>
            <li><a  onclick="sh('Y')">Y</a></li>
            <li style="display:none;"><a onclick="sh('Z')">Z</a></li>
            <li><a  onclick="sh('1')">0-9</a></li>
        </ul>
    </div>
    <div class="select">
        <div class="s_space">
            <select id="space" name="space" onchange="search()">
                <option value="" selected>SPACE</option>
                <option value="indoor">INDOOR</option>
                <option value="outdoor">OUTDOOR</option>
            </select>
        </div>
        <div class="s_size">
            <select id="size" name="size"  onchange="search()">
                <option value="" selected>SIZE</option>
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
            <select id="design" name="design" onchange="search()">
                <option value="" selected>DESIGN</option>
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
            <select id="finish" name="finish" onchange="search()">
                <option value="" selected>FINISH</option>
                <option value="matt">MATT, NATURAL</option>
                <option value="glossy">GLOSSY, POLISHED</option>
                <option value="lappato">LAPPATO, HONED</option>
                <option value="structured">STRUCTURED</option>
            </select>
        </div>

        <div class="s_thickness">
            <select id="thickness" name="thickness"  onchange="search()">
                <option value="" selected>THICKNESS</option>
                <option value="1">3.5T - 6.5T</option>
                <option value="2">7T - 8.5T</option>
                <option value="3">9T - 11T</option>
                <option value="4">13T</option>
                <option value="5">14T</option>
                <option value="6">16T</option>
                <option value="7">20T</option>
            </select>
        </div>
        <div class="s_technology">
            <select id="technology" name="technology" onchange="search()">
                <option value="" selected>TECHNOLOGY</option>
                <option value="kerite">KERLITE@</option>
                <option value="bigslab">BIG SLAB</option>
                <option value="porcelain">PORCELAIN</option>
                <option value="ceramic">CERAMIC</option>
                <option value="anti-bacterial">ANTI-BACTERIAL</option>
                <option value="anti-slip">ANTI-SLIP</option>
            </select>
        </div>
    </div>
    <div class="notice">
        <h5>*검색결과는 해당제품이 포함된 컬렉션입니다. 클릭하시면 제품상세를 확인하실 수 있습니다.</h5>
    </div>
</section>



<!-- / SEARCH RESULT / -->
<section id="search_result" class="sec_gap">
    <div id="btn_reset"><button onclick = "reset()">RESET <i class="fas fa-redo"></i></button></div>
    <h2>SEARCH RESULT</h2>

    <div class="result">
        <span><?=$page["itemcnt"]?></span> COLLECTIONS
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
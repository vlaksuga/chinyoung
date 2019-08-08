  <?php
    $list = &$model["main8"];
  ?>
    <!-- / INTRO BOX / -->
    <section id="intro_box"> 
        <div class="bottom_art">
            <div>GRAYSTONE</div>
            <div><a href="#">DETAILS</a></div>
        </div>
    </section>

    <!-- / INTRO BOX ALT / -->

    <section id="intro">
            <div class="intro-container" style="visibility: visible; animation-name: fadeIn;">
              <h1>GRAYSTONE</h1>
              <a class="about-btn" href="#">VIEW DETAIL</a>
            </div>
    </section>

    <!-- / INDEX BANNER / -->
    <section id="index_banner"> 
        <div class="banner_left">
            <h1>COTTO D'ESTE</h1>
            <svg width="30%" height="20">
                <rect width="100%" height="10" style="fill:rgba(0,0,255,0.8); stroke:none" />
            </svg>
            <p>Cotto d’Este’s mission is based on the values of Italian beauty:
                taste, elegance, and style that bring the highest levels
                of excellence to our everyday lives.</p>
            <p><a href="#"> > view more</a></p>
        </div>
        <div class="banner_right"></div>
    </section> 

    <!-- / INDEX TILES / -->
    <section id="index_tiles">

        <div class="grid">
  
        <?php
                    for($i=0;$i<count($list);$i++){$item = $list[$i];
                       // print_r($item);
                        echo drawView("tile/articleitem",array("item"=>$item,"productname"=>$data["productname"])); 
                    }
                 ?>
        </div>

        <div class="more">
            <a href="#">VIEW MORE > </a>
        </div>
    </section>

    <!-- / INSTAGRAM / -->
    <section id="instagram">

        <div class="insta_title">
            <h2>INSTAGRAM</h2>
            <p>@CHINYOUNGKOREA_OFFICIAL</p>
        </div>
        
        <script>
        
        $.ajax({
                url: 'https://api.instagram.com/v1/users/self/media/recent/?access_token=2234372569.bdd3947.8d2694232968460190244e85d24b0b64&callback=?',        
                error: function() {
                alert('error');
                },        
                success: function(data) {
                    set1(data);
                    
                },
                type: 'GET',
                dataType: "jsonp"
            });
        
        function set1(dd){
            var limit = 8 ;
            for(var i = 0;i<dd.data.length && i<limit;i++){
                var curitems = $("#instaarea .item");
                var curitem = $(curitems.get(i));
                $(".insta",curitem).attr("src",dd.data[i].images.standard_resolution.url);
                $("a",curitem).attr("href",dd.data[i].link);
                
            }
        }
</script>

    <div class="photos" id="instaarea">
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb10.jpg" ></a>
        </div>
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb11.jpg"></a>
        </div>
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb12.jpg"></a>
        </div>
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb13.jpg"></a>
        </div>
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb14.jpg"></a>
        </div>
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb15.jpg"></a>
        </div>
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb16.jpg"></a>
        </div>
        <div class="item">
            <a href="#"><img class="insta" src="img/thumb/thumb17.jpg"></a>
        </div>
    </div>
</section>

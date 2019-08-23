  <?php
    $list = &$model["main8"];
  ?>
  
    <section id="intro">
        <div class="intro-container">
          <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
    
  
            <div class="carousel-inner" role="listbox">
    
              <div class="carousel-item active">
                <div class="carousel-background">
                  <img src="img/intro/intro_01.jpg" alt="">
                </div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>FRAME</span></h2>
                    <div><a href="./?m=product&cid=52">VIEW MORE</a></div>
                  </div>
                </div>
              </div>
    
              <div class="carousel-item">
                <div class="carousel-background"><img src="img/intro/intro_02.jpg" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>kerlite VANITY</h2>
                    <div><a href="./?m=product&cid=8">VIEW MORE</a></div>
                  </div>
                </div>
              </div>
    
              <div class="carousel-item">
                <div class="carousel-background"><img src="img/intro/intro_03.jpg" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>kerlite LIMESTONE</h2>
                    <div><a href="./?m=product&cid=2">VIEW MORE</a></div>
                  </div>
                </div>
              </div>
    
              <div class="carousel-item">
                <div class="carousel-background"><img src="img/intro/intro_04.jpg" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>RODEN</h2>
                    <div><a href="./?m=product&cid=63">VIEW MORE</a></div>
                  </div>
                </div>
              </div>
    
            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon fas fa-angle-left" aria-hidden="true"></span>
            </a>
    
            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon fas fa-angle-right" aria-hidden="true"></span>
            </a>
    
          </div>
        </div>
      </section>

  <!-- for Carousel -->  
    <script>
      var introCarousel = $(".carousel");
  var introCarouselIndicators = $(".carousel-indicators");
  introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>") :
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");

    $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') +"')");
    $(this).children('.carousel-background').remove();
  });

  $(".carousel").swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (direction == 'left') $(this).carousel('next');
      if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll:"vertical"
  });
  </script>


    <!-- / INDEX BANNER / -->
    <section id="index_banner"> 
        <div class="banner_left">
          <div class="cotto_title">
            <h1><img src="img/coco.png"></h1>
            <h3>EXTRA THICK, ULTRA THIN</h3>
          </div>
          <div class="cotto_eng">
            <p>-20-YEAR GUARANTEE, PROTECT ANTI-BACTERIAL</p>
            <p>THE ESSENCE OF ITALIAN TILES, STANDARDS OF HIGH-END PRODUCTS.<br>
               EXPERIENCE COTTO D'ESTE EXCLUSIVELY DISTRIBUTED BY CHINYOUNG.</p>
          </div>
          <div class="cotto_kor">
          <h6>코토데스테</h6>
            <p>아주 두껍거나, 아주 얇거나 20년 내구성 보장, 프로텍트 항균 이탈리아 타일의 정수, 하이-엔드의 표본. 진영코리아의 대표 브랜드 코토데스테로 경험하세요.</p>
          </div>
         <div class="cotto_view">
            <div class="more"><a href="./?m=l&p=cotto">VIEW MORE</a></div>
         </div>

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
            <a href="./?m=l">VIEW MORE</a>
        </div>
    </section>

    <!-- / INSTAGRAM / -->
    <section id="instagram">

        <div class="insta_title">
            <h2>INSTAGRAM</h2>
            <p><a href="//www.instagram.com/chinyoungkorea_official/" target="_blank"> @CHINYOUNGKOREA_OFFICIAL</a></p>
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
                $("a",curitem).attr("target","_blank");
                
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

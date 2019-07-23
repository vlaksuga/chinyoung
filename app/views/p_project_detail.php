 <!-- / HALF BOX / -->
 <section id="half_project_detail" class="half_box">
        <div class="bottom_art">
            <div>PROJECTS</div>
        </div>
    </section>


    <div class="container">


        <!-- / PROJECT_DETAIL / -->
        <section id="project_detail" class="sec_gap">
            <h2>SEOUL CITY-HALL</h2>
            <p>LOCATION : <span>서울 중구</span></p>
            <p>YEAR : <span>2019</span></p>
            <p>TILES : <span><a href="#">GARDENA BIANCO</a>, <a href="#">MARS L GREY</a></span></p>
            <p>DETAIL : <span>서울 시청에 관한 프로젝트 입니다</span></p>
        </section>


        <!-- / PROJECT_IMAGE / -->
        <section id="project_image" class="sec_gap">
            <h2>IMAGES</h2>

            <!-- SLIDESHOW GALLERY -->
            <div class="image_container">
                <div class="slides">
                    <img src="img/project/project_01/img_01.jpg" style="width:100%">
                </div>

                <div class="slides">
                    <img src="img/project/project_01/img_02.jpg" style="width:100%">
                </div>

                <div class="slides">
                    <img src="img/project/project_01/img_03.jpg" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="nav_row">
                    <div class="nav_column">
                        <img class="thumb cursor" src="img/project/project_01/img_01.jpg" style="width:100%"
                            onclick="currentSlide(1)" alt="01">
                    </div>
                    <div class="nav_column">
                        <img class="thumb cursor" src="img/project/project_01/img_02.jpg" style="width:100%"
                            onclick="currentSlide(2)" alt="02">
                    </div>
                    <div class="nav_column">
                        <img class="thumb cursor" src="img/project/project_01/img_03.jpg" style="width:100%"
                            onclick="currentSlide(3)" alt="03">
                    </div>
                </div>

                <!-- SLIDES SCRIPT -->
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("slides");
                        var dots = document.getElementsByClassName("thumb");
                        if (n > slides.length) { slideIndex = 1 }
                        if (n < 1) { slideIndex = slides.length }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" nav_active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " nav_active";
                    }
                </script>

            </div>

        </section>

    </div>
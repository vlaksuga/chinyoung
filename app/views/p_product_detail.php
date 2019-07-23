<div class="container">


        <!-- / PRODUCT_DETAIL / -->
        <section id="product_detail" class="sec_gap">
            <h2>GARDENA</h2>
            <p>MARBLE</p>
        </section>

        <!-- / PRODUCT_IMAGE / -->
        <section id="product_image" class="sec_gap">
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

        <!-- / TILE DETAIL / -->
        <section id="tile_detail" class="sec_gap">
            <h2>TILE DETAIL</h2>
            <div class="tile_box">
                <div class="row">

                    <div class="col">
                        <div class="img_box">
                            <a href="#">
                                <img src="img/tile/t_0001/td_01.jpg" class="modal_img">
                            </a>
                        </div>

                        <div class="txt_box">
                            <h3>GARDENA BIANCO</h3>
                            <div class="row">
                                <div class="t_label">CODE</div>
                                <div class="t_data">GARDENA</div>
                            </div>
                            <div class="row">
                                <div class="t_label">DESIGN</div>
                                <div class="t_data">MARBLE</div>
                            </div>
                            <div class="row">
                                <div class="t_label">COLOUR</div>
                                <div class="t_data">001 BIANCO</div>
                            </div>
                            <div class="row">
                                <div class="t_label">TECHNOLOGY</div>
                                <div class="t_data">KERLITE@</div>
                            </div>
                            <div class="row">
                                <div class="t_label">THICKNESS</div>
                                <div class="t_data">8T</div>
                            </div>
                            <div class="row">
                                <div class="t_label">SIZE</div>
                                <div class="t_data">400*800</div>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="img_box">
                            <a href="#">
                                <img src="img/tile/t_0001/td_02.jpg" class="modal_img">
                            </a>
                        </div>

                        <div class="txt_box">
                            <h3>GARDENA BIANCO</h3>
                            <div class="row">
                                <div class="t_label">CODE</div>
                                <div class="t_data">GARDENA</div>
                            </div>
                            <div class="row">
                                <div class="t_label">DESIGN</div>
                                <div class="t_data">MARBLE</div>
                            </div>
                            <div class="row">
                                <div class="t_label">COLOUR</div>
                                <div class="t_data">001 BIANCO</div>
                            </div>
                            <div class="row">
                                <div class="t_label">TECHNOLOGY</div>
                                <div class="t_data">KERLITE@</div>
                            </div>
                            <div class="row">
                                <div class="t_label">THICKNESS</div>
                                <div class="t_data">8T</div>
                            </div>
                            <div class="row">
                                <div class="t_label">SIZE</div>
                                <div class="t_data">400*800</div>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="img_box">
                            <a href="#">
                                <img src="img/tile/t_0001/td_03.jpg" class="modal_img">
                            </a>
                        </div>

                        <div class="txt_box">
                            <h3>GARDENA BIANCO</h3>
                            <div class="row">
                                <div class="t_label">CODE</div>
                                <div class="t_data">GARDENA</div>
                            </div>
                            <div class="row">
                                <div class="t_label">DESIGN</div>
                                <div class="t_data">MARBLE</div>
                            </div>
                            <div class="row">
                                <div class="t_label">COLOUR</div>
                                <div class="t_data">001 BIANCO</div>
                            </div>
                            <div class="row">
                                <div class="t_label">TECHNOLOGY</div>
                                <div class="t_data">KERLITE@</div>
                            </div>
                            <div class="row">
                                <div class="t_label">THICKNESS</div>
                                <div class="t_data">8T</div>
                            </div>
                            <div class="row">
                                <div class="t_label">SIZE</div>
                                <div class="t_data">400*800</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                        <div class="col">
                            <div class="img_box">
                                <a href="#">
                                    <img src="img/tile/t_0001/td_01.jpg" class="modal_img">
                                </a>
                            </div>
    
                            <div class="txt_box">
                                <h3>GARDENA BIANCO</h3>
                                <div class="row">
                                    <div class="t_label">CODE</div>
                                    <div class="t_data">GARDENA</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">DESIGN</div>
                                    <div class="t_data">MARBLE</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">COLOUR</div>
                                    <div class="t_data">001 BIANCO</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">TECHNOLOGY</div>
                                    <div class="t_data">KERLITE@</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">THICKNESS</div>
                                    <div class="t_data">8T</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">SIZE</div>
                                    <div class="t_data">400*800</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col">
    
                            <div class="img_box">
                                <a href="#">
                                    <img src="img/tile/t_0001/td_02.jpg" class="modal_img">
                                </a>
                            </div>
    
                            <div class="txt_box">
                                <h3>GARDENA BIANCO</h3>
                                <div class="row">
                                    <div class="t_label">CODE</div>
                                    <div class="t_data">GARDENA</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">DESIGN</div>
                                    <div class="t_data">MARBLE</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">COLOUR</div>
                                    <div class="t_data">001 BIANCO</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">TECHNOLOGY</div>
                                    <div class="t_data">KERLITE@</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">THICKNESS</div>
                                    <div class="t_data">8T</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">SIZE</div>
                                    <div class="t_data">400*800</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col">
    
                            <div class="img_box">
                                <a href="#">
                                    <img src="img/tile/t_0001/td_03.jpg" class="modal_img">
                                </a>
                            </div>
    
                            <div class="txt_box">
                                <h3>GARDENA BIANCO</h3>
                                <div class="row">
                                    <div class="t_label">CODE</div>
                                    <div class="t_data">GARDENA</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">DESIGN</div>
                                    <div class="t_data">MARBLE</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">COLOUR</div>
                                    <div class="t_data">001 BIANCO</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">TECHNOLOGY</div>
                                    <div class="t_data">KERLITE@</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">THICKNESS</div>
                                    <div class="t_data">8T</div>
                                </div>
                                <div class="row">
                                    <div class="t_label">SIZE</div>
                                    <div class="t_data">400*800</div>
                                </div>
                            </div>
                        </div>
    
                </div>
            </div>
        </section>

    </div>
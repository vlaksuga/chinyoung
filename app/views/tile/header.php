<nav>
            <ul id="scroll_fade">
                <li><a href="#"><img src="img/logo.png" alt="LOGO"></a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">PRODUCTS</a>
                    <div class="dropdown-content">
                        <a href="#">KERLITE / BIG SLAB</a>
                        <a href="#">MARBLE</a>
                        <a href="#">STONE</a>
                        <a href="#">CONCRETE</a>
                        <a href="#">TERRACOTTA</a>
                        <a href="#">WOOD</a>
                        <a href="#">BRICK / DÉCOR</a>
                        <a href="#">COLOUR</a>
                        <a href="#">OUTDOOR</a>
                    </div>
                </li>
                <li><a href="#">PROJECTS</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">SEARCH</a></li>
                <li style="float: right;"><a href="#">CATALOG</a></li>
            </ul>
        </nav>

        <!-- NAV OPACITY BY SCROLL -->

        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    scrollPos = $(document).scrollTop();
                    var opacityVal = 0 + (Math.min(scrollPos / 100, 1));
                    var rgbaCol = 'rgba(0, 0, 0, ' + opacityVal + ')'
                    $('#scroll_fade').css('background-color', rgbaCol);
                })
            })
        </script>


        <!-- xs start -->
        <div class="xs" id="nav_top">
            <div class="menu_logo"><a href="#"><img src="img/logo.png" alt="LOGO"></a></div>
            <div class="menu_toggle">
                <a href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars"></i></a>
            </div>
        </div>
        
        
                <div class="xs nav_page" id="mobile_nav">
                    <div class="close"><a href="javascript:void(0)" onclick="closeNav()"><span>&times;</span></a></div>
                    <div class="menu"><a href="#">ABOUT</a></div>
                    <div class="menu"><a href="javascript:void(0)" onclick="togSub()">PRODUCTS</a>
                        <div class="sub" id="sub">
                            <p><a href="#">KERLITE / BIG SLAB</a></p>
                            <p><a href="#">MARBLE</a></p>
                            <p><a href="#">STONE</a></p>
                            <p><a href="#">CONCRETE</a></p>
                            <p><a href="#">TERRACOTTA</a></p>
                            <p><a href="#">WOOD</a></p>
                            <p><a href="#">BRICK / DÉCOR</a></p>
                            <p><a href="#">COLOUR</a></p>
                            <p><a href="#">OUTDOOR</a></p>
                        </div>
                    </div>
                    <div class="menu"><a href="#">PROJECTS</a></div>
                    <div class="menu"><a href="#">CONTACT</a></div>
                    <div class="menu"><a href="#">SEARCH</a></div>
                </div>
        
        
                <script>
                  
                    function closeNav() {
                    document.getElementById("mobile_nav").style.display = "none";
                    }
        
                    function openNav() {
                    document.getElementById("mobile_nav").style.display = "block";
        
                    }
        
                    function togSub() {
                    var x = document.getElementById("sub");
                        if (x.className === "sub") {
                            x.className += " sub-on";  }
                             else { 
                            x.className = "sub";
                        }
        
                  }
        
                </script>
        

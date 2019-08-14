<nav>
            <ul id="scroll_fade">
                <li><a href="./"><img src="img/logo.png" alt="LOGO"></a></li>
                <li><a href="./?c=etc&m=about">ABOUT</a></li>
                <li class="dropdown">
                    <a href="./?m=l" class="dropbtn">PRODUCTS</a>
                    <div class="dropdown-content">
                        <a href="./?m=l&p=kerlite">KERLITE / BIG SLAB</a>
                        <a href="./?m=l&p=MARBLE">MARBLE</a>
                        <a href="./?m=l&p=STONE">STONE</a>
                        <a href="./?m=l&p=CONCRETE">CONCRETE</a>
                        <a href="./?m=l&p=TERRACOTTA">TERRACOTTA</a>
                        <a href="./?m=l&p=WOOD">WOOD</a>
                        <a href="./?m=l&p=brick">BRICK / DÉCOR</a>
                        <a href="./?m=l&p=METAL">METAL</a>
                        <a href="./?m=l&p=COLOUR">COLOUR</a>
                        <a href="./?m=l&p=outdoor">OUTDOOR</a>
                    </div>
               
                </li>
                <li><a href="./?m=projects">PROJECTS</a></li>
                <li><a href="./?c=etc&m=contact">CONTACT</a></li>
                <li><a href="./?m=search">SEARCH</a></li>
                <li style="float: right;"><a href="./lib/chinyoung_products_2016catalog.zip">CATALOG</a></li>
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
            <div class="menu_logo"><a href="./"><img src="img/logo.png" alt="LOGO"></a></div>
            <div class="menu_toggle">
                <a href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars"></i></a>
            </div>
        </div>
        
        
                <div class="xs nav_page" id="mobile_nav">
                    <div class="close"><a href="javascript:void(0)" onclick="closeNav()"><span>&times;</span></a></div>
                    <div class="menu"><a href="./?c=etc&m=about">ABOUT</a></div>
                    <div class="menu"><a href="javascript:void(0)" onclick="togSub()">PRODUCTS</a>
                        <div class="sub" id="sub">
                            <p><a href="./?m=l&p=kerlite">KERLITE / BIG SLAB</a></p>
                            <p><a href="./?m=l&p=MARBLE">MARBLE</a></p>
                            <p><a href="./?m=l&p=STONE">STONE</a></p>
                            <p><a href="./?m=l&p=CONCRETE">CONCRETE</a></p>
                            <p><a href="./?m=l&p=TERRACOTTA">TERRACOTTA</a></p>
                            <p><a href="./?m=l&p=WOOD">WOOD</a></p>
                            <p><a href="./?m=l&p=brick">BRICK / DÉCOR</a></p>
                            <p><a href="./?m=l&p=METAL">METAL</a></p>
                            <p><a href="./?m=l&p=COLOUR">COLOUR</a></p>
                            <p><a href="./?m=l&p=outdoor">OUTDOOR</a></p>
                        </div>
                    </div>
                    <div class="menu"><a href="./?m=project">PROJECTS</a></div>
                    <div class="menu"><a href="./?c=etc&m=contact">CONTACT</a></div>
                    <div class="menu"><a href="./?m=search">SEARCH</a></div>
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
        

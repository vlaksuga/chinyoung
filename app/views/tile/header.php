<nav>
            <ul id="scroll_fade">
                <li><a href="#"><img src="img/logo.png" alt="LOGO"></a></li>
                <li><a href="/?c=etc&m=about">ABOUT</a></li>
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
                <li style="float: right;"><a href="#"><i class="fa fa-cog"></i></a></li>
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
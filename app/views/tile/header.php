<nav>
            <ul id="scroll_fade">
                <li><a href="/"><img src="img/logo.png" alt="LOGO"></a></li>
                <li><a href="/?c=etc&m=about">ABOUT</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">PRODUCTS</a>
                    <div class="dropdown-content">
                        <a href="./?m=products&p=1">KERLITE / BIG SLAB</a>
                        <a href="./?m=products&p=1">MARBLE</a>
                        <a href="./?m=products&p=1">STONE</a>
                        <a href="./?m=products&p=1">CONCRETE</a>
                        <a href="./?m=products&p=1">TERRACOTTA</a>
                        <a href="./?m=products&p=1">WOOD</a>
                        <a href="./?m=products&p=1">BRICK / DÉCOR</a>
                        <a href="./?m=products&p=1">COLOUR</a>
                        <a href="./?m=products&p=1">OUTDOOR</a>
                    </div>
                </li>
                <li><a href="./?m=projects">PROJECTS</a></li>
                <li><a href="./?c=etc&m=contact">CONTACT</a></li>
                <li><a href="./?m=search">SEARCH</a></li>
                <li style="float: right;"><a href="/catalog.pdf">CATALOG</a></li>
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
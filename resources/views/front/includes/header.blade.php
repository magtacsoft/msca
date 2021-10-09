<div id="site-header-wrap">
    <!-- Top Bar -->
    <div id="top-bar" class="style-2">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">

                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">
                            <a href="#" title="Twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            <a href="#" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            <a href="#" title="Google Plus"><span class="fa fa-google-plus"
                                                                  aria-hidden="true"></span></a>
                            <a href="#" title="Pinterest"><span class="fa fa-pinterest" aria-hidden="true"></span></a>
                            <a href="#" title="Dribbble"><span class="fa fa-dribbble" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->

                <div class="top-bar-content">
                    <span id="top-bar-text">
                        <i class="fa fa-phone-square"></i>+1 718-999-3939
                        <i class="fa fa-envelope"></i>contact@construction.com
                        <i class="fa fa-clock-o"></i>Mon-Fri: 7:00 - 17:00
                    </span><!-- /#top-bar-text -->
                </div><!-- /.top-bar-content -->
            </div>
        </div>
    </div><!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header" class="header-front-page style-5">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner">
                <div id="site-logo" class="clearfix">
                    <div id="site-logo-inner">
                        <a href="{{route('index')}}" title="Construction" rel="home" class="main-logo">
                            <img src="assets/img/logo-light.png" alt="Construction"
                                 data-retina="assets/img/logo-light@2x.png" data-width="200" data-height="30">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">

                    <ul class="menu">

                        @foreach($menu as $item)
                            <li class="menu-item "><a href="{{$item->path}}">{{$item->title}}</a></li>
                            @endforeach
                            </li>
                            <li class="agro menu-item menu-item-has-children"><a href="javascript:void(0) ">Agro</a>
                                <ul class="sub-menu">
                                    @foreach($agro as $agroItem)
                                        <li class="menu-item"><a href="{{$agroItem->path}}">{{$agroItem->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                    </ul>
                </nav><!-- /#main-nav -->


            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->

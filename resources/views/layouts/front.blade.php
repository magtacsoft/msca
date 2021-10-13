<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>MSCA</title>
    <meta name="description"
          content="Template built for Construction Company, Building Services, Architecture, Engineering, Cleaning Service and other Construction related services">
    <meta name="keywords"
          content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="blogwp.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('style.css?' . 'v' . time() )}}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{asset('assets/icon/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/icon/apple-touch-icon-158-precomposed.png')}}">
    <link rel="stylesheet" href="{{asset('dist/css/splide.min.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="{{asset('dist/js/splide.min.js')}}"></script>

    <![endif]-->
    <style>
        .partner-item img {
            width: 100% !important;
            height: auto !important;
        }
    </style>

    <style id="fit-vids-style">.fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }</style>
</head>

<body class="front-page no-sidebar site-layout-full-width header-style-5 menu-has-search menu-has-cart header-sticky">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">

    @yield('header')

    <!-- Hero Background SlideShow -->
    @yield('content')

    <!-- Footer -->
        <footer id="footer">
            <div id="footer-widgets" class="container style-1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget_text">
                            <h2 class="widget-title"><span>Haqqımızda</span></h2>
                            <div class="textwidget">

                                <img src="{{asset('uploads/' . $data['img'])}}" width="200" height="30" alt="image"
                                     class="margin-top-5 margin-bottom-25"/>
                                <p>Modern Style Construction Agro MMC yeni istehsal sahələri yaradaraq, qabaqcıl və
                                    müasir texnologiyaları tətbiq edərək etibarlı tərəfdaş kimi nüfuz qazanır..</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget widget_links">
                            <h2 class="widget-title"><span>Keçidlər</span></h2>
                            <ul class="wprt-links clearfix col2">
                                @foreach(\App\Models\Menu::orderBy('ordering' , 'desc')->get()->except([4,5,8]) as $item)
                                    <li class="style-2"><a href="{{$item->path}}">{{$item->title}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget widget_information">
                            <h2 class="widget-title"><span>Əlaqə</span></h2>
                            <ul class="style-2">
                                <li class="address clearfix">
                                    <span class="hl">Address:</span>
                                    <span
                                        class="text">1379 Shoreline Parkway, Mountain View, CA 94043, United States</span>
                                </li>
                                <li class="phone clearfix">
                                    <span class="hl">Phone:</span>
                                    <span class="text">+1 718-999-3939</span>
                                </li>
                                <li class="email clearfix">
                                    <span class="hl">E-mail:</span>
                                    <span class="text">contact@construction.com</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_spacer">
                            <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10"></div>
                        </div>

                        <div class="widget widget_socials">
                            <div class="socials">
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bottom -->
        <div id="bottom" class="clearfix style-1">
            <div id="bottom-bar-inner" class="wprt-container">
                <div class="bottom-bar-inner-wrap">

                    <div class="bottom-bar-content">
                        <div id="copyright">CONSTRUCTION TEMPLATE &copy; DESIGN BY BLOGWP.
                        </div><!-- /#copyright -->
                    </div><!-- /.bottom-bar-content -->

                    <div class="bottom-bar-menu">
                        <ul class="bottom-nav">
                            <li><a href="#">HISTORY</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">EVENTS</a></li>
                        </ul>
                    </div><!-- /.bottom-bar-menu -->
                </div>
            </div>
        </div>

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/animsition.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fitText.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fitText.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vegas.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/cube.portfolio.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>

@extends('layouts.front')
@section('header')
    @include('front.includes.header')
@endsection

@section('content')
    <div class="wprt-spacer" data-desktop="120" data-mobi="60" data-smobi="60" style="height:120px"></div>
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">{{$title}}</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="http://msca.az" title="Construction" rel="home" class="trail-begin">Əsas səhifə</a>
                            <span class="sep">/</span>
                            <span class="trail-end">{{$title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- GALLERY -->
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="wprt-galleries galleries w-770px" data-width="142" data-margin="15">
                                            <div id="wprt-slider" class="flexslider">

                                                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 400%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <li class="modify-images flex-active-slide" style="width: 770px; margin-right: 0px; float: left; display: block;">
                                                            <a class="zoom" href="http://msca.az/storage/16/ekin_sekil1.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                            <img style="height: 500px" src="http://msca.az/storage/16/ekin_sekil1.jpg" alt="image" draggable="false">
                                                        </li>
                                                        <li class="modify-images" style="width: 770px; margin-right: 0px; float: left; display: block;">
                                                            <a class="zoom" href="http://msca.az/storage/17/ekin_sekil2.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                            <img style="height: 500px" src="http://msca.az/storage/17/ekin_sekil2.jpg" alt="image" draggable="false">
                                                        </li>
                                                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-left"></i></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><i class="fa fa-angle-right"></i></a></li></ul></div>

                                            <div id="wprt-carousel" class="flexslider">

                                                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 400%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <li style="width: 142px; margin-right: 15px; float: left; display: block;" class="flex-active-slide">
                                                            <img src="http://msca.az/storage/16/ekin_sekil1.jpg" alt="image" draggable="false">
                                                        </li>
                                                        <li style="width: 142px; margin-right: 15px; float: left; display: block;">
                                                            <img src="http://msca.az/storage/17/ekin_sekil2.jpg" alt="image" draggable="false">
                                                        </li>
                                                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-left"></i></a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1"><i class="fa fa-angle-right"></i></a></li></ul></div>
                                        </div>
                                    </div><!-- /.col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40" style="height:0px"></div>

                                        <h3 class="line-height-normal margin-bottom-10">ƏTRAFLI MƏLUMAT</h3>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25" style="height:25px"></div>
                                        <p><span style="color: rgb(119, 119, 119);">Qeyri neft sektoru Azərbaycanın İqtisadi inkişafının prioritetinə çevrilib. Xüsusi ilə bura Kənd Təsərrüfatının inkişafını qeyd etmək olar. Torpaqların inkişafı üçün əlimizdən gələni edirik. Torpaqların inkişafı ölkəmizin məhsuldarlığını artırmaq üçün böyük rol oynayacaqdır. Respublika prezidentinin apardığı məqsəd-yönlü siyasəti nəticəsində formalaşan sağlam mühit digər sahələr kimi, özəl sektorda sürətli inkişafına təkan vermişdir.Bu baxımdan "Modern Style Construction Agro" MMC inkişaf etmiş şirkətlər kimi formalaşmışdır.</span></p>
                                        <div class="wprt-lines style-1 custom-4">
                                            <div class="line-1"></div>
                                        </div>

                                        <ul class="wprt-list style-2 accent-color margin-top-30 margin-bottom-25 custom-css">

                                        </ul>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
@endsection




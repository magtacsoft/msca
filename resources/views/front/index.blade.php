@extends('layouts.front')
@section('header')
    @include('front.includes.header')
@endsection

@section('content')

    <div id="hero-section" data-number="{{$data->count()}}"
         @foreach($data as $item)
         data-image-{{$loop->iteration}}="{{asset('uploads/' . $item->img)}}"
         @endforeach
         data-effect="fade">
        <div class="hero-content">
            <div class="hero-title scroll" data-min="28px" data-max="80px">
                <h1>WELCOME</h1>
                <h1>CONSTRUCTION</h1>
                <h1>WHAT WE DO</h1>
            </div>

            <div class="hero-text">
                <p>Our experience ensures that your projects will be done right and with the upmost professionalism.</p>
            </div>

            <div class="hero-button">
                <a class="wprt-button rounded-3px" href="#">LEARN MORE</a>
            </div>
        </div><!-- /.hero-content -->

        <a class="arrow scroll-target" href="#services-section"></a>
        <!-- change href value to ID of section you want to scroll down -->
    </div>

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">

                        <!-- WHY CHOOSE US -->
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"
                                             style="height:80px"></div>
                                    </div>

                                    <div class="col-md-6">
                                        <h2 class="line-height-normal margin-bottom-10">Haqqımızda</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"
                                             style="height:25px"></div>
                                        <p class="margin-bottom-25">
                                        </p>
                                       {!! $page['text'] !!}
                                        <p><br></p>
                                        <p>&nbsp;<strong><em>İdarə Heyətinin sədri: Anar E.Musayev</em></strong></p>
                                        <p></p>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                            <div id="wprt-slider" class="flexslider">
                                                <div class="flex-viewport"
                                                     style="overflow: hidden; position: relative;">
                                                    <ul class="index-logo slides"
                                                        style="width: 200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <li class="indexLogo flex-active-slide"
                                                            style="width: 570px; margin-right: 0px; float: left; display: block;">
                                                            <a class="zoom" href="{{asset('uploads/' . $page['img'])}}"><i
                                                                    class="fa fa-arrows-alt"></i></a>
                                                            <img src="{{asset('uploads/' . $page['img'])}}" alt="image"
                                                                 draggable="false">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="flex-direction-nav">
                                                    <li class="flex-nav-prev"><a class="flex-prev flex-disabled"
                                                                                 href="#" tabindex="-1"><i
                                                                class="fa fa-angle-left"></i></a></li>
                                                    <li class="flex-nav-next"><a class="flex-next flex-disabled"
                                                                                 href="#" tabindex="-1"><i
                                                                class="fa fa-angle-right"></i></a></li>
                                                </ul>
                                            </div>

                                            <div id="" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img src="{{asset('uploads/' . $page['img'])}}" alt="image">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"
                                             style="height:80px"></div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!-- TESTIMONIALS -->
                        <section class="wprt-section testiminials">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-6">
                                        <h2>OUR PARTNERS</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <div class="wprt-partner-grid has-outline col-3 gutter-10">
                                            <div class="partner-wrap clearfix">
                                                <div class="partner-row clearfix">
                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="{{asset('assets/img/partners/1.png')}}"
                                                                    alt="image"/></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="{{asset('assets/img/partners/2.png')}}"
                                                                    alt="image"/></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="{{asset('assets/img/partners/3.png')}}"
                                                                    alt="image"/></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->
                                                </div>

                                                <div class="partner-row clearfix">
                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="{{asset('assets/img/partners/4.png')}}"
                                                                    alt="image"/></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="{{asset('assets/img/partners/5.png"')}} alt="
                                                                    image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="{{asset('assets/img/partners/6.png')}}"
                                                                    alt="image"/></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->
                                                </div>
                                            </div><!-- /.partner-wrap -->
                                        </div><!-- /.wprt-partner-grid -->

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <h2>TESTIMONIALS</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <div
                                            class="wprt-testimonials has-outline arrow-style-2 has-arrows arrow60 arrow-light"
                                            data-layout="slider" data-column="1" data-column2="1" data-column3="1"
                                            data-column4="1" data-gaph="0" data-gapv="0">
                                            <div id="testimonials-wrap" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img
                                                                    src="{{asset('assets/img/testimonials/1.jpg')}}"
                                                                    alt="image"/></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning,
                                                                scheduling, management, and supervision resulted in
                                                                timely completion and a quality facility...Particularly
                                                                refreshing was the spirit of cooperation demonstrated by
                                                                your firm which served to minimize costly delays and
                                                                contract modifications.
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img
                                                                    src="{{asset('assets/img/testimonials/2.jpg')}}"
                                                                    alt="image"/></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning,
                                                                scheduling, management, and supervision resulted in
                                                                timely completion and a quality facility...Particularly
                                                                refreshing was the spirit of cooperation demonstrated by
                                                                your firm which served to minimize costly delays and
                                                                contract modifications.
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img
                                                                    src="{{asset('assets/img/testimonials/3.jpg')}}"
                                                                    alt="image"/></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning,
                                                                scheduling, management, and supervision resulted in
                                                                timely completion and a quality facility...Particularly
                                                                refreshing was the spirit of cooperation demonstrated by
                                                                your firm which served to minimize costly delays and
                                                                contract modifications.
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->
                                            </div><!-- /#service-wrap -->
                                        </div><!-- /.wprt-service -->
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>
    </div>
@endsection




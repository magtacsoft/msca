@extends('layouts.front')
@section('header')
    @include('front.includes.header')
@endsection

@section('content')
    <div id="hero-section" data-number="3" data-image-1="assets/img/slider/3.jpg" data-image-2="assets/img/slider/4.jpg" data-image-3="assets/img/slider/5.jpg" data-effect="fade">
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

        <a class="arrow scroll-target" href="#services-section"></a><!-- change href value to ID of section you want to scroll down -->
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
                                    <div class="col-md-6">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                        <h2>WHY CHOOSE US?</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <div class="wprt-toggle style-1">
                                            <h3 class="toggle-title">We have 30 plus years in the building industry</h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>

                                        <div class="wprt-toggle active style-1">
                                            <h3 class="toggle-title">Quality construction continues after the project</h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>

                                        <div class="wprt-toggle style-1">
                                            <h3 class="toggle-title">We use technology to do the job more quickly</h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>

                                        <div class="wprt-toggle style-1">
                                            <h3 class="toggle-title">Employees are continually trained on safety issues</h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                        <h2>ABOUT US</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                            <div id="wprt-slider" class="flexslider">
                                                <ul class="slides">
                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/1.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/1.jpg" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/2.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/2.jpg" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/3.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/3.jpg" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/4.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/4.jpg" alt="image" />
                                                    </li>
                                                </ul>
                                            </div>

                                            <div id="wprt-carousel" class="flexslider">
                                                <ul class="slides">
                                                    <li><img src="assets/img/gallery/1-s.jpg" alt="image"></li>
                                                    <li><img src="assets/img/gallery/2-s.jpg" alt="image"></li>
                                                    <li><img src="assets/img/gallery/3-s.jpg" alt="image"></li>
                                                    <li><img src="assets/img/gallery/4-s.jpg" alt="image"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
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
                                                            <a target="_blank" href="#"><img src="{{asset('assets/img/partners/1.png')}}" alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img src="{{asset('assets/img/partners/2.png')}}" alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img src="{{asset('assets/img/partners/3.png')}}" alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->
                                                </div>

                                                <div class="partner-row clearfix">
                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img src="{{asset('assets/img/partners/4.png')}}" alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img src="{{asset('assets/img/partners/5.png"')}} alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img src="{{asset('assets/img/partners/6.png')}}" alt="image" /></a>
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

                                        <div class="wprt-testimonials has-outline arrow-style-2 has-arrows arrow60 arrow-light" data-layout="slider" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-gaph="0" data-gapv="0">
                                            <div id="testimonials-wrap" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img src="{{asset('assets/img/testimonials/1.jpg')}}" alt="image" /></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning, scheduling, management, and supervision resulted in timely completion and a quality facility...Particularly refreshing was the spirit of cooperation demonstrated by your firm which served to minimize costly delays and contract modifications.</blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img src="{{asset('assets/img/testimonials/2.jpg')}}" alt="image" /></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning, scheduling, management, and supervision resulted in timely completion and a quality facility...Particularly refreshing was the spirit of cooperation demonstrated by your firm which served to minimize costly delays and contract modifications.</blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img src="{{asset('assets/img/testimonials/3.jpg')}}" alt="image" /></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning, scheduling, management, and supervision resulted in timely completion and a quality facility...Particularly refreshing was the spirit of cooperation demonstrated by your firm which served to minimize costly delays and contract modifications.</blockquote>
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




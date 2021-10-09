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
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1519.2199961792053!2d49.871755803028535!3d40.3991025977154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d880a0d02e1%3A0xb43be80f2fffd5de!2zSGFjxLEgTcmZbW3JmWRvdg!5e0!3m2!1sru!2s!4v1632398393449!5m2!1sru!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40" style="height:50px"></div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="wprt-information">
                                            <h4 class="margin-bottom-15">BİZƏ ZƏNG EDİN</h4>
                                            <p>ƏLAQƏ MƏLUMATLARI</p>
                                            <ul class="style-2">
                                                <li class="address">
                                                    <span class="hl">Ünvan:</span>
                                                    <span class="text">Bakı şəhəri, Nərimanov rayonu,Tarzən Hacı Məmmədov ev-9</span>
                                                </li>
                                                <li class="phone">
                                                    <span class="hl">Əlaqə:</span>
                                                    <span class="text">+994 12 594 97 22</span>
                                                </li>
                                                <li class="email">
                                                    <span class="hl">E-mail:</span>
                                                    <span class="text">info@msca.az</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30" style="height:0px"></div>
                                    </div>

                                    <div class="col-md-8">
                                        <h4 class="margin-bottom-15">ƏLAQƏ MƏLUMATLARINIZI DAXİL EDİN</h4>
                                        <form action="http://msca.az/contact" method="post" class="contact-form wpcf7-form">
                                            <div class="wprt-contact-form-1">
                                                <input type="hidden" name="_token" value="0jh3DpWr3mVd9NFmCB7YRYqLrKhCMhLphCayx3wu">                                                <span class="wpcf7-form-control-wrap name">
												<input title="" type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="ad" required="">
											</span>
                                                <span class="wpcf7-form-control-wrap email">
												<input title="" type="email" tabindex="2" id="email" name="email" value="" class="wpcf7-form-control" placeholder="email" required="">
											</span>
                                                <span class="wpcf7-form-control-wrap phone">
												<input title="" type="text" tabindex="3" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="telefon nömrəsi">
											</span>
                                                <span class="wpcf7-form-control-wrap subject">
												<input title="" type="text" tabindex="4" id="subject" name="subject" value="" class="wpcf7-form-control" placeholder="mövzu" required="">
											</span>
                                                <span class="wpcf7-form-control-wrap message">
												<textarea title="" name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="ismarıc" required=""></textarea>
											</span>
                                                <div class="wrap-submit">
                                                    <input type="submit" value="MESAJ GÖNDƏR" class="submit wpcf7-form-control wpcf7-submit" id="submit">
                                                </div>
                                            </div>
                                        </form>
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




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
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>

                                        <h2 class="text-center font-size-28 margin-bottom-10">LAYİHƏLƏR</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25" style="height:25px"></div>

                                        <p class="wprt-subtitle">TƏQDİM ETDİYİMİZ İŞLƏR</p>

                                        <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="30" style="height:43px"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-project" data-layout="grid" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                            <div id="projects" class="cbp cbp-caption-active cbp-caption- cbp-ready" style="height: 845px;"><div class="cbp-wrapper-outer"><div class="cbp-wrapper">
                                                        <div class="cbp-item architecture garden interior" style="width: 370px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
                                                                <div class="project-item">
                                                                    <div class="inner">
                                                                        <div class="grid">
                                                                            <figure class="effect-honey">
                                                                                <img src="http://msca.az/storage/BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg" alt="image">
                                                                                <figcaption>
                                                                                    <a class="zoom-photo project-zoom cbp-lightbox" href="http://msca.az/storage/BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg" data-title="Qravi qatının kipləndirilməsi">
                                                                                        <i class="fa fa-arrows-alt"></i>
                                                                                    </a>
                                                                                    <div>
                                                                                        <p>
                                                                                            <b>Qravi qatının kipləndirilməsi</b><br>
                                                                                            Kürdəmir, Sabirabad və Saatlı rayonlarında mövcud olan MKT-ların ərazisinə qravi qatının verilib kipləndirilməsi
                                                                                        </p>
                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div></div><!--/.cbp-item -->
                                                        <div class="cbp-item architecture garden interior" style="width: 370px; left: 400px; top: 0px;"><div class="cbp-item-wrapper">
                                                                <div class="project-item">
                                                                    <div class="inner">
                                                                        <div class="grid">
                                                                            <figure class="effect-honey">
                                                                                <img src="http://msca.az/storage/8gSvzPEWP4ZhVE9sSXKSohjReuCqzoFWZZvhMxPl.jpg" alt="image">
                                                                                <figcaption>
                                                                                    <a class="zoom-photo project-zoom cbp-lightbox" href="http://msca.az/storage/8gSvzPEWP4ZhVE9sSXKSohjReuCqzoFWZZvhMxPl.jpg" data-title="&quot;Gp alpha green house&quot;">
                                                                                        <i class="fa fa-arrows-alt"></i>
                                                                                    </a>
                                                                                    <div>
                                                                                        <p>
                                                                                            <b>"Gp alpha green house"</b><br>
                                                                                            "Gp alpha green house" məxsus istixana kompleksində əsas İPƏK yolundan 2km yolun əsaslı çəlilişi, 6 metr uzunluğunda 1250 mm diametrli boru yerləşdirilərək avtomobil körpüsünün tikintisi
                                                                                        </p>
                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div></div><!--/.cbp-item -->
                                                        <div class="cbp-item architecture garden interior" style="width: 370px; left: 800px; top: 0px;"><div class="cbp-item-wrapper">
                                                                <div class="project-item">
                                                                    <div class="inner">
                                                                        <div class="grid">
                                                                            <figure class="effect-honey">
                                                                                <img src="http://msca.az/storage/fjDeFGz2cTSBlHF8JlQsiEBjwxAccQapaNwuLPUh.jpg" alt="image">
                                                                                <figcaption>
                                                                                    <a class="zoom-photo project-zoom cbp-lightbox" href="http://msca.az/storage/fjDeFGz2cTSBlHF8JlQsiEBjwxAccQapaNwuLPUh.jpg" data-title="&quot;Gp alpha green house&quot;">
                                                                                        <i class="fa fa-arrows-alt"></i>
                                                                                    </a>
                                                                                    <div>
                                                                                        <p>
                                                                                            <b>"Gp alpha green house"</b><br>
                                                                                            "Gp alpha green house" məxsus istixana kompleksində 2500 tonluq su çəninin tikilişi
                                                                                        </p>
                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div></div><!--/.cbp-item -->
                                                        <div class="cbp-item architecture garden interior" style="width: 370px; left: 400px; top: 305px;"><div class="cbp-item-wrapper">
                                                                <div class="project-item">
                                                                    <div class="inner">
                                                                        <div class="grid">
                                                                            <figure class="effect-honey">
                                                                                <img src="http://msca.az/storage/Ye3CpwwQIwxNHZv2iTXvUOHWqjFU6sztYU8qtUd4.jpg" alt="image">
                                                                                <figcaption>
                                                                                    <a class="zoom-photo project-zoom cbp-lightbox" href="http://msca.az/storage/Ye3CpwwQIwxNHZv2iTXvUOHWqjFU6sztYU8qtUd4.jpg" data-title="Axtaçı MKT">
                                                                                        <i class="fa fa-arrows-alt"></i>
                                                                                    </a>
                                                                                    <div>
                                                                                        <p>
                                                                                            <b>Axtaçı MKT</b><br>
                                                                                            Axtaçı MKT və Pambıq məntəqələrinin ərazisində asfalt örtüyünün əsalı çəkilişi
                                                                                        </p>
                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div></div><!--/.cbp-item -->
                                                        <div class="cbp-item architecture garden interior" style="width: 370px; left: 800px; top: 305px;"><div class="cbp-item-wrapper">
                                                                <div class="project-item">
                                                                    <div class="inner">
                                                                        <div class="grid">
                                                                            <figure class="effect-honey">
                                                                                <img src="http://msca.az/storage/G22dpsC9jF6Ioj50pkghEny3uXU7Hv76y5KzORXs.jpg" alt="image">
                                                                                <figcaption>
                                                                                    <a class="zoom-photo project-zoom cbp-lightbox" href="http://msca.az/storage/G22dpsC9jF6Ioj50pkghEny3uXU7Hv76y5KzORXs.jpg" data-title="GP Alpha">
                                                                                        <i class="fa fa-arrows-alt"></i>
                                                                                    </a>
                                                                                    <div>
                                                                                        <p>
                                                                                            <b>GP Alpha</b><br>
                                                                                            GP Alpha greean house Istixana kompleksinin quraşdırılması
                                                                                        </p>
                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div></div><!--/.cbp-item -->
                                                        <div class="cbp-item architecture garden interior" style="width: 370px; left: 0px; top: 420px;"><div class="cbp-item-wrapper">
                                                                <div class="project-item">
                                                                    <div class="inner">
                                                                        <div class="grid">
                                                                            <figure class="effect-honey">
                                                                                <img src="http://msca.az/storage/xyNYsgHQRmqQue2ogRdxYfaIfZPoWfuzJGoUFJ0Y.jpg" alt="image">
                                                                                <figcaption>
                                                                                    <a class="zoom-photo project-zoom cbp-lightbox" href="http://msca.az/storage/xyNYsgHQRmqQue2ogRdxYfaIfZPoWfuzJGoUFJ0Y.jpg" data-title="Grand Hayat">
                                                                                        <i class="fa fa-arrows-alt"></i>
                                                                                    </a>
                                                                                    <div>
                                                                                        <p>
                                                                                            <b>Grand Hayat</b><br>
                                                                                            Grand Hayat
                                                                                        </p>
                                                                                    </div>
                                                                                </figcaption>
                                                                            </figure>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div></div><!--/.cbp-item -->
                                                    </div></div></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-pagination clearfix">
                                            <ul class="page-numbers">

                                                <li><a class="next page-numbers" href="javascript:void(0)"><span class="fa fa-angle-left"></span></a></li>





                                                <li><span class="page-numbers current">1</span></li>
                                                <li><a class="page-numbers" href="http://msca.az/projects?page=2">2</a></li>


                                                <li><a class="next page-numbers" href="http://msca.az/projects?page=2"><span class="fa fa-angle-right"></span></a></li>
                                            </ul>


                                        </div>

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




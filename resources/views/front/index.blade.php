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
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <h2>LAYİHƏLƏR</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40" style="height:50px"></div>
                                        <div class="splidejs splide splide--slide splide--ltr splide--draggable is-active" id="splide02" style="visibility: visible;">
                                            <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide02-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide02-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button></div><div class="splide__track" id="splide02-track">
                                                <ul class="splide__list" id="splide02-list" style="transform: translateX(0px);">
                                                    <li class="splide__slide is-active is-visible" id="splide02-slide01" aria-hidden="false" tabindex="0" style="width: 390px;">
                                                        <div class="cbp-item architecture garden interior">
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
                                                        </div><!--/.cbp-item -->
                                                    </li>
                                                    <li class="splide__slide is-visible" id="splide02-slide02" aria-hidden="false" tabindex="0" style="width: 390px;">
                                                        <div class="cbp-item architecture garden interior">
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
                                                        </div><!--/.cbp-item -->
                                                    </li>
                                                    <li class="splide__slide is-visible" id="splide02-slide03" aria-hidden="false" tabindex="0" style="width: 390px;">
                                                        <div class="cbp-item architecture garden interior">
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
                                                        </div><!--/.cbp-item -->
                                                    </li>
                                                    <li class="splide__slide" id="splide02-slide04" style="width: 390px;">
                                                        <div class="cbp-item architecture garden interior">
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
                                                        </div><!--/.cbp-item -->
                                                    </li>
                                                    <li class="splide__slide" id="splide02-slide05" style="width: 390px;">
                                                        <div class="cbp-item architecture garden interior">
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
                                                        </div><!--/.cbp-item -->
                                                    </li>
                                                    <li class="splide__slide" id="splide02-slide06" style="width: 390px;">
                                                        <div class="cbp-item architecture garden interior">
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
                                                        </div><!--/.cbp-item -->
                                                    </li>
                                                    <li class="splide__slide" id="splide02-slide07" style="width: 390px;">
                                                        <div class="cbp-item architecture garden interior">
                                                            <div class="project-item">
                                                                <div class="inner">
                                                                    <div class="grid">
                                                                        <figure class="effect-honey">
                                                                            <img src="http://msca.az/storage/aiV3dZCGvHkIKNrXjSfE8m0nRrrBX3chd14QGaVe.jpg" alt="image">
                                                                            <figcaption>
                                                                                <a class="zoom-photo project-zoom cbp-lightbox" href="http://msca.az/storage/aiV3dZCGvHkIKNrXjSfE8m0nRrrBX3chd14QGaVe.jpg" data-title="Ibrahim-Q MTK">
                                                                                    <i class="fa fa-arrows-alt"></i>
                                                                                </a>
                                                                                <div>
                                                                                    <p>
                                                                                        <b>Ibrahim-Q MTK</b><br>
                                                                                        Ibrahim-Q MTK
                                                                                    </p>
                                                                                </div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div><!--/.cbp-item -->
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="splide__pagination"><li><button class="splide__pagination__page is-active" type="button" aria-current="true" aria-controls="splide02-slide01 splide02-slide02 splide02-slide03" aria-label="Go to page 1"></button></li><li><button class="splide__pagination__page" type="button" aria-controls="splide02-slide04 splide02-slide05 splide02-slide06" aria-label="Go to page 2"></button></li><li><button class="splide__pagination__page" type="button" aria-controls="splide02-slide05 splide02-slide06 splide02-slide07" aria-label="Go to page 3"></button></li></ul></div>
                                        <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40" style="height:0px"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="wprt-section testiminials">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <h2>Partnyorlarımız</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40" style="height:50px"></div>
                                        <div class="splide splideJs2 splide--slide splide--ltr splide--draggable is-active" id="splide01" style="visibility: visible;">
                                            <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide01-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide01-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button></div><div class="splide__track" id="splide01-track">
                                                <ul class="splide__list" id="splide01-list" style="transform: translateX(0px);">
                                                    <li class="splide__slide is-active is-visible" id="splide01-slide01" aria-hidden="false" tabindex="0" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://www.nwconstruction.com/az/" target="_blank">
                                                                <img src="http://msca.az/storage/785AP3sXBsJaUiK4r081jrjqABsUsG9fbCO8IhyS.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide is-visible" id="splide01-slide02" aria-hidden="false" tabindex="0" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://www.akkord.az/" target="_blank">
                                                                <img src="http://msca.az/storage/t45wiw9qjxTGmYeuwrtU3iHvMQyd7Oro1Hylry9n.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide is-visible" id="splide01-slide03" aria-hidden="false" tabindex="0" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://www.hilalelektrik.az/" target="_blank">
                                                                <img src="http://msca.az/storage/r0vnE8mXWGV6qVzNKhhSbBRiAKSg755KtEeX9OAh.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide is-visible" id="splide01-slide04" aria-hidden="false" tabindex="0" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://kbt.az/" target="_blank">
                                                                <img src="http://msca.az/storage/2cM178DOH6hjpd1Lundl8lC6J7kLEpLeLuQkzVU6.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide05" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="http://mrfix.az/az/" target="_blank">
                                                                <img src="http://msca.az/storage/5egbEL7GzAKD6y5PQKOYfRWPbKbeWDsVBEcWXkIV.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide06" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="" target="_blank">
                                                                <img src="http://msca.az/storage/BurLsdblmkPkxiVRjVN4kkNkcR7ZozsDjOiPj4hU.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide07" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="" target="_blank">
                                                                <img src="http://msca.az/storage/YdVKPCQ59OmNmBwVry6eGQxzvn0CXfmYtjG6EeuC.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide08" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://www.pashaconstruction.com/" target="_blank">
                                                                <img src="http://msca.az/storage/HRALjxypBAehGfDRB2tGolUqeslNgm8DDUO3D22y.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide09" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://ilkin-n.az/" target="_blank">
                                                                <img src="http://msca.az/storage/mgyXR3z8B3nXRx0vjY2KR5469oGrsFiOl0C5rsLh.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide10" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://www.akabe.az/az/" target="_blank">
                                                                <img src="http://msca.az/storage/LYKBSP0sK1Qv79RwapZKBuEwhdVqjixMnRgCkGBh.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide11" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://eldost.az/" target="_blank">
                                                                <img src="http://msca.az/storage/J66UZ9lssBgzP33Q9USd4geCPZdd0bI8yoGj8wDf.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide12" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="" target="_blank">
                                                                <img src="http://msca.az/storage/uUhTMaeaeGo0B4PnznnSdG272Y9RUDGeX6AhvlbU.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide" id="splide01-slide13" style="width: 292.5px;">
                                                        <div class="partners-cont">
                                                            <a href="https://gilanholding.com/" target="_blank">
                                                                <img src="http://msca.az/storage/l16rICH96CymjaMVOLDmx9FC8AjV4B2fQMRZhcay.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="splide__pagination"><li><button class="splide__pagination__page is-active" type="button" aria-current="true" aria-controls="splide01-slide01 splide01-slide02 splide01-slide03 splide01-slide04" aria-label="Go to page 1"></button></li><li><button class="splide__pagination__page" type="button" aria-controls="splide01-slide05 splide01-slide06 splide01-slide07 splide01-slide08" aria-label="Go to page 2"></button></li><li><button class="splide__pagination__page" type="button" aria-controls="splide01-slide09 splide01-slide10 splide01-slide11 splide01-slide12" aria-label="Go to page 3"></button></li><li><button class="splide__pagination__page" type="button" aria-controls="splide01-slide10 splide01-slide11 splide01-slide12 splide01-slide13" aria-label="Go to page 4"></button></li></ul></div>
                                        <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40" style="height:0px"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>
    </div>
@endsection




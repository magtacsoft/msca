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
                        <section class="wprt-section services">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
                                        <h2 class="text-center margin-bottom-10">Xidmətlər</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40" style="height:50px"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30" style="height:50px"></div>
                                            @foreach($service as $item)
                                            <div class="col-md-4">
                                                <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                                    <div class="icon-wrap">
                                                        <i class="{{$item->icon}}"></i>
                                                    </div>
                                                    <div class="content-wrap">
                                                        <h3 class="dd-title font-size-18"><span>{{$item->title}}</span></h3>
                                                        <p>{{$item->text}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach




                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
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




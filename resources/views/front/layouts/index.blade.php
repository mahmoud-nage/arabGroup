@include('front.layouts.header')

    <body>
        @include('front.layouts.nav1')
        @include('front.layouts.nav2')
        @include('front.layouts.nav3')

    
                <div id="page-preloader" class="visible">
                    <div class="preloader">
                        <div id="loading-center-absolute">
                            <div class="object" id="object_one"></div>
                        </div>
                    </div>
                </div>
                <div id="common-home" class="container">
                    <div class="row">
                        <div id="content" class="col-sm-12">
                           {{-- // slider --}}
                           @include('front.layouts.slider')
                            <div>
                                <div class="service">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <ul class="list-inline">
                                                    <li class="del1"><svg width="40px" height="40px"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#gift"></use> </svg></li>
                                                    <li class="se1 text-xs-left">
                                                        <h4>special gift cards</h4>
                                                        <p>give a perfect gift</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <ul class="sborder list-inline">
                                                    <li class="del4"><svg width="40px" height="40px"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pay"></use> </svg></li>
                                                    <li class="se1  text-xs-left">
                                                        <h4>secure payment</h4>
                                                        <p>100% secure payment</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <ul class="sborder list-inline">
                                                    <li class="del2"><svg width="40px" height="40px"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#support"></use> </svg></li>
                                                    <li class="se1  text-xs-left">
                                                        <h4>24/7 support</h4>
                                                        <p>online support 24/7</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @include('front.layouts.featuresslider')
                            @include('front.layouts.viewsslider')
                            @include('front.layouts.latestsslider')

                            <div class="offerbanner">
                                <a href="#">
                                    <img src="{{url('/front')}}/image/cache/catalog/offerbanner/1158X200-1158x200.jpg" alt="banner" class="img-responsive" />
                                </a>
                                <p class="inspire_offer_hover">
                                    <a class="bannerzoomicon" title="Click to view Full Image " href="{{url('/front')}}/image/cache/catalog/offerbanner/1158X200-1158x200.jpg" data-lightbox="example-set"></a>
                                </p>

                            </div>

                            <div class="">
                                <div class="logo-slider">
                                    <div id="carousel0" class="owl-carousel owl-theme">

                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-8-150x100.png" alt="Harley Davidson" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-8-150x100.png" alt="Burger King" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-7-150x100.png" alt="Sony" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-6-150x100.png" alt="Coca Cola" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-58-150x100.png" alt="RedBull" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-5-150x100.png" alt="Dell" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/2-150x100.png" alt="Starbucks" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/1-150x100.png" alt="Nintendo" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-2-150x100.png" alt="Disney" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/brand-4-150x100.png" alt="NFL" class="center-block img-responsive" /></a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><img src="{{url('/front')}}/image/cache/catalog/brand/1-150x100.png" alt="Canon" class="center-block img-responsive" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#carousel0").owlCarousel({
                                        itemsCustom: [
                                            [0, 2],
                                            [600, 4],
                                            [768, 5],
                                            [992, 5],
                                            [1200, 6]
                                        ],
                                        autoPlay: 2500,
                                        loop: true,
                                        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                        navigation: false,
                                        pagination: false
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
@include('front.layouts.footer')
                <a href="#" id="scroll" title="Scroll to Top" style="display: block;">
                    <i class="fa fa-angle-up"></i>
                </a>


                <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
    </body>
    <!-- Mirrored from templatetasarim.com/opencart/Books/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 26 Feb 2020 10:16:42 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <!-- /Added by HTTrack -->

    </html>
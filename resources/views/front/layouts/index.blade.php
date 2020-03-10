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

                            <div class="featuredbanner hidden-xs hidden-sm">
                                <div class=" banner-effect">
                                    <a href="#">
                                        <img src="{{url('/front')}}/image/cache/catalog/category%20banner/193X268-4-213x288.jpg" alt="Featured banner" class="img-responsive" />
                                    </a>
                                </div>
                            </div>

                            <h3 class="home-heading"><span>Featured</span></h3>
                            <div class="row allrow">
                                <div class="col-lg-2 col-md-2 featuredbannerp allleftb"> </div>
                                <div class="pro-nepr col-lg-10 col-md-10 allrightp">
                                    <div class="row promar">
                                        <div id="feature" class="owl-theme owl-carousel">

                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexbb02.html?route=product/product&amp;product_id=42"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-02-205x205.jpg" alt="History of 1984" title="History of 1984" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexbb02.html?route=product/product&amp;product_id=42"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-05-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>

                                                        <!-- End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexbb02.html?route=product/product&amp;product_id=42">History of 1984</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('42');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-03-205x205.jpg" alt="counseling  insight" title="counseling  insight" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>

                                                        <!-- End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexd21c.html?route=product/product&amp;product_id=47">counseling  insight</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$242.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('47');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index6320.html?route=product/product&amp;product_id=28"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" alt="affordable housing" title="affordable housing" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index6320.html?route=product/product&amp;product_id=28"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>

                                                        <!-- End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index6320.html?route=product/product&amp;product_id=28">affordable housing</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$242.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('28');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexd97b.html?route=product/product&amp;product_id=83"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-04-205x205.jpg" alt="Human psychology" title="Human psychology" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexd97b.html?route=product/product&amp;product_id=83"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-12-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>

                                                        <!-- End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexd97b.html?route=product/product&amp;product_id=83">Human psychology</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $1,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('83');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('83');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('83');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index2963.html?route=product/product&amp;product_id=62"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="Strong father" title="Strong father" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index2963.html?route=product/product&amp;product_id=62"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-09-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>

                                                        <!-- End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index2963.html?route=product/product&amp;product_id=62">Strong father</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $2,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('62');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('62');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('62');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexf073.html?route=product/product&amp;product_id=30"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" alt="where the crawdads sing" title="where the crawdads sing" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexf073.html?route=product/product&amp;product_id=30"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>

                                                        <!-- End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexf073.html?route=product/product&amp;product_id=30">where the crawdads sing</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('30');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index92f6.html?route=product/product&amp;product_id=91"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-01-205x205.jpg" alt="Casio EX099 Edifice Watch - For Men" title="Casio EX099 Edifice Watch - For Men" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index92f6.html?route=product/product&amp;product_id=91"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>

                                                        <!-- End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index92f6.html?route=product/product&amp;product_id=91">Casio EX099 Edifice Watch - For Men</a></h4>
                                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price">
                                                                $9,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('91');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('91');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('91');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#feature").owlCarousel({
                                        itemsCustom: [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 4],
                                            [992, 4],
                                            [1200, 5],
                                            [1410, 5]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                        navigation: true,
                                        pagination: false
                                    });
                                });
                            </script>
                            <div class="latestbanner hidden-xs hidden-sm">
                                <div class=" banner-effect">
                                    <a href="#">
                                        <img src="{{url('/front')}}/image/cache/catalog/category%20banner/193X268-1-213x288.jpg" alt="banner" class="img-responsive" />
                                    </a>
                                </div>
                            </div>

                            <h3 class="home-heading"><span>Latest</span></h3>
                            <div class="row allrow">
                                <div class="col-lg-2 col-md-3 latestbannerp allleftb"> </div>
                                <div class="pro-nepr col-lg-10 col-md-9 allrightp">
                                    <div class="row promar">
                                        <div id="latest" class="owl-theme owl-carousel">

                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexfbb9.html?route=product/product&amp;product_id=96"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-10-205x205.jpg" alt="Lotus Naturalblend Translucent Loose Powder" title="Lotus Naturalblend Translucent Loose Powder" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexfbb9.html?route=product/product&amp;product_id=96"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-01-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexfbb9.html?route=product/product&amp;product_id=96">Lotus Naturalblend Translucent Loose Powder</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $999.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('96');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('96');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('96');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index8deb.html?route=product/product&amp;product_id=95"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-12-205x205.jpg" alt="Maybelline Clear Glow BB Cream Concealer  (Radiance 02)" title="Maybelline Clear Glow BB Cream Concealer  (Radiance 02)" class="img-responsive"
                                                            /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index8deb.html?route=product/product&amp;product_id=95"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-05-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index8deb.html?route=product/product&amp;product_id=95">Maybelline Clear Glow BB Cream Concealer  (Radiance 02)</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $5,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('95');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('95');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('95');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index971f.html?route=product/product&amp;product_id=94"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-17-205x205.jpg" alt="DovGeneral Knowledge 2020" title="DovGeneral Knowledge 2020" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index971f.html?route=product/product&amp;product_id=94"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-15-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index971f.html?route=product/product&amp;product_id=94">DovGeneral Knowledge 2020</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $999.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('94');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('94');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('94');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index1d1e.html?route=product/product&amp;product_id=93"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" alt="Samanya Gyan 2020" title="Samanya Gyan 2020" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index1d1e.html?route=product/product&amp;product_id=93"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-15-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index1d1e.html?route=product/product&amp;product_id=93">Samanya Gyan 2020</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$200.00</span> <span class="price-old">$500.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('93');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('93');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('93');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index7763.html?route=product/product&amp;product_id=92"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-02-205x205.jpg" alt="Maxima 38743LMGI Watch - For Men" title="Maxima 38743LMGI Watch - For Men" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index7763.html?route=product/product&amp;product_id=92"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-10-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index7763.html?route=product/product&amp;product_id=92">Maxima 38743LMGI Watch - For Men</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $803.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('92');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('92');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('92');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index92f6.html?route=product/product&amp;product_id=91"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-01-205x205.jpg" alt="Casio EX099 Edifice Watch - For Men" title="Casio EX099 Edifice Watch - For Men" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index92f6.html?route=product/product&amp;product_id=91"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index92f6.html?route=product/product&amp;product_id=91">Casio EX099 Edifice Watch - For Men</a></h4>
                                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price">
                                                                $9,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('91');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('91');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('91');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index4d70.html?route=product/product&amp;product_id=90"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-08-205x205.jpg" alt="Timex TW00ZR145 Watch - For Men" title="Timex TW00ZR145 Watch - For Men" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index4d70.html?route=product/product&amp;product_id=90"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-07-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index4d70.html?route=product/product&amp;product_id=90">Timex TW00ZR145 Watch - For Men</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $1,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('90');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('90');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('90');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index5fea.html?route=product/product&amp;product_id=89"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-16-205x205.jpg" alt="Manorama Yearbook 2020 (English)" title="Manorama Yearbook 2020 (English)" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index5fea.html?route=product/product&amp;product_id=89"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index5fea.html?route=product/product&amp;product_id=89">Manorama Yearbook 2020 (English)</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $999.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('89');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('89');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('89');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexa928.html?route=product/product&amp;product_id=88"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-10-205x205.jpg" alt="Roadster Men Charcoal Grey Regular Fit Solid Casual Shirt" title="Roadster Men Charcoal Grey Regular Fit Solid Casual Shirt" class="img-responsive"
                                                            /></a>
                                                        <!-- insp Images Start -->
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexa928.html?route=product/product&amp;product_id=88">Roadster Men Charcoal Grey Regular Fit Solid Casual Shirt</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $1,100.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('88');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('88');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('88');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index915d.html?route=product/product&amp;product_id=87"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-15-205x205.jpg" alt="Jack &amp; Jones Men Yellow Linen Slim Fit Printed Casual Shirt" title="Jack &amp; Jones Men Yellow Linen Slim Fit Printed Casual Shirt"
                                                                class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index915d.html?route=product/product&amp;product_id=87">Jack &amp; Jones Men Yellow Linen Slim Fit Printed Casual Shirt</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $999.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('87');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('87');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('87');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexef8e.html?route=product/product&amp;product_id=86"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-15-205x205.jpg" alt="Jack &amp; Jones Grey &amp; White Checked Slim Fit Casual Shirt" title="Jack &amp; Jones Grey &amp; White Checked Slim Fit Casual Shirt"
                                                                class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexef8e.html?route=product/product&amp;product_id=86">Jack &amp; Jones Grey &amp; White Checked Slim Fit Casual Shirt</a></h4>
                                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price">
                                                                $5,555.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('86');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('86');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('86');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index762e.html?route=product/product&amp;product_id=85"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="The Secret Garden" title="The Secret Garden" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index762e.html?route=product/product&amp;product_id=85"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-12-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index762e.html?route=product/product&amp;product_id=85">The Secret Garden</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$200.00</span> <span class="price-old">$1,000.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('85');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('85');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('85');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index684a.html?route=product/product&amp;product_id=84"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" alt="The Big Fashion movement " title="The Big Fashion movement " class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index684a.html?route=product/product&amp;product_id=84">The Big Fashion movement </a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $12,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('84');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('84');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('84');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexd97b.html?route=product/product&amp;product_id=83"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-04-205x205.jpg" alt="Human psychology" title="Human psychology" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexd97b.html?route=product/product&amp;product_id=83"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-12-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexd97b.html?route=product/product&amp;product_id=83">Human psychology</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $1,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('83');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('83');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('83');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index1be3.html?route=product/product&amp;product_id=82"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-10-205x205.jpg" alt="Instafab Boys Graphic Print Polyester T Shirt" title="Instafab Boys Graphic Print Polyester T Shirt" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index1be3.html?route=product/product&amp;product_id=82"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-09-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index1be3.html?route=product/product&amp;product_id=82">Instafab Boys Graphic Print Polyester T Shirt</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $2,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('82');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('82');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('82');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index1918.html?route=product/product&amp;product_id=81"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="Instafab Boys Solid Polyester T Shirt" title="Instafab Boys Solid Polyester T Shirt" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index1918.html?route=product/product&amp;product_id=81"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index1918.html?route=product/product&amp;product_id=81">Instafab Boys Solid Polyester T Shirt</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $590.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('81');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('81');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('81');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index5cdd.html?route=product/product&amp;product_id=80"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="Women's Nighty with Robe  (Maroon)" title="Women's Nighty with Robe  (Maroon)" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index5cdd.html?route=product/product&amp;product_id=80">Women's Nighty with Robe  (Maroon)</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $80.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('80');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('80');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('80');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index6ab1.html?route=product/product&amp;product_id=79"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="You Forever Women's Robe  (Blue)" title="You Forever Women's Robe  (Blue)" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index6ab1.html?route=product/product&amp;product_id=79">You Forever Women's Robe  (Blue)</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $100.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('79');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('79');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('79');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index36b3.html?route=product/product&amp;product_id=78"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-15-205x205.jpg" alt="The Complete Novel of Sherlock Holmes" title="The Complete Novel of Sherlock Holmes" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index36b3.html?route=product/product&amp;product_id=78"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-09-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index36b3.html?route=product/product&amp;product_id=78">The Complete Novel of Sherlock Holmes</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $1,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('78');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('78');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('78');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index8914.html?route=product/product&amp;product_id=77"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" alt="Silver Organisation Women's Nighty" title="Silver Organisation Women's Nighty" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index8914.html?route=product/product&amp;product_id=77">Silver Organisation Women's Nighty</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $100.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('77');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('77');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('77');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#latest").owlCarousel({
                                        itemsCustom: [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 4],
                                            [992, 4],
                                            [1200, 5],
                                            [1410, 5]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                        navigation: true,
                                        pagination: false
                                    });
                                });
                            </script>

                            <div class="bestbanner hidden-xs hidden-sm">
                                <div class=" banner-effect">
                                    <a href="#">
                                        <img src="{{url('/front')}}/image/cache/catalog/category%20banner/193X268-3-213x288.jpg" alt="banner" class="img-responsive" />
                                    </a>
                                </div>
                            </div>

                            <h3 class="home-heading"><span>Bestsellers</span></h3>
                            <div class="row allrow">
                                <div class="col-lg-2 col-md-3 bestbannerp allleftb"> </div>
                                <div class="pro-nepr col-lg-10 col-md-9 allrightp">
                                    <div class="row promar">
                                        <div id="best" class="owl-theme owl-carousel">

                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-03-205x205.jpg" alt="counseling  insight" title="counseling  insight" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexd21c.html?route=product/product&amp;product_id=47">counseling  insight</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$242.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('47');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexc21e.html?route=product/product&amp;product_id=34"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-01-205x205.jpg" alt="iPod Shuffle" title="iPod Shuffle" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexc21e.html?route=product/product&amp;product_id=34"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-04-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexc21e.html?route=product/product&amp;product_id=34">iPod Shuffle</a></h4>
                                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price">
                                                                $118,802.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('34');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('34');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('34');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index2963.html?route=product/product&amp;product_id=62"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="Strong father" title="Strong father" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index2963.html?route=product/product&amp;product_id=62"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-09-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index2963.html?route=product/product&amp;product_id=62">Strong father</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $2,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('62');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('62');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('62');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexd97b.html?route=product/product&amp;product_id=83"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-04-205x205.jpg" alt="Human psychology" title="Human psychology" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexd97b.html?route=product/product&amp;product_id=83"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-12-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexd97b.html?route=product/product&amp;product_id=83">Human psychology</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $1,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('83');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('83');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('83');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexf073.html?route=product/product&amp;product_id=30"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" alt="where the crawdads sing" title="where the crawdads sing" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexf073.html?route=product/product&amp;product_id=30"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexf073.html?route=product/product&amp;product_id=30">where the crawdads sing</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('30');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexa17e.html?route=product/product&amp;product_id=32"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-04-205x205.jpg" alt="iPod Touch" title="iPod Touch" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexa17e.html?route=product/product&amp;product_id=32"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexa17e.html?route=product/product&amp;product_id=32">iPod Touch</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $122.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('32');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('32');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index531d.html?route=product/product&amp;product_id=45"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" alt="MacBook Pro" title="MacBook Pro" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index531d.html?route=product/product&amp;product_id=45"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index531d.html?route=product/product&amp;product_id=45">MacBook Pro</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $2,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('45');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('45');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index8deb.html?route=product/product&amp;product_id=95"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-12-205x205.jpg" alt="Maybelline Clear Glow BB Cream Concealer  (Radiance 02)" title="Maybelline Clear Glow BB Cream Concealer  (Radiance 02)" class="img-responsive"
                                                            /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index8deb.html?route=product/product&amp;product_id=95"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-05-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index8deb.html?route=product/product&amp;product_id=95">Maybelline Clear Glow BB Cream Concealer  (Radiance 02)</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                $5,000.00
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('95');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('95');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('95');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#best").owlCarousel({
                                        itemsCustom: [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 4],
                                            [992, 4],
                                            [1200, 5],
                                            [1410, 5]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                        navigation: true,
                                        pagination: false
                                    });
                                });
                            </script>

                            <div class="specialbanner hidden-xs hidden-sm">
                                <div class=" banner-effect">
                                    <a href="#">
                                        <img src="{{url('/front')}}/image/cache/catalog/category%20banner/193X268-2-213x288.jpg" alt="banner" class="img-responsive" />
                                    </a>
                                </div>
                            </div>

                            <h3 class="home-heading"><span>Specials</span></h3>
                            <div class="row allrow">
                                <div class="col-lg-2 col-md-3 specialbannerp allleftb"> </div>
                                <div class="pro-nepr col-lg-10 col-md-9 allrightp">
                                    <div class="row promar">
                                        <div id="special" class="owl-theme owl-carousel">

                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index6320.html?route=product/product&amp;product_id=28"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" alt="affordable housing" title="affordable housing" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index6320.html?route=product/product&amp;product_id=28"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index6320.html?route=product/product&amp;product_id=28">affordable housing</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$242.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('28');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexfb01.html?route=product/product&amp;product_id=57"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="All In One ENGLISH CORE CBSE Class 12th" title="All In One ENGLISH CORE CBSE Class 12th" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexfb01.html?route=product/product&amp;product_id=57"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-08-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexfb01.html?route=product/product&amp;product_id=57">All In One ENGLISH CORE CBSE Class 12th</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$20.00</span> <span class="price-old">$900.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('57');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('57');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('57');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexa52d.html?route=product/product&amp;product_id=76"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-05-205x205.jpg" alt="Contagious" title="Contagious" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexa52d.html?route=product/product&amp;product_id=76"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-09-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexa52d.html?route=product/product&amp;product_id=76">Contagious</a></h4>
                                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$10.00</span> <span class="price-old">$666.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('76');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('76');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('76');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexc629.html?route=product/product&amp;product_id=74"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-17-205x205.jpg" alt="Contagious novels" title="Contagious novels" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexc629.html?route=product/product&amp;product_id=74"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexc629.html?route=product/product&amp;product_id=74">Contagious novels</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$100.00</span> <span class="price-old">$600.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('74');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('74');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('74');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-03-205x205.jpg" alt="counseling  insight" title="counseling  insight" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexd21c.html?route=product/product&amp;product_id=47">counseling  insight</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$242.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('47');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexbb02.html?route=product/product&amp;product_id=42"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-02-205x205.jpg" alt="History of 1984" title="History of 1984" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexbb02.html?route=product/product&amp;product_id=42"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-05-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexbb02.html?route=product/product&amp;product_id=42">History of 1984</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('42');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index9144.html?route=product/product&amp;product_id=40"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-04-205x205.jpg" alt="iPhone" title="iPhone" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index9144.html?route=product/product&amp;product_id=40"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-10-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index9144.html?route=product/product&amp;product_id=40">iPhone</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$602.00</span> <span class="price-old">$1,202.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('40');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexb77e.html?route=product/product&amp;product_id=48"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-03-205x205.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexb77e.html?route=product/product&amp;product_id=48"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-10-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexb77e.html?route=product/product&amp;product_id=48">iPod Classic</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$38.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('48');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index5e0b.html?route=product/product&amp;product_id=36"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-07-205x205.jpg" alt="iPod Nano" title="iPod Nano" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index5e0b.html?route=product/product&amp;product_id=36"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index5e0b.html?route=product/product&amp;product_id=36">iPod Nano</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$1,202.00</span> <span class="price-old">$2,462.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('36');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('36');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index1282.html?route=product/product&amp;product_id=73"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-08-205x205.jpg" alt="Lanny's book" title="Lanny's book" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index1282.html?route=product/product&amp;product_id=73"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index1282.html?route=product/product&amp;product_id=73">Lanny's book</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$200.00</span> <span class="price-old">$989.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('73');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('73');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('73');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index9308.html?route=product/product&amp;product_id=65"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" alt="Mi LED Smart TV 4A 80 cm (32)" title="Mi LED Smart TV 4A 80 cm (32)" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index9308.html?route=product/product&amp;product_id=65"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-09-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index9308.html?route=product/product&amp;product_id=65">Mi LED Smart TV 4A 80 cm (32)</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$20.00</span> <span class="price-old">$780.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('65');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('65');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('65');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index6918.html?route=product/product&amp;product_id=56"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-17-205x205.jpg" alt="Objective General English" title="Objective General English" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index6918.html?route=product/product&amp;product_id=56"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index6918.html?route=product/product&amp;product_id=56">Objective General English</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$50.00</span> <span class="price-old">$5,000.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('56');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('56');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('56');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index1d1e.html?route=product/product&amp;product_id=93"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" alt="Samanya Gyan 2020" title="Samanya Gyan 2020" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index1d1e.html?route=product/product&amp;product_id=93"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-15-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index1d1e.html?route=product/product&amp;product_id=93">Samanya Gyan 2020</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$200.00</span> <span class="price-old">$500.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('93');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('93');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('93');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index50f1.html?route=product/product&amp;product_id=66"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" alt="Samsung 80cm (32 inch) HD Ready LED TV" title="Samsung 80cm (32 inch) HD Ready LED TV" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index50f1.html?route=product/product&amp;product_id=66"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index50f1.html?route=product/product&amp;product_id=66">Samsung 80cm (32 inch) HD Ready LED TV</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$1,000.00</span> <span class="price-old">$23,500.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('66');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('66');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('66');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index3d7a.html?route=product/product&amp;product_id=49"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-06-205x205.jpg" alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index3d7a.html?route=product/product&amp;product_id=49"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-04-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index3d7a.html?route=product/product&amp;product_id=49">Samsung Galaxy Tab 10.1</a></h4>
                                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$24,002.00</span> <span class="price-old">$241.99</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('49');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('49');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('49');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="index762e.html?route=product/product&amp;product_id=85"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-13-205x205.jpg" alt="The Secret Garden" title="The Secret Garden" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="index762e.html?route=product/product&amp;product_id=85"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-12-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="index762e.html?route=product/product&amp;product_id=85">The Secret Garden</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$200.00</span> <span class="price-old">$1,000.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('85');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('85');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('85');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="indexf073.html?route=product/product&amp;product_id=30"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-11-205x205.jpg" alt="where the crawdads sing" title="where the crawdads sing" class="img-responsive" /></a>
                                                        <!-- insp Images Start -->
                                                        <a href="indexf073.html?route=product/product&amp;product_id=30"><img src="{{url('/front')}}/image/cache/catalog/product/inspire-14-205x205.jpg" class="img-responsive second-img" alt="hover image" /></a>
                                                        <!-- insp Images End -->
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                            <h4><a href="indexf073.html?route=product/product&amp;product_id=30">where the crawdads sing</a></h4>
                                                            <div class="rating">
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                                <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                            </div>
                                                            <p class="price">
                                                                <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                                            </p>
                                                        </div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><svg width="16px" height="18px"> <use xlink:href="#addwish"></use></svg><span class="hidden-xs"></span></button>
                                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');" class="wishcom"><svg width="18px" height="14px"> <use xlink:href="#addcompare"></use></svg><span class="hidden-xs"></span></button>
                                                            <div class="bquickv" title="" data-toggle="tooltip"></div>
                                                            <button type="button" onclick="cart.add('30');" class="acart">
              <span><svg width="18px" height="18px" class=""><use xlink:href="#addcart"></use></svg></span>
            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#special").owlCarousel({
                                        itemsCustom: [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 4],
                                            [992, 4],
                                            [1200, 5],
                                            [1410, 5]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                        navigation: true,
                                        pagination: false
                                    });
                                });
                            </script>

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
                                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                        navigation: false,
                                        pagination: false
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <footer>

                    <div class="foot-top">
                        <div class="container">
                            <div class="inspire-newsletter  inspire-newsletter" id="newsletter_1582557725" data-mode="default">
                                <form id="formNewLestter" method="post" action="http://templatetasarim.com/opencart/Books/index.php?route=extension/module/inspirenewsletter/subscribe" class="formNewLestter newsletter-bg">
                                    <div class="inner row">
                                        <div class="col-sm-5 col-xs-12 hidden-xs">
                                            <div class="sign-up-img"></div>

                                            <div class="description-top">
                                                <h3>Newsletter</h3>
                                                <p>
                                                    <p>Signup Our newsletter And get latest updates!</p>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-md inputNew" onblur="javascript:if(this.value=='')this.value='Your email address';" onfocus="javascript:if(this.value=='Your email address')this.value='';" value="Your email address" size="18" name="email">
                                            </div>
                                            <div class="button-submit">
                                                <button type="submit" name="submitNewsletter" class="btn btn-danger">Subscribe</button>
                                            </div>
                                            <input type="hidden" value="1" name="action">
                                            <div class="valid"></div>
                                            <div class="description-bottom">



                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <script type="text/javascript">
                                <!--
                                $("#newsletter_1582557725").inspireoNewsletter().work('Email is not valid!');
                                -->
                            </script>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">


                            <aside id="column-left1" class="col-sm-3">
                                <div>
                                    <h5><span>Contact us</span>
                                        <button type="button" class="btn btn-primary toggle collapsed" data-toggle="collapse" data-target="#contact"></button>
                                    </h5>
                                    <div id="contact" class="collapse footer-collapse footcontact">
                                        <ul class="list-unstyled f-left">
                                            <li><i class="fa fa-map-marker"></i>Online Shopping Hub</li>
                                            <li><i class="fa fa-envelope"></i>42 Dream House, Dreammy street, 7131 Dreamville, USA </li>
                                            <li><i class="fa fa-phone"></i>(+91) - 540-025-1243</li>
                                            <li><i class="fa fa-paper-plane"></i>India</li>
                                        </ul>
                                        <ul class="list-inline list-unstyled foot-social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </aside>

                            <div class="middle-footer">
                                <div class="col-sm-3">
                                    <h5>Extras
                                        <button type="button" class="btn btn-primary toggle collapsed" data-toggle="collapse" data-target="#extra"></button>
                                    </h5>
                                    <div id="extra" class="collapse footer-collapse">
                                        <ul class="list-unstyled">
                                            <li><a href="indexd773.html?route=product/manufacturer">Brands</a></li>
                                            <li><a href="index4dd2.html?route=account/voucher">Gift Certificates</a></li>
                                            <li><a href="index3d18.html?route=affiliate/login">Affiliate</a></li>
                                            <li><a href="indexf110.html?route=product/special">Specials</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Information
                                        <button type="button" class="btn btn-primary toggle collapsed" data-toggle="collapse" data-target="#info"></button>
                                    </h5>
                                    <div id="info" class="collapse footer-collapse">
                                        <ul class="list-unstyled">
                                            <li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
                                            <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>
                                            <li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                                            <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                                            <li><a href="index2724.html?route=information/contact">Contact Us</a></li>
                                            <li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5>My Account
                                        <button type="button" class="btn btn-primary toggle collapsed" data-toggle="collapse" data-target="#account"></button>
                                    </h5>
                                    <div id="account" class="collapse footer-collapse">
                                        <ul class="list-unstyled lastb">
                                            <li><a href="indexe223.html?route=account/account">My Account</a></li>
                                            <li><a href="indexe223.html?route=account/order">Order History</a></li>
                                            <li><a href="indexe223.html?route=account/wishlist">Wish List</a></li>
                                            <li><a href="indexe223.html?route=account/newsletter">Newsletter</a></li>
                                            <li><a href="index71ba.html?route=account/return/add">Returns</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="xs-fab">

                                    </div>
                                </div>
                            </div>

                            <!--   -->
                        </div>
                        <div class="foot-bottom">
                            <div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="foot-app">
                                            <div class="title-footer hidden-md hidden-sm hidden-xs">Download Our App</div>
                                            <ul class="list-unstyled inline-block footer-payment">
                                                <li>
                                                    <a title="AppStore" href="#"><img class="img-responsive" src="{{url('/front')}}/image/catalog/app1.png" alt="App Store"></a>
                                                </li>
                                                <li>
                                                    <a title="PlayStore" href="#"><img class="img-responsive" src="{{url('/front')}}/image/catalog/app2.png" alt="Play Store"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-social">
                                        <div class="text-right">
                                            <img class="img-responsive" src="{{url('/front')}}/image/catalog/payment.png" alt="imgpayment">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="foot-power">
                        <div class="container">
                            <div class="copy text-center">Powered By <a href="http://www.opencart.com/">OpenCart</a> Shoppee Store &copy; 2020</div>
                        </div>
                    </div>
                </footer>
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
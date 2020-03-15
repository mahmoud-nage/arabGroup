                        @inject('news', 'App\News')    
                        <div class="latestbanner hidden-xs hidden-sm">
                            <div class=" banner-effect">
                            <a href="{{url('fronts/most-views/views')}}">
                                    <img src="{{url('/front')}}/image/cache/catalog/category%20banner/193X268-4-213x288.jpg" alt="Featured banner" class="img-responsive" />
                                </a>
                            </div>
                        </div>

                            <h3 class="home-heading"><span>{{__('اخر الاخبار')}}</span></h3>
                            <div class="row allrow">
                                <div class="col-lg-2 col-md-2 latestbannerp allleftb"> </div>
                                <div class="pro-nepr col-lg-10 col-md-10 allrightp">
                                    <div class="row promar">
                                        <div id="latest" class="owl-theme owl-carousel">
                                            @foreach ($news->take(10)->get() as $new)
                                    
                                            <div class="product-layout col-xs-12 propadding text-center">
                                                <div class="product-thumb transition">
                                                    <div class="image">
                                                        <a href="{{route('news.show', $new->id)}}"><img src="{{url('/uploads/thumbs').'/'.$new->cover_img}}" alt="History of 1984" title="History of 1984" class="img-responsive"/></a>
                                                        @if($new->back_img)
                                                        <!-- insp Images Start -->
                                                        <a href="{{route('news.show', $new->id)}}"><img src="{{url('/uploads/thumbs').'/'.$new->back_img}}" class="img-responsive second-img" alt="hover image"/></a>
                                                        <!-- End -->
                                                        @endif
                                                    </div>
                                                    <div class="caption">
                                                        <div class="hoverdes">
                                                        <h4><a href="{{route('news.show', $new->id)}}">{{$new->name}}</a></h4>
                                                            <div class="rating">
                    
                                                            </div>
                                                            <p class="price">
                                                            <span class="price-new">{{$new->price}}</span> $
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

                                            @endforeach


                                          
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
                                        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                        navigation: true,
                                        pagination: false
                                    });
                                });
                            </script>
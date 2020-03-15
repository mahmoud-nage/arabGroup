 
                        @inject('books', 'App\Book')    
 
 <div class="pro-bg">
              <h2 class="home-heading"><span>Related Products</span></h2>
        <div class="allrow pro-nepr">
          <div id="related" class="owl-carousel owl-theme">

            @foreach ($books->where('category_id', $record->category_id)->orderBy('id', 'desc')->take(10)->get() as $book)
                                    
            <div class="product-layout col-xs-12 propadding text-center">
                <div class="product-thumb transition">
                    <div class="image">
                        <a href="{{url('fronts/book'.'/'.$book->id)}}"><img src="{{url('/uploads/thumbs').'/'.$book->cover_img}}" alt="History of 1984" title="History of 1984" class="img-responsive" width="171" hieght="171"/></a>
                        @if($book->back_img)
                        <!-- insp Images Start -->
                        <a href="{{url('fronts/book'.'/'.$book->id)}}"><img src="{{url('/uploads/thumbs').'/'.$book->back_img}}" class="img-responsive second-img" alt="hover image" width="171" hieght="171" /></a>
                        <!-- End -->
                        @endif
                    </div>
                    <div class="caption">
                        <div class="hoverdes">
                            <h4><a href="{{url('fronts/book'.'/'.$book->id)}}">{{$book->name}}</a></h4>
                            <div class="rating">
                      
                            </div>
                            <p class="price">
                                <span class="price-new">{{$book->price}}</span> $
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
      </div>
  </div>
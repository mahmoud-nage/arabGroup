<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 pull-right">
                <div id="logo">
                <a href="{{url('/fronts')}}">
                        <img src="{{url('/images')}}/logo.png" title="Shoppee Store" alt="Shoppee Store" class="img-responsive pull-right" />
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 pull-right" style="margin-top: 20px">
                <div id="search-by-category">
                    <div class="search-container">
                        <div class="categories-container text-right">
                            <div class="hover-cate">
                                <p><span class="cate-selected" data-value="0">التصنيفات</span></p>
                                <ul class="cate-items">
                                    @if(isset($cats))
                                        @foreach ($cats->where('parent_id', 0)->get() as $cat)
                                            <li class="item-cate" data-value="{{$cat->id}}">{{$cat->name}}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="search-box input-group">
                            <input type="text" name="search" id="text-search" value="" placeholder="بحث" class="" />
                            <div id="sp-btn-search" class="input-group-btn">
                            <button type="button" id="btn-search-category" class="btn"><span class="hidden-xs hidden-sm">{{__('بحث')}}</span><span class="visible-xs visible-sm"><i class="fa fa-search"></i></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="search-ajax">
                        <div class="ajax-loader-container" style="display: none;">
                            <img src="{{url('/front')}}/image/catalog/loader.gif" class="ajax-load-img" alt="loader" />
                        </div>
                        <div class="ajax-result-container">
                            <!-- Content of search results -->
                        </div>
                    </div>
                    <input type="hidden" id="ajax-search-enable" value="1" />
                </div>

                <script type="text/javascript">
                    $(document).ready(function() {
                        var flag = false;
                        var ajax_search_enable = $('#ajax-search-enable').val();

                        var current_cate_value = $('ul.cate-items li.selected').data('value');
                        var current_cate_text = $('ul.cate-items li.selected').html();

                        $('.cate-selected').attr('data-value', current_cate_value);
                        $('.cate-selected').html(current_cate_text);

                        $('.hover-cate p').click(function() {
                            $(".cate-items").slideToggle("slow");
                            $(".cate-items").addClass("sblock");
                        });

                        $('.ajax-result-container').hover(
                            function() {
                                flag = true;
                            },
                            function() {
                                flag = false;
                            }
                        );

                        $('.hover-cate').hover(
                            function() {
                                flag = true;
                            },
                            function() {
                                flag = false;
                            }
                        );

                        $('#search-by-category').focusout(function() {
                            if (flag == true) {
                                $('.ajax-result-container').show();
                            } else {
                                $('.ajax-result-container').hide();
                            }
                        });

                        $('#search-by-category').focusin(function() {
                            $('.ajax-result-container').show();
                        });

                        $('#text-search').keypress(function(e) {
                            if (e.which == 13) { //Enter key pressed
                                $('#btn-search-category').click(); //Trigger search button click event
                            }
                        });

                        $('#btn-search-category').click(function() {
                            var url = 'index64b3.html?route=product/search';
                            var text_search = $('#text-search').val();
                            if (text_search) {
                                url += '&search=' + encodeURIComponent(text_search);
                            }

                            var category_search = $('.cate-selected').attr("data-value");
                            if (category_search) {
                                url += '&category_id=' + encodeURIComponent(category_search);
                            }

                            location = url;
                        });

                        if (ajax_search_enable == '1') {
                            $('#text-search').keyup(function(e) {
                                var text_search = $(this).val();
                                var cate_search = $('.cate-selected').attr("data-value");
                                if (text_search != null && text_search != '') {
                                    ajaxSearch(text_search, cate_search);
                                } else {
                                    $('.ajax-result-container').html('');
                                    $('.ajax-loader-container').hide();
                                }
                            });

                            $('ul.cate-items li.item-cate').click(function() {
                                var cate_search = $(this).data('value');
                                var text_search = $('#text-search').val();
                                $('.cate-selected').attr('data-value', cate_search);
                                $('.cate-selected').html($(this).html());
                                if (text_search != null && text_search != '') {
                                    ajaxSearch(text_search, cate_search);
                                } else {
                                    $('.ajax-result-container').html('');
                                    $('.ajax-loader-container').hide();
                                }
                                $(".cate-items").hide();
                                $('#text-search').focus();
                            });

                        }

                        function ajaxSearch(text_search, cate_search) {
                            $.ajax({
                                url: 'http://templatetasarim.com/opencart/Books/index.php?route=extension/module/ocsearchcategory/ajaxSearch',
                                type: 'post',
                                data: {
                                    text_search: text_search,
                                    cate_search: cate_search
                                },
                                beforeSend: function() {
                                    $('.ajax-loader-container').show();
                                },
                                success: function(json) {
                                    if (json['success'] == true) {
                                        $('.ajax-result-container').html(json['result_html']);
                                        $('.ajax-loader-container').hide();
                                    }
                                }
                            });
                        }

                    });
                </script>
            </div>
            <div class="col-sm-3 text-left xs-cart" style="margin-top: 20px">
                <div id="cart" class="btn-group">
                <button data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle text-right" style="direction: rtl"><svg height="16px" width="16px"><use xlink:href="#basket"></use></svg> <span id="cart-total">{{__('عنصر')}}</span></button>
                    <ul class="dropdown-menu text-right">
                        <li>
                            <p class="text-center">{{__('لا يوجد منتجات')}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

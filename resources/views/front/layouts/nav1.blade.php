<nav id="top" style="direction: rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12 headcall pull-right text-right">
                <ul class="list-inline static-menu pull-right text-right" style="margin-right: -65px;margin-top: -10px;">
                    <li><a style="color:black" href="index9328.html?route=common/home">{{__('الرئيسيه')}}</a></li>
                    <li><a style="color:black" href="index9328.html?route=common/home">{{__('من نحن')}}</a></li>
                    <li><a style="color:black" href="index9328.html?route=common/home">{{__('اتصل بنا')}}</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-xs-12 headcall pull-right text-center">
                <a href="index2724.html?route=information/contact">
                    <svg height="20px" width="20px"><use xlink:href="#callus"></use></svg>
                <span class="callus hidden-xs hidden-sm">{{__('اتصل بنا')}}</span>
                    <span class="callno">: {{$setting->phone}}</span>
                </a>
                <a href="#" class="mail-us hidden-xs">
                    <svg height="24px" width="28px"><use xlink:href="#mail"></use></svg>
                <span>{{$setting->email}}</span>
                </a>
            </div>
            <div id="top-links" class="col-lg-2 col-xs-12 text-left">
                <ul class="list-inline">
                <li class="dropdown"><a href="indexe223.html?route=account/account" title="My Account" class="dropdown-toggle helllo" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs">{{__('حسابى')}}</span>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-left top-dropdown" style="text-align: right">
                            <li>
                                <a href="index5502.html?route=account/register"> <i class="fa fa-address-book-o nav-icon"></i>{{__('انشاء حساب')}}</a>
                            </li>
                            <li>
                            <a href="indexe223.html?route=account/login"> <i class="fa fa-sign-in"></i>{{__('تسجيل دخول')}}</a>
                            </li>
                            <li>
                                <a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="Wish List (0)"> <i class="fa fa-heart"></i> <span class="">Wish List (0)</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
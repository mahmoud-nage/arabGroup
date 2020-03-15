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
                            @yield('content')
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
@stack('scripts')
    </body>
    <!-- Mirrored from templatetasarim.com/opencart/Books/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 26 Feb 2020 10:16:42 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <!-- /Added by HTTrack -->

    </html>
<div class="column_center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h5>Chào mừng bạn đã đến với Gif Shop!</h5>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <ul class="social list-inline pull-right">
                    <li><a href=""> <i class="fb"> </i>
                            <div class="clearfix"></div>
                        </a></li>
                    <li><a href=""><i class="tw"> </i>
                            <div class="clearfix"></div>
                        </a></li>
                    <li><a href=""><i class="fb"> </i>
                            <div class="clearfix"></div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header_top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="logo">
                    <a href="{!! route('gethome') !!}"><img src="{{asset('user/images/logo5.png')}}" alt=""/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="search">
                    <input type="text" value="" placeholder="Hãy nhập từ khóa cần tìm" class="text">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5">
                <ul class="shopping_grid pull-right">
                    <div class="dropdown">
                        @if(Auth::guard('simpleUser')->check())
                            <li class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                                <img class="img-rounded" src="@if(Auth::guard('simpleUser')->user()['avatar']) {!! asset('admin/images/avatars').'/'.Auth::guard('simpleUser')->user()['avatar'] !!}@else{!! asset('user/images/').'/user.png' !!}@endif" width="30" height="30" alt="">
                                {!! Auth::guard('simpleUser')->user()['name'] !!}
                                <span class="caret"></span>
                            </li>
                            <div class="dropdown-menu text-center" id="dropd" style="margin-top: 69px; border-radius: 0px">
                                <h4><a href="#">Account</a></h4>
                                <h4><a href="{!! route('simpleUserLogout') !!}">Logout</a></h4>
                            </div>
                        @else
                            <a href="{!! route('usergetregister') !!}">
                                <li>Register</li>
                            </a>
                            <a href="{!! route('usergetlogin') !!}">
                                <li>Login</li>
                            </a>
                        @endif


                        <a href="#">
                            <li><span class="m_1">Cart</span>&nbsp;
                                <img src="{!! asset('user/images/bag.png') !!}" alt=""/></li>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="h_menu4"><!-- start h_menu4 -->
    <div class="container">
        <a class="toggleMenu" href="#">Menu</a>
        <ul class="nav">
            <li class="active"><a href="{!! route('gethome') !!}" data-hover="Home">TRANG CHỦ</a></li>
            <li><a href="about.html" data-hover="About Us">GIỚI THIỆU</a></li>
            <li><a href="" data-hover="Careers">KHÁCH HÀNG</a></li>
            <li><a href="" data-hover="Contact Us">LIÊN HỆ</a></li>
            <li><a href="" data-hover="Company Profile">HỒ SƠ</a></li>
            <li><a href="" data-hover="Company Registration">DANH MỤC</a></li>
            <li><a href="wishlist.html" data-hover="Wish List">Wish List</a></li>
        </ul>
        <script type="text/javascript" src="{{asset('user/js/nav.js')}}"></script>
    </div><!-- end h_menu4 -->
</div>
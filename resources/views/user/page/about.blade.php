@extends('user.master')
@section('title','About Us')
@section('content')
    <div class="about">
        <div class="container">
            <div class="about">
                <div class="container">
                    <div class="about_top">
                        <div class="col-md-4 span1">
                            <h3>Who We Are</h3>
                            <img src="{{asset('user/images/p2.jpg')}}" class="img-responsive" alt=""/>
                            <h4>Sesequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce euismod.</h4>
                            <p>Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor. Sereque sed dolor. Aliquam.</p>
                            <p>Fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in.</p>
                        </div>
                        <div class="col-md-4 span1 span_2">
                            <h3>History</h3>
                            <h5>2005</h5>
                            <p class="m_4">But I must explain to you how all this mistaken idea of denouncing pleasure and praisin</p>
                            <h5>2006</h5>
                            <p class="m_4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,</p>
                            <h5>2012</h5>
                            <p class="m_4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
                            <h5>2014</h5>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,</p>
                        </div>
                        <div class="col-md-4 span1">
                            <h3>Opportunities</h3>
                            <h4>Sesequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce euismod.</h4>
                            <p>Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor. Sereque sed dolor. Aliquam.</p>
                            <p>Fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in.</p>
                            <h4>Sesequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce euismod.</h4>
                            <p>Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor. Sereque sed dolor. Aliquam.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="about_bottom">
                        <div class="col-md-6">
                            <h3 class="m_3">Advantages</h3>
                            <div class="feature about_box1">
                                <h4>Ut wisi enim ad minim</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                                </p>
                            </div>
                            <div class="feature about_box1">
                                <h4>Claritas est etiam processus</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 span_3">
                            <h3 class="m_3">Testimonials</h3>
                            <ul class="about_box span_1">
                                <li class="box_img"><img src="{{asset('user/images/p9.jpg')}}" class="img-responsive" alt=""></li>
                                <li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>
                                <h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>
                                <div class="clearfix"> </div>
                            </ul>
                            <ul class="about_box span_1">
                                <li class="box_img"><img src="{{asset('user/images/p11.jpg')}}" class="img-responsive" alt=""></li>
                                <li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>
                                <h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>
                                <div class="clearfix"> </div>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
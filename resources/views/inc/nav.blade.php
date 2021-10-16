<body>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url({{ asset('frontend/img/icon-img/header-shape.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            @foreach ($sites as $site)
                            @if ($site->site_key=='phone')

<li><i class="fa fa-phone"></i>{{ $site->site_value }}</li>
                            @endif

                            @endforeach
                             @foreach ($sites as $site)
                            @if ($site->site_key=='email')
 <li><i class="fa fa-envelope-o"></i><a href="#">{{ $site->site_value }}</a></li>
                            @endif

                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>

                            <li><a href="{{ url('admissions') }}">Admission</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="{{ url('index') }}">
                            <img alt="" src="{{ asset('frontend/img/logo/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                <li><a href="{{ url('index') }}"> HOME </a></li>
                                    <li><a href="#"> ABOUT</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('aboutus') }}">About us</a></li>
                                            <li><a href="{{ url('messages') }}">Message</a></li>
                                            <li><a href="{{ url('plannings') }}">Planning</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">EXAMINATION</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('notices') }}">Notice</a></li>
                                            <li><a href="{{ url('results') }}">Result</a></li>

                                        </ul>
                                    </li>


                                    <li><a href="#"> COURSES</a>
                                    <ul class="submenu">
                                                                                            @foreach ($categories as $category)
  <li><a href="{{ url('courses/'.$category->c_id) }}">{{ $category->c_name }}</a></li>
@endforeach
                                        </ul>
                                </li>
                                <li><a href="{{ url('teachers') }}">TEACHERS</a></li>
                                <li><a href="#">Activites</a>
                                    <ul class="submenu">
                                            <li><a href="{{ url('galleries') }}">Gallery</a></li>
                                            <li><a href="{{ url('events') }}">Event</a></li>
                                            <li><a href="{{ url('blogs') }}">Blogs</a></li>
                                            <li><a href="{{ url('newses') }}">News</a></li>

                                        </ul>
                                </li>
                                <li><a href="{{ url('contacts') }}">CONTACT </a></li>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                        <li><a href="{{ url('index') }}"> HOME </a></li>
                                    <li><a href="#"> ABOUT</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('aboutus') }}">About us</a></li>
                                            <li><a href="{{ url('messages') }}">Message</a></li>
                                            <li><a href="{{ url('plannings') }}">Planning</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">EXAMINATION</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('notices') }}">Notice</a></li>
                                            <li><a href="{{ url('results') }}">Result</a></li>

                                        </ul>
                                    </li>


                                    <li><a href="#"> COURSES</a>
                                    <ul class="submenu">
                                                            @foreach ($categories as $category)
  <li><a href="{{ url('courses/'.$category->c_id) }}">{{ $category->c_name }}</a></li>
@endforeach
                                        </ul>
                                </li>
                                <li><a href="{{ url('teachers') }}">TEACHERS</a></li>

                                <li><a href="#">Activities</a>
                                    <ul class="submenu">
                                            <li><a href="{{ url('galleries') }}">Gallery</a></li>
                                            <li><a href="{{ url('events') }}">Event</a></li>
                                            <li><a href="{{ url('blogs') }}">Blogs</a></li>
                                            <li><a href="{{ url('newses') }}">News</a></li>

                                        </ul>
                                </li>
                                <li><a href="{{ url('contacts') }}">CONTACT </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

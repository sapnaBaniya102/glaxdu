<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url({{ asset('frontend/img/bg/bg-4.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            @foreach ($sites as $site)
                                @if ($site->site_key=='about')
                                <p>{{$site->site_value}}</p>
                                @endif
                            @endforeach

                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='location')
                                    <i class="fa fa-home"></i>
                                    <span>{{$site->site_value}}</span>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="single-f-contact-info">
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='email')
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="{{$site->site_value}}">{{$site->site_value}}</a></span>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="single-f-contact-info">
                                    @foreach ($sites as $site)
                                    @if ($site->site_key=='phone')
                                    <i class="fa fa-phone"></i>
                                    <span> {{$site->site_value}}</span>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{ url('index') }}">Home</a></li>
                                <li><a href="{{ url('aboutus') }}">About Us</a></li>
                                <li><a href="{{ url('notices') }}">Examination</a></li>
                                <li><a href="{{ url('teachers') }}">Teacher</a></li>
                                <li><a href="{{ url('contacts') }}">Contact</a></li>
                                <li><a href="{{ url('admissions') }}">Admission</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>Activities</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                            <li><a href="{{ url('galleries') }}">Gallery</a></li>
                             <li><a href="{{ url('events') }}">Event</a></li>
                              <li><a href="{{ url('blogs') }}">Blogs</a></li>
                               <li><a href="{{ url('newses') }}">News</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-box">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.24760131458!2d83.88657799411769!3d28.229855807896243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1631172772593!5m2!1sen!2snp" width="480" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="{{ url('index') }}">GLAXDU</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privecy & Policy</a></li>
                                <li><a href="#">Terms & Conditions of Use</a></li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                @foreach ($sites as $site)
                                @if ($site->site_key=='facebook')
                                <li><a class="facebook" href="{{$site->site_value}}"><i class="fa fa-facebook"></i></a></li>
                                @endif
                                    @endforeach
                                @foreach ($sites as $site)
                                @if ($site->site_key=='youtube')
                                <li><a class="youtube" href="{{$site->site_value}}"><i class="fa fa-youtube-play"></i></a></li>
                                @endif
                                    @endforeach
                                @foreach ($sites as $site)
                                @if ($site->site_key=='google')
                                <li><a class="google-plus" href="{{$site->site_value}}"><i class="fa fa-google-plus"></i></a></li>
                                @endif
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('frontend/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
<script>
    function init() {
        var mapOptions = {
            zoom: 11,
            scrollwheel: false,
            center: new google.maps.LatLng(40.709896, -73.995481),
            styles:
            [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.709896, -73.995481),
            map: map,
            icon: "{{ asset('frontend/img/icon-img/2.png') }}",
            animation:google.maps.Animation.BOUNCE,
            title: 'Snazzy!'
        });
    }
    google.maps.event.addDomListener(window, 'load', init);
</script>
<!-- Main JS -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>

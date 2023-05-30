<header class="header2 header5">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 display-block ">
                  <a href="index.html" class="logo"><img src="{{asset('front_end/images/black-logo.png')}}" class="img-responsive" alt="logo"></a>
               </div>
               <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 pull-right">
                  <ul class="header-info">
                     <li class="address">121  Maxwell Farm Road, <br/> Washington DC, USA</li>
                     <li class="phn">+1 (123) 456-7890<br/><a href="mailto:info@indofact.com">info@indofact.com</a></li>
                  </ul>
                  <div class="header-socials"> 
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                     <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> 
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                  </div>
               </div>
            </div>
         </div>
         <nav id="main-navigation-wrapper" class="navbar navbar-default navbar2-wrap ">
            <div class="container">
               <div class="navbar-header">
                  <div class="logo-menu"><img src="images/white-logo.png" alt=""></div>
                  <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               </div>
               <div id="main-navigation" class="collapse navbar-collapse ">
                  <ul class="nav navbar-nav">
                     <li class="dropdown ">
                        <a href="/" class="active">Home</a>
                     </li>
                     <li class="dropdown">
                        <a href="#">About Us</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                           <li><a href="about.html">FAQ</a></li>
                           <li><a href="faq.html">FAQ</a></li>
                           <li><a href="team.html">Our Team</a></li>
                           <li><a href="maintenance.html">Maintenance</a></li>
                           <li><a href="coming-soon.html">Coming Soon</a></li>
                           <li><a href="page-404.html">404 Page</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="services.html">Services</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                           <li><a href="manufacturing.html">Manufacturing</a></li>
                           <li><a href="cnc-industry.html">CNC Industry</a></li>
                           <li><a href="chemical-industry.html">Chemical Industry</a></li>
                           <li><a href="energy-engineering.html">Energy Engineering</a></li>
                           <li><a href="oil-industry.html">Oil Industry</a></li>
                           <li><a href="material-engineering.html">Material Engineering</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="portfolio-2.html">Portfolio</a><i class="fa fa-chevron-down"></i>
                       
                     </li>
                     <li class="dropdown">
                        <a href="{{ route('frontend.posts.index') }}">Blog</a><i class="fa fa-chevron-down"></i>
                     </li>
                     <li><a href="testimonials.html">Testimonials</a><i class="fa fa-chevron-down"></i></li>
                     @guest
                     <li>
                        <a href="{{ route('login') }}">{{__('Login')}}</a><i class="fa fa-chevron-down"></i>
                     </li>
                        @if(user_registration())
                        <li>
                         <a href="{{ route('register') }}">{{__('Register')}}</a><i class="fa fa-chevron-down"></i>
                         </li>
                        @endif
                       
                        @endguest
                     @auth
                    <li>
                        <a href="{{ route('backend.dashboard') }}">{{ Auth::user()->name }}</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                        @can('view_backend')
                        <li><a href="{{ route('backend.dashboard') }}"><i class="fas fa-tachometer-alt fa-fw"></i> {{__('Dashboard')}}</a></li>
                        @endif
                        <li><a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}">{{__('Profile')}}</a></li>
                        <li><a href="{{ route('frontend.users.profileEdit', encode_id(auth()->user()->id)) }}">{{__('Settings')}}</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </ul>
                    </li>
                    @endauth
                  </ul>
                  <div class="search-column search-fl">
                     <button name="button" type="button" class="search-btn black-search-btn"  data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                  </div>
                  <a class="header-requestbtn header2-requestbtn hvr-bounce-to-right" href="request-quote.html">Request A Quote</a>
               </div>
            </div>
         </nav>
      </header>





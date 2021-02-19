<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

        <!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset ('logo/favicon.png') }}"/>

        {{-- these are the links for other styles --}}
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

        <!--animate.css-->
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

        <!--hover.css-->
		<link rel="stylesheet" href="{{ asset('css/hover-min.css') }}" />

        <!--datepicker.css-->
		<link rel="stylesheet"  href="{{ asset('css/datepicker.css') }}" />

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}" />
		<link rel="stylesheet" href="{{ asset ('css/owl.theme.default.min.css') }} "/>

        <!-- range css-->
        <link rel="stylesheet" href="{{ asset ('css/jquery-ui.min.css') }}" />

        <!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}" />

        <!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset ('css/bootsnav.css') }}" />

        <!--style.css-->
		<link rel="stylesheet" href="{{ asset ('css/style.css') }}" />

        <!--responsive.css-->
		<link rel="stylesheet" href="{{ asset ('css/responsive.css') }}" />
    </head>
    <body class="antialiased">
    

        <!-- main-menu Start -->
        <header class="top-area">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="logo">
                                <a href="{{ url('/') }}" >
                                    Tour <span>Gent</span>
                                </a>
                            </div><!-- /.logo-->
                        </div><!-- /.col-->
                        <div class="col-sm-10">
                            <div class="main-menu">

                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <i class="fa fa-bars"></i>
                                    </button><!-- / button-->
                                </div><!-- /.navbar-header-->
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right">


                                        @guest
                                        @if (Route::has('login'))
                                            <li><a href="{{ route('login') }}"><span class="fa fa-user"></span> Login</a></li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @endif

                                        @else


                                        <li class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ url('/') }}">home</a></li>
                                        <li class="nav-link {{ Request::route()->getName() === 'destination' ? 'active' : '' }}"><a href="{{ url('/destination') }}">Destination</a></li>
                                        {{-- <li class="nav-link {{ Request::route()->getName() === 'packages' ? 'active' : '' }}"><a href="{{ url('/packages') }}">Packages </a></li> --}}
                                        <li class="nav-link {{ Request::route()->getName() === 'special offers' ? 'active' : '' }}"><a href="{{ url('/specia offers') }}">Special Offers</a></li>
                                        <li class="nav-link {{ Request::route()->getName() === 'blog' ? 'active' : '' }}"><a href="{{ url('/blog') }}">blog</a></li>
                                        <li class="nav-link {{ Request::route()->getName() === 'subscription' ? 'active' : '' }}"><a href="{{ url('/subscription') }}">subscription</a></li>
                                        <li>
                                            <button class="book-btn">

                                                    book now

                                            </button>
                                        </li><!--/.project-btn-->

                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><span class="fa fa-user"></span> Log Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </li>
                                            @endguest

                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.main-menu-->
                        </div><!-- /.col-->
                    </div><!-- /.row -->
                    <div class="home-border"></div><!-- /.home-border-->
                </div><!-- /.container-->
            </div><!-- /.header-area -->

    </header><!-- /.top-area-->
    <!-- main-menu End -->

    <!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Tourism Redefined. Welcome to the World!

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											Check Packages
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">

							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->


        @guest
        {{-- @if (Route::has('login'))
        <li><a href="{{ route('login') }}"><span class="fa fa-user"></span> Login</a></li>
        @endif

        @if (Route::has('register'))
        <li><a href="{{ route('register') }}">Register</a></li>
        @endif --}}



        <section id="pack" class="packages">
            <div class="container">
                <div class="gallary-header text-center">
                    <h2>
                        special packages
                    </h2>
                    <p>
                        Welcome to our special packages for just you.
                    </p>
                </div><!--/.gallery-header-->
                <div class="packages-content">
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="images/images/packages/p1.jpg" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>italy <span class="pull-right">$499</span></h3>
                                    <div class="packages-para">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i> 3 Days 2 nights
                                            </span>
                                            <i class="fa fa-angle-right"></i>  5 star accomodation
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation
                                            </span>
                                            <i class="fa fa-angle-right"></i> food facilities
                                         </p>
                                    </div><!--/.packages-para-->
                                    <div class="packages-review">
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>254 reviews</span>
                                        </p>
                                    </div><!--/.packages-review-->

        

                                    <div class="about-btn">
                                        <button  class="about-view packages-btn">
                                            book now
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div><!--/.col-->

        @endguest



                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="images/images/packages/p2.jpg" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>england <span class="pull-right">$1499</span></h3>
                                    <div class="packages-para">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i> 6 Days 7 nights
                                            </span>
                                            <i class="fa fa-angle-right"></i>  5 star accomodation
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation
                                            </span>
                                            <i class="fa fa-angle-right"></i>  Free food
                                         </p>
                                    </div><!--/.packages-para-->
                                    <div class="packages-review">
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>344 reviews</span>
                                        </p>
                                    </div><!--/.packages-review-->
                                    <div class="about-btn">
                                        <button  class="about-view packages-btn">
                                            book now
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="images/images/packages/p3.jpg" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>france <span class="pull-right">$1199</span></h3>
                                    <div class="packages-para">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i> 5 Days 6 nights
                                            </span>
                                            <i class="fa fa-angle-right"></i>  5 star accomodation
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation
                                            </span>
                                            <i class="fa fa-angle-right"></i>  food facilities
                                         </p>
                                    </div><!--/.packages-para-->
                                    <div class="packages-review">
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>544 reviews</span>
                                        </p>
                                    </div><!--/.packages-review-->
                                    <div class="about-btn">
                                        <button  class="about-view packages-btn">
                                            book now
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="images/images/packages/p4.jpg" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>india <span class="pull-right">$799</span></h3>
                                    <div class="packages-para">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i> 4 Days 5 nights
                                            </span>
                                            <i class="fa fa-angle-right"></i>  5 star accomodation
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation
                                            </span>
                                            <i class="fa fa-angle-right"></i>  food facilities
                                         </p>
                                    </div><!--/.packages-para-->
                                    <div class="packages-review">
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>625 reviews</span>
                                        </p>
                                    </div><!--/.packages-review-->
                                    <div class="about-btn">
                                        <button  class="about-view packages-btn">
                                            book now
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="images/images/packages/p5.jpg" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>spain <span class="pull-right">$999</span></h3>
                                    <div class="packages-para">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i> 4 Days 4 nights
                                            </span>
                                            <i class="fa fa-angle-right"></i>  5 star accomodation
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation
                                            </span>
                                            <i class="fa fa-angle-right"></i>  food facilities
                                         </p>
                                    </div><!--/.packages-para-->
                                    <div class="packages-review">
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>379 reviews</span>
                                        </p>
                                    </div><!--/.packages-review-->
                                    <div class="about-btn">
                                        <button  class="about-view packages-btn">
                                            book now
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div><!--/.col-->

                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="images/images/packages/p6.jpg" alt="package-place">
                                <div class="single-package-item-txt">
                                    <h3>thailand <span class="pull-right">$799</span></h3>
                                    <div class="packages-para">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i> 5 Days 6 nights
                                            </span>
                                            <i class="fa fa-angle-right"></i>  5 star accomodation
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation
                                            </span>
                                            <i class="fa fa-angle-right"></i>  food facilities
                                         </p>
                                    </div><!--/.packages-para-->
                                    <div class="packages-review">
                                        <p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>447 reviews</span>
                                        </p>
                                    </div><!--/.packages-review-->
                                    <div class="about-btn">
                                        <button  class="about-view packages-btn">
                                            book now
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div><!--/.col-->

                    </div><!--/.row-->
                </div><!--/.packages-content-->
            </div><!--/.container-->

        </section><!--/.packages-->
        <!--packages end-->


        {{-- @endguest --}}


    {{-- <body class="antialiased">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1>TOURISM RESERVATION SYSTEM</h1>
                </div>
            </div>
        </div> --}}



        <script src="{{ asset('js/jquery.js') }}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

        <!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <!--bootstrap.min.js-->
		<script  src="{{ asset ('js/bootstrap.min.js') }}"></script>

        <!-- bootsnav js -->
		<script src="{{ asset ('js/bootsnav.js') }}"></script>

        <!-- jquery.filterizr.min.js -->
		<script src="{{ asset ('js/jquery.filterizr.min.js') }}"></script>

        <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="{{ asset ('js/jquery-ui.min.js') }}"></script>

        <!-- counter js -->
		<script src="{{ asset ('js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset ('js/waypoints.min.js') }}"></script>

		<!--owl.carousel.js-->
        <script  src="{{ asset ('js/owl.carousel.min.js') }}"></script>

        <!-- jquery.sticky.js -->
		<script src="{{ asset ('js/jquery.sticky.js') }}"></script>

        <!--datepicker.js-->
        <script  src="{{ asset ('js/datepicker.js') }}"></script>

		<!--Custom JS-->
		<script src="{{asset ('js/custom.js') }}"></script>

        <script type="text/javascript">
            $(function (){
                $("#date").datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true,
                    todayHighlight: true,
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    autoclose: true,
                    changeMonth: true,
                    changeYear: true,
                    startDate: new Date(),
                });
            });
        </script>

        @yield('js')
        </div>
    </body>
</html>

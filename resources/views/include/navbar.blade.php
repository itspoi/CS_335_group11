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
                                <li class="nav-link {{ Request::route()->getName() === 'special offers' ? 'active' : '' }}"><a href="{{ url('/special offers') }}">Special Offers</a></li>
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

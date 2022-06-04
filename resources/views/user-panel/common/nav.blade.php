<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-menu">
                    <div class="navbar-expand-md">
                        <nav class="navbar ptb-0" id="myMenu2">
                            <a href="{{route('/')}}" class="navbar-brand"><img src="{{asset('/')}}/user-asset/images/logo.png" alt="logo" class="logo-img"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
                                <span class="fa fa-bars fa-1x text-muted"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="myMenu">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                                    <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About Us</a></li>
                                    <li class="nav-item"><a href="{{url('/packages')}}" class="nav-link">Packages</a></li>
                                    <li class="nav-item"><a href="{{url('/hotels')}}" class="nav-link">Hotels</a></li>
                                    {{--<li class="nav-item"><a href="" class="nav-link">Gallery</a></li>--}}
                                    <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                                    <li class="nav-item"><a href="{{url('/gallery')}}" class="nav-link">Gallery</a></li>


                                    @if(session('visitorID'))
                                        <li class="nav-item"><a href="#" onclick="event.preventDefault();
                                    document.getElementById('SignOff').submit();
                                    " class="nav-link">sIGN OUT</a></li>

                                    @else
                                        <li class="nav-item"><a href="{{route('visitor-login')}}" class="nav-link">LOGIN</a></li>
                                        <li class="nav-item"><a href="{{route('visitor-signup')}}" class="nav-link">SGN UP</a></li>

                                    @endif

                                    <form id="SignOff" action="{{route('visitor-signout')}}" method="post">
                                        @csrf
                                    </form>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
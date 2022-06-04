@extends('user-panel.master')

@section('title')
    {{$title}}
@endsection
@section('body')

    @include('user-panel.common.special-discount')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
                    <div class="text-center text-dark">
                        <h3>Find the Adventure of a lifetime {{session('visitorID')}} {{session('visitorName')}}</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>” The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.” ~</p>
                    </div>
                </div>
            </div>
            <div class="about-section-bg mt-3 mb-3">
                <div class="row">
                    <div class="offset-2 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2">
                        <div class="text-white">
                            <form action="{{route('search_destination')}}" id="find_form" method="post">
                                @csrf
                                <div>
                                    <div>Where to go!</div>
                                    <input type="text" class="form-control form-control-md" name="search" required="required" placeholder="Keyword here">
                                </div>
                                <div class="text-center pt-3">
                                    <button type="submit" class="btn btn-info btn-block">Find</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Popular Destination</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>"The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart. ~ "</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($packages as $package)
                    <a href="{{url('/packages')}}">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="">
                                <img src="{{$package->package_image}}" style="height: 200px; width: 250px">
                            </div>
                            <div class="transport-header pt-2">
                                <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">{{$package->package_name}}</h5>
                            </span>
                                </a>
                            </div>
                        </div>
                    </a>
                    @endforeach

            </div>


        </div>
    </section>







    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Other issues we can help you with</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>“Travel doesn't become adventure until you leave yourself behind” </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('')}}/user-asset/images/bus.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="http://www.busbd.com.bd/" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Bus Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('')}}/user-asset/images/train.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="https://www.esheba.cnsbd.com/" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Rail Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-img">
                        <img src="{{asset('')}}/user-asset/images/ship.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="https://www.shohoz.com/launch/" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Cruise Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('')}}/user-asset/images/plane.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="https://www.cheapflights.ca/" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Plane Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-xs-12 mt-3 pt-3 pb-3">
                    <div class="text-dark">
                        <h3>Did not find your Package?<br>
                            Feel free to ask us.<br>
                            We‘ll make it for you </h3>
                    </div>
                    <div class="text-muted">
                        <!--<p>”All you need is the plan, the road map, and the courage to press on to your destination." ~ Earl</p>-->
                        @if(session('visitorID'))
                            <a href="{{route('visitor-package')}}" type="button" class="btn btn-secondary">Request For Package</a>
                            @else
                        You must need to login to perform this action!
                            <a href="{{route('visitor-package')}}" type="button" class="btn btn-secondary disabled">Request For Package</a>
                            @endif
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-xs-12 pt-3 pb-3">
                    <img src="{{asset('')}}/user-asset/images/Panam%20City.jpg" alt="image" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Review From Our Customers</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>"You are what you do, not what you say you'll do." ~ </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="review-user mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="text-light mt-5 mb-2">
                            <h1>Happy Traveler</h1>
                            <p>Best Wishes From Our Happy Customers.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-user-cmmnt">
                            <img src="{{asset('')}}/user-asset/images/rkb-1.jpg" class="stamp-img" alt="stamp">
                            <div class="float-left text-light mt-3">
                                <h5 class="m-0">Rakibul Alam</h5>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                            <div class="float-left p-3 text-light">
                                <p class="text-justify">"The agency’s understanding of customer requirement is unparalleled in the industry."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-5">
                        <div class="review-user-cmmnt mt-5">
                            <img src="{{asset('')}}/user-asset/images/IMG_0528.jpg" class="stamp-img" alt="stamp">
                            <div class="float-left text-light mt-3">
                                <h5 class="m-0">Rakibul Alam</h5>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                            <div class="float-left p-3 text-light">
                                <!--<p class="text-justify">"The agency’s understanding of customer requirement is unparalleled in the industry."</p>-->
                                <p class="text-justify">"Le destino is simply the best out there. I have used their service multiple times and was completely satisfied every time. The whole TBBD team was really friendly and forthcoming for all our needs. "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('user-panel.master')

@section('title')
    La destino -Packages
@endsection

@section('body')
    {{--@include('user-panel.common.special-discount')--}}


    {{--<section>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">--}}
                    {{--<div class="text-center text-dark">--}}
                        {{--<h3>Today’s Hot Deals</h3>--}}
                    {{--</div>--}}
                    {{--<div class="text-muted text-center">--}}
                        {{--<p>”We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to."</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--<section>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">--}}
                    {{--<div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="2000">--}}

                        {{--<ol class="carousel-indicators">--}}
                            {{--<li data-target="#mySlider" data-slide-to="0"></li>--}}
                            {{--<li data-target="#mySlider" data-slide-to="1"></li>--}}
                            {{--<li data-target="#mySlider" data-slide-to="2"></li>--}}
                            {{--<li data-target="#mySlider" data-slide-to="3"></li>--}}
                        {{--</ol>--}}

                        {{--<div class="carousel-inner">--}}
                            {{--<div class="carousel-item active">--}}
                                {{--<img src="{{asset('/')}}/user-asset/images/cox1.jpg" alt="1" class="img-responsive"/>--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--<div class="text-white slider-cap">--}}
                                        {{--<h1>Cox's Bazar</h1>--}}
                                        {{--<p>Longest Sea Beach In The World!</p>--}}
                                        {{--<a href="">Stating from 6000tk</a>--}}
                                    {{--</div>--}}
                                    {{--<!--<input type="button" class="btn btn-info btn-sm" value="Starting from 6000tk.">-->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="carousel-item">--}}
                                {{--<img src="{{asset('/')}}/user-asset/images/cox2.jpg" alt="2" class="img-responsive"/>--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--<div class="text-light slider-cap">--}}
                                        {{--<h1>Saint Martin</h1>--}}
                                        {{--<p>Blue Island Known As Mysterious Island!</p>--}}
                                        {{--<a href="">Starting from 6000tk</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="carousel-item">--}}
                                {{--<img src="{{asset('/')}}/user-asset/images/kap1.jpg" alt="3" class="img-responsive"/>--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--<div class="text-white slider-cap">--}}
                                        {{--<h1>Kaptai</h1>--}}
                                        {{--<p>Land of Colorful Water!</p>--}}
                                        {{--<a href="">Stating from 6000tk</a>--}}
                                    {{--</div>--}}
                                    {{--<!--<input type="button" class="btn btn-info btn-sm" value="Starting from 6000tk.">-->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="carousel-item">--}}
                                {{--<img src="{{asset('/')}}/user-asset/images/shy1.jpg" alt="4" class="img-responsive"/>--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--<div class="text-light slider-cap">--}}
                                        {{--<h1>Shylet</h1>--}}
                                        {{--<p>The Beauty In the Green!</p>--}}
                                        {{--<a href="">Stating from 6000tk</a>--}}
                                    {{--</div>--}}
                                    {{--<!--<input type="button" class="btn btn-info btn-sm" value="Starting from 6000tk.">-->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a href="#mySlider" class="carousel-control-prev" data-slide="prev">--}}
                            {{--<span class="carousel-control-prev-icon"></span>--}}
                        {{--</a>--}}
                        {{--<a href="#mySlider" class="carousel-control-next" data-slide="next">--}}
                            {{--<span class="carousel-control-next-icon"></span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section id="choice">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3 id="rakibul">Upcoming Tour Packages</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>”All you need is the plan, the road map, and the courage to press on to your destination." ~ Earl</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="packages">
        <div class="container">
            @foreach($packages as $package)
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-3 pb-3">
                    <img src="{{asset($package->package_image)}}" class="offer-img"/>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-xs-12 pt-3 pb-3">
                    <div>
                        <p class="text-danger">Date: {{$package->package_deadline}}</p>
                        <h6>Start with {{$package->package_price}}</h6>
                        <h3>{{$package->package_name}}</h3>
                        <p class="text-muted">1 person/4 nights/3 star hotel</p>
                        <div class="fav-star">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-half text-warning"></i>
                        </div>
                        <p>{{$package->package_description}}</p>
                        {{--<p class="text-justify">Bandarban is in Chittagong division and located in southeastern Bangladesh. It is one the most attractive travel destination in Bangladesh for its adventurous characteristics and heavenly scenic beauty. This eventually gets really hard to leave if anyone visits Bandarban. The scenic beauty will undoubtedly captivate your soul. Bandarban includes the three highest peak of Bangladesh — Tahjindong (or Bijoy), Mowdok Mual (or Saka Haphong) and Keokradong. Anyone can easily hike through the jungle and hilly rivers to win any of these three god’s creations. There are so many waterfalls hidden through the hills of Bandarban would appear in your hiking. The exotic offerings such as foods, tribal handicrafts etc from the tribal people will delight your heart. Meanwhile you can easily experience the tribal culture very closely.</p>--}}
                        @if(session('visitorID'))
                            <form action="{{route('save-comment')}}" method="post">
                                @csrf
                                <input type="hidden" name="package_id" value="{{$package->id}}">
                                <input type="hidden" name="commentor_id" value="{{session('visitorID')}}">
                                <input type="hidden" name="commentor_name" value="{{session('vaisitorName')}}">
                                <input type="hidden" name="commentor_email" value="{{session('visitorEmail')}}">
                                <textarea name="commentor_comment" rows="5" class="form-control"></textarea>
                                <br/>
                                <input type="submit" name="cmt_btn" class="btn btn-info" value="Comment">
                                <br/>
                            </form>
                        @else
                            PLease login to comment

                        @endif


                          {{--//For User Comment Option --}}

                        @foreach($comments as $comment)
                            @if($comment->package_id == $package->id)
                                <div style="border: 1px solid forestgreen">
                                    <div>Name: {{$comment->commentor_name}}</div>
                                    <hr/>
                                    <div>Message: {{$comment->commentor_comment}}</div>
                                    <br/>
                                    <div>Time: {{$comment->created_at}}</div>
                                </div>
                            @else
                                @endif
                        @endforeach

                          {{--//For User Comment Option--}}

                        {{--<a href="" class="btn btn-outline-secondary btn-sm">Enroll Me!</a>--}}
                        {{--<span>Enroll today and get <del class="text-danger">30% off!!</del></span>--}}

                    </div>
                </div>
            </div>
                @endforeach

        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
                    <div class="text-center text-dark">
                        <h3>Find the Adventure of a lifetime {{session('visitorID')}} {{session('visitorName')}}</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>” The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.” ~ Marcel Proust</p>
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

    {{--<section>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="text-center text-dark">--}}
                        {{--<h3>Find the Adventure of a lifetime</h3>--}}
                    {{--</div>--}}
                    {{--<div class="text-muted text-center">--}}
                        {{--<p>” The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.” ~ Marcel Proust</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="about-section-bg mt-3 mb-3">--}}
                {{--<div class="row">--}}
                    {{--<div class="offset-2 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2">--}}
                        {{--<div class="text-white">--}}
                            {{--<form action="#" id="find_form" method="post">--}}
                                {{--<div>--}}
                                    {{--<div>Where to go!</div>--}}
                                    {{--<input type="text" class="form-control form-control-md" required="required" placeholder="Keyword here">--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--<div>Adventure type:</div>--}}
                                    {{--<select name="adventure" id="adventure" class="form-control form-control-md">--}}
                                        {{--<option>Hill</option>--}}
                                        {{--<option>Sea</option>--}}
                                        {{--<option>Waterfall</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--<div>Min price</div>--}}
                                    {{--<select name="min_price" id="min_price" class="form-control form-control-md">--}}
                                        {{--<option>--Enter a Price---</option>--}}
                                        {{--<option>6000 tk</option>--}}
                                        {{--<option>7000 tk</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                    {{--<div>Max Price</div>--}}
                                    {{--<select name="max_price" id="max_price" class="form-control form-control-md">--}}
                                        {{--<option>--Enter a Price---</option>--}}
                                        {{--<option>6000 tk</option>--}}
                                        {{--<option>7000 tk</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                    {{--<div>Trip Duration</div>--}}
                                    {{--<select name="max_price" id="duration" class="form-control form-control-md">--}}
                                        {{--<option>--Choose a Package--</option>--}}
                                        {{--<option>2 day & 3 night</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="text-center pt-3">--}}
                                    {{--<button type="button" class="btn btn-info btn-block">Find</button>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


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
                        <button type="button" class="btn btn-secondary">Request For Package</button>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-xs-12 pt-3 pb-3">
                    <img src="{{asset('/')}}/user-asset/images/Panam%20City.jpg" alt="image" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
@endsection




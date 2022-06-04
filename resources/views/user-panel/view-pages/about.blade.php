@extends('.user-panel.master')

@section('title')
    La destino - About
@endsection


@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="p-3">
                        <img src="{{asset('/')}}/user-asset/images/whower.jpg" alt="developer-image" class="img-responsive">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-xs-12">
                    <div>
                        <div class="pt-3">
                            <div class="text-uppercase">
                                <h1>Who We are?</h1>
                            </div>
                            <div>
                                <p class="text-justify">
                                    <span class="text-muted"><b>Le Destino</b></span> is a family-owned tour operator and travel agency located in Dhaka, Bangladesh.<br><br>
                                    We specialize in tours to Bangladesh but are always expanding and enhancing our wide range of offers, as well as adding new and exciting tours of Nepal, Bhutan and Southern Asia.<br><br>
                                    <span class="text-muted"><b>Le Destino</b></span> was founded in 28th November,2019 by <i class="text-muted">Rakibul Alam</i> and since that humble beginning it has grown into a trusted resource that has millions of people better enjoy their travel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" style="position: relative">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div>
                        <div class="pt-3">
                            <div class="text-uppercase">
                                <h1>What We do?</h1>
                            </div>
                            <div>
                                <p class="text-justify">
                                    We planned time-consuming and complicated process. We do simplify this process for our customers in addition to providing consultation services and entire travel packages. We also book flights, cruises, rental cars and hotels, as well as resort stays and events. We also provide top class security for our clients during trip.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="p-3">
                        <img src="{{asset('/')}}/user-asset/images/activities.png" alt="developer-image" class="img-responsive">
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="p-3">
                        <img src="{{asset('/')}}/user-asset/images/vision_ss.jpg" alt="developer-image" class="img-responsive">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="pt-3">
                        <div class="text-uppercase">
                            <h1>What is our vision?</h1>
                        </div>
                        <div class="text-justify">
                            <p>To be leading Travel Agency in the travel industry providing efficient and effective services to our customers</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="pt-3">
                        <div class="text-uppercase">
                            <h1>What is our mission?</h1>
                        </div>
                        <div class="text-justify">
                            <!--<p>To be leading Travel Agency in the travel industry providing efficient and effective services to our customers</p>-->
                            <p>To offer our customers the best, most unforgettable travel experience of their lives!</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="p-3">
                        <img src="{{asset('/')}}/user-asset/images/mission-900x450.jpg" alt="developer-image" class="img-responsive">
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center text-dark">
                        <h3>Other issues we can help you with</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>“Travel doesn't become adventure until you leave yourself behind” ~ Matry Rubin</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('/')}}/user-asset/images/bus.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Bus Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('/')}}/user-asset/images/train.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Rail Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-img">
                        <img src="{{asset('/')}}/user-asset/images/ship.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Cruise Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('/')}}/user-asset/images/plane.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
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
@endsection
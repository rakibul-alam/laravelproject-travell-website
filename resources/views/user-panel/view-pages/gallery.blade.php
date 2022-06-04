@extends('.user-panel.master')

@section('title')
    {{$title}} -Gallery Page
@endsection
@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>We Love Share Moments</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>"The nice thing about the gallery shows is that without having to pay any money you can just go and see it." ~</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="offset-2 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12 offset-2 gallery-body">
                    <div class="gallery-body-center test1"></div>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>What's New In Features</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>"You are what you do, not what you say you'll do." ~ </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-3 pb-3">--}}
                    {{--<div class="text-center mt-3">--}}
                        {{--<h1>E-token</h1>--}}
                        {{--<img src="{{asset('/')}}/font-asset/images/api-token.png" class="img-responsive">--}}
                        {{--<p>Currently our team are working on this.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-3 pb-3">--}}
                    {{--<div class="text-center mt-3">--}}
                        {{--<h1>Online Payment</h1>--}}
                        {{--<img src="{{asset('/')}}/font-asset/images/online.jpg" class="img-responsive">--}}
                        {{--<p>We are adding this in this le destino for time saving.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection
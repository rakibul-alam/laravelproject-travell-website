@extends('user-panel.master')

@section('title')

    La Destino - Contact page
@endsection

@section('body')
    <section>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center mt-3 mb-3" style="height: 450px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8916834636293!2d90.39277201445586!3d23.751241694662266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8981edba66f%3A0xbb0d31f3350fcc61!2sRadisson+Digital+Technologies+Ltd!5e0!3m2!1sen!2sbd!4v1552876164984" width="800" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.902415786054!2d90.39107871456174!3d23.750859034589052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd535e2469%3A0xd144b1293fb0f720!2sBDBL+Bhaban%2C+12%2C+Kazi+Nazrul+Islam+Ave%2C+Dhaka+1215!5e0!3m2!1sen!2sbd!4v1527710357462" width="800px" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>--}}
                </div>
            </div>
        </div>
    </section>


    <section style="background-color:rgba(250,250,250,0.8); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="float-left mr-3">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <div class="">
                            <h6>BDBL BHABAN, KAWRANBAZAR</h6>
                            <p>
                                Kazi Nazrul Islam Avenue, Dhaka-1215
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="float-left mr-3">
                            <i class="fa fa-phone fa-rotate-90 fa-2x"></i>
                        </div>
                        <div class="ml-2">
                            <h6>01677022376</h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="float-left mr-3">
                            <i class="fa fa-envelope-open fa-2x"></i>
                        </div>
                        <div class="ml-2">
                            <h6>support@ladestino.com</h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <form class="form-control" id="myForm" action="{{route('new-contact')}}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input name="user_name" placeholder="Enter your name" required="" type="text" class="form-control form-control-md mt-3">

                                <input name="user_email" placeholder="Enter email address" required="" type="email" class="form-control form-control-md mt-3">

                                <input name="user_subject" placeholder="Enter subject" required="" type="text" class="form-control form-control-md mt-3 mb-3">
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="form-control mt-3" name="user_message" placeholder="Enter Messege" required=""></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="btn btn-primary" style="float: right;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
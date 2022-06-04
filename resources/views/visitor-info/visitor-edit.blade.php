@extends('.user-panel.master')


@section('title')
    Visitor Page

@endsection



@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; color:#2176bd;">{{$visitor->visitor_name}} Visitor edit</h1>

                <a href="{{route('visitor-signup')}}" class="btn btn-dark text-white">Add Visitor</a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{route('visitor-view')}}" class="btn btn-dark text-white">View Visitor</a>
            </div>
        </div>
    </div>
    <br/>


    <form action="{{route('visitor-update')}}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>





                <div class="col-md-8">
                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Name: </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="visitor_name" placeholder="Enter Your Name: " value="{{$visitor->visitor_name}}"/>
                            <input type="hidden" readonly class="form-control" name="id" placeholder="Enter Your Name: " value="{{$visitor->id}}"/>
                            {{--<input type="text" class="form-control" name="visitor_name" value="{{}}"--}}

                        </div>
                    </div>


                    <br/>

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Email: </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="visitor_email" placeholder="Enter Your Email: " value="{{$visitor->visitor_email}}"/>
                        </div>
                    </div>


                    <br/>

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Contact: </label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="visitor_contact" placeholder="Enter Your Contact: " value="{{$visitor->visitor_contact}}"/>
                        </div>
                    </div>

                    <br/>



                    <div class="input-group row">
                        <div class="col-md-12 text-center">
                            <input type="submit" name="btn" value="Update Info" class="btn btn-info">
                        </div>
                    </div>
                    <br/>

                </div>








                <div class="col-md-2"></div>
            </div>
        </div>
    </form>




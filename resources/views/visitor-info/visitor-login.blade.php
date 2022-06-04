@extends('.user-panel.master')


@section('title')
    Visitor Page

@endsection



@section('body')

    <br/>
    <br/>
    <br/>


    <h1 style="text-align: center;color:#2176bd;">Visitor Login</h1>
    <br/>

    <h3>{{Session::get('message')}}</h3>

    <form action="{{route('visitor-remember')}}" method="post">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>




                <div class="col-md-8">

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Email: </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="visitor_email" placeholder="Enter Your Email: "/>
                        </div>
                    </div>



                    <br/>

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Password: </label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="visitor_password" placeholder="Confirm Your Password: "/>
                        </div>
                    </div>


                    <br/>

                    <div class="input-group row">
                        <div class="col-md-12 text-right">
                            <input type="submit" name="btn" value="Login" class="btn btn-info">
                        </div>
                    </div>

                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>

    </form>


@endsection

@extends('.user-panel.master')


@section('title')
    Visitor Page

@endsection



@section('body')

    <br/>
    <br/>
    <br/>


    <h1 style="text-align: center;color:#2176bd;">Visitor SignUp</h1>
    <br/>

    <form action="{{route('visitor-save')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>




                <div class="col-md-8">
                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Name: </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="visitor_name" placeholder="Enter Your First Name: "/>
                        </div>
                    </div>


                    <br/>

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Email: </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="visitor_email" placeholder="Enter Your Email: "/>
                        </div>
                    </div>


                    <br/>


                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Image: </label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="visitor_image"/>
                        </div>
                    </div>

                    <br/>

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Password: </label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="visitor_password" placeholder="Enter Your Password: "/>
                        </div>
                    </div>


                    <br/>


                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Re - Password: </label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Enter Your C. Password: "/>
                        </div>
                    </div>


                    <br/>

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Contact: </label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="visitor_contact" placeholder="Enter Your Contact: "/>
                        </div>
                    </div>


                    <br/>

                    <div class="input-group row">
                        <label class="col-md-3 col-form-label">Visitor Address: </label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="visitor_address" rows="3" placeholder="write your address"></textarea>
                        </div>
                    </div>


                    <br/>

                    <div class="input-group row">
                        <div class="col-md-12 text-right">
                            <input type="submit" name="btn" value="Submit" class="btn btn-info">
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
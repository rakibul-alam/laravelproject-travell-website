@extends("layouts.app")
@section("content")

    <div class="row">
        <div class="col-md-8 justify-content-center">

            <div class="card">
                <div class="card-header bg-primary">my test email</div>

             <div class="card-body">
                 <form method="post" action="">
                     @csrf

                     <div class="form-group row">
                         <label for="subject" class="col-sm-4 col-form-label
                                text-md-right"></label>

                         <div class="col-md-6">
                             <input id="subject" type="subject" class="form-control{{
                             $errors->has('subject')? 'is-invalid': ''
                             }}" name="email" value="{{old('email')}}" required outofocus>
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="email" class="col-sm-4 col-form-label text-md-right">Message</label>

                         <div class="col-md-6">
                             <textarea name="message" id="" cols="30" rows="5"></textarea>
                         </div>
                     </div>



                     <div class="form-group ">
                         <div class="col-md-8 offset-md-4">

                         </div>
                     </div>

                 </form>
             </div >
            </div>
        </div>
    </div>
@endsection
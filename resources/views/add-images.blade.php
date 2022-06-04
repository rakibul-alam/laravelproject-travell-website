



<?php
/**

 */?>
<!---->
{{--@extends('.admin-panel.admin-dashboard.admin-master')--}}



{{--@section('title')--}}
    {{--Event Configuration--}}
{{--@endsection--}}



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
        label{
            font-weight: bold;
        }
    </style>

    <div class="p-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-secondary font-weight-bold">Gallery Configuration</h2>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        </div>
        <br/>

        <form action="{{route('new-images')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group row">
                <div class="col-md-1"></div>
                <label class="col-md-3">Event Image: </label>
                <div class="col-md-7">
                    <input type="file" name="multiple_images[]" multiple class="-file-upload" id="gallery-photo-add" required>
                    {{--<small class="text-warning font-weight-bold">Slider Image size W:1024px*H:253px</small>--}}
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="input-group row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="gallery"></div>
                    <script>
                        $(function() {
                            // Multiple images preview in browser
                            var imagesPreview = function(input, placeToInsertImagePreview) {

                                if (input.files) {
                                    var filesAmount = input.files.length;

                                    for (i = 0; i < filesAmount; i++) {
                                        var reader = new FileReader();

                                        reader.onload = function(event) {
                                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).attr('height',125);
                                        }

                                        reader.readAsDataURL(input.files[i]);
                                    }
                                }
                            };

                            $('#gallery-photo-add').on('change', function() {
                                imagesPreview(this, 'div.gallery');
                            });
                        });
                    </script>
                </div>
                <div class="col-md-4"></div>
            </div>

            <br/>

            <div class="input-group row">
                <div class="col-md-2"></div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Info">
                </div>
                <div class="col-md-1"></div>
            </div>
        </form>
    </div>


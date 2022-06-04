@extends('.admin-dashboard.master')



@section('body')
    <style>
        label{
            font-weight: bold;
            color: #2176bd;
        }
    </style>
    <div>
        <h2 class="text-center text-info">Create A Package Under Following Category</h2>
    </div>

    <div class="p-3">
        <span class="text-success">
                <span class="text-danger">{{Session::get('message')}}</span>

        </span>
    </div>

    <div>
        <form action="{{route('save-package')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="p-5">
                <div>
                    <label>Category Name: </label>
                    <select class="form-control" name="package_category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>

                <br/>
                <div>
                    <label>Package Name: </label>
                    <input type="text" name="package_name" placeholder="Write Package Name" class="form-control"/>
                    <span class="text-danger">{{$errors->has('package_name')? $errors->first('package_name') :' '}}</span>
                </div>
                <br/>

                <div>
                    <label>Package Image: </label>
                    <input type="file" name="package_image" class="form-control"/><span>Input An Image!</span>
                </div>
                <br/>

                <div>
                    <label>Package Price: </label>
                    <input type="number" name="package_price" placeholder="Write Package Price" maxlength="5" min="5000" max="50000" class="form-control"/>
                    <span class="text-danger">{{$errors->has('package_price')? $errors->first('package_price') :' '}}</span>
                </div>
                <br/>

                <div>
                    <label>Package Deadline: </label>
                    <input type="date" name="package_deadline" class="form-control"/><span>Example: 10/30/2019</span>
                </div>
                <br/>

                <div>
                    <label>Package Reporting Date: </label>
                    <input type="date" name="package_rdate" class="form-control"/><span>Example: 10/30/2019</span>
                </div>
                <br/>

                <div>
                    <label>Package Description: </label>
                    <textarea rows="5" name="package_description" placeholder="Write Description" class="form-control"></textarea>
                    <span class="text-danger">{{$errors->has('package_description')? $errors->first('package_description') :' '}}</span>
                </div>

                <br/>

                <div>
                    <label>Package Publication: </label>
                    <label style="color: black"><input type="radio" name="package_status" value="1"> Published</label>
                    <label style="color: black"><input type="radio" name="package_status" value="0" checked> Unpublished</label>
                </div>

                <br/>

                <div class="text-right">
                    <input type="submit" name="package_btn" value="Save Info" class="btn btn-info">
                </div>

                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </form>
    </div>


@endsection
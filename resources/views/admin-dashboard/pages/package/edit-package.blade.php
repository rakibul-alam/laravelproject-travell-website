@extends('.admin-dashboard.master')


@section('title')
    Tourplan2

@endsection

@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; color:#2176bd;">{{$package->package_name}}package edit</h1>

                <a href="{{route('create-package')}}" class="btn btn-dark text-white">create package</a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{route('manage-package')}}" class="btn btn-dark text-white">manage package</a>
            </div>
        </div>
    </div>
    <br/>

        <form action="{{route('update-package')}}" method="post" enctype="multipart/form-data">
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
                    <input type="text" name="package_name" placeholder="Write Package Name" class="form-control" value="{{$package->package_name}}"/>
                    <input type="hidden" name="id" class="form-control" value="{{$package->id}}"/>
                </div>
                <br/>

                <div>
                    <label>Package Image: </label>
                    <input type="file" name="package_image" class="form-control"/><span>Input An Image!</span>
                </div>
                <br/>
                
                
                <div>
                    <img src="{{asset($package->package_image)}}" style="width: 300px;height: 250px">
                </div>
                <br/>

                <div>
                    <label>Package Price: </label>
                    <input type="number" name="package_price" placeholder="Write Package Price" maxlength="5" value="{{$package->package_price}}" min="5000" max="50000" class="form-control"/>
                </div>
                <br/>

                <div>
                    <label>Package Deadline: </label>
                    <input type="date" name="package_deadline" value="{{$package->package_deadline}}"  class="form-control" required/><span>Example: 10/30/2019</span>
                </div>
                <br/>

                <div>
                    <label>Package Reporting Date: </label>
                    <input type="date" name="package_rdate" class="form-control" required/><span>Example: 10/30/2019</span>
                </div>
                <br/>

                <div>
                    <label>Package Description: </label>
                    <textarea rows="5" name="package_description" placeholder="Write Description" class="form-control"></textarea>
                </div>

                <br/>

                <div>
                    <label>Package Publication: </label>
                    <label style="color: black"><input type="radio" name="package_status" value="1"> Published</label>
                    <label style="color: black"><input type="radio" name="package_status" value="0" checked> Unpublished</label>
                </div>

                <br/>

                <div class="text-right">
                    <input type="submit" name="package_ubtn" value="Update Info" class="btn btn-info">
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
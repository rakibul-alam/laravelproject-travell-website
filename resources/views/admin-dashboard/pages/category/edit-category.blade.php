@extends('.admin-dashboard.master')


@section('title')
    Tourplan2

@endsection

@section('body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; color:#2176bd;">category edit</h1>

                <a href="{{route('create-category')}}" class="btn btn-dark text-white">create category</a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{route('manage-category')}}" class="btn btn-dark text-white">manage category</a>
            </div>
        </div>
    </div>
    <br/>

    <form action="{{route('update-category')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="p-5">
            <div>
                <label>Category Name: </label>
                <select class="form-control" name="category_name">
                    @foreach($categories as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <br/>


            <div>
                <label>Category Description: </label>
                <textarea rows="5" name="category_description" placeholder="Write Description" class="form-control">{{$category->category_description}}</textarea>
                <input type="hidden" name="id" value="{{$category->id}}">
            </div>

            <br/>

            <div>
                <label>Category Status: </label>
                <textarea rows="5" name="category_status" placeholder="Write Status" class="form-control">{{$category->category_status}}</textarea>

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
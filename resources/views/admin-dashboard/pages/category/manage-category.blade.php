@extends('.admin-dashboard.master')



@section('body')

    <div>
        <h2 contenteditable="true" class="text-center" style="color: #856404">Manage {{$total_categories}} Categories</h2>
    </div>

    <div class="p-3">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td><p style="text-align: justify">
                            {{$category->category_description}}
                        </p>
                    </td>
                    <td><a href="{{route('category-status-change',['id' => $category->id])}}">{{$category->category_status==0? 'Deactivated': 'Activated'}}</a></td>
                    <td>
                        <a href="{{route('edit-category',['id' =>$category->id])}}"><i class="fa fa-edit fa-2x text-dark"></i></a>
                        <br/>
                        <span class="font-weight-bold text-info"> <i class="fa fa-slash"></i> </span>
                        <br/>
{{--                        <a href="{{route('delete-category',['id' =>$category->id])}}"><i class="fa fa-trash fa-2x text-danger"></i></a>--}}
                        <a href="#" onclick="event.preventDefault();
                                var check=confirm('Are you sure??');
                                if(check){
                                document.getElementById('deleteForm').submit();

                                }
                                "><i class="fa fa-trash text-danger fa-2x"></i></a>
                        <form action="{{route('delete-category')}}" method="post" id="deleteForm">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>


@endsection
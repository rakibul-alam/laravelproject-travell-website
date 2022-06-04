@extends('.admin-dashboard.master')


@section('body')

    <div class="p-3">
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Category Name</th>
                <th>Package Name</th>
                <th>Action</th>
            </tr>
            @php($i=1)
            @foreach($packages as $package)
                <tr>
                    <td>{{$i++}}</td>
                    <td>
                        <a href="{{route('category-details',['id'=>$package->categoryrelation->id])}}">
                            {{$package->categoryrelation->category_name }}

                        </a>
                    </td>
                    <td>
                        <a href="{{route('package-details',['id'=>$package->id])}}">
                            {{$package->package_name}}
                        </a>
                    </td>

                    <td>
                        <a href="{{route('edit-package',['id'=>$package->id])}}">
                        Edit
                        </a>


                    <span> / </span>


                    <a href="#" onclick="event.preventDefault();
                        var check=confirm('Are you sure??');
                        if(check){
                            document.getElementById('deleteForm').submit();

                           }

                        ">DELETE</a>

                    <form action="{{route('delete-package')}}" method="post" id="deleteForm">
                        @csrf
                        <input type="text" name="id" value="{{$package->id}}" hidden>
                    </form>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    @endsection
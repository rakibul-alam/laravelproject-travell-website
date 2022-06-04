
<h1 style="text-align: center; color:#2176bd;">View {{$total_visitors}} Visitors Info</h1>

<a href="{{route('visitor-signup')}}" class="btn">Add Visitor</a>
&nbsp;&nbsp;&nbsp;
<a href="{{route('visitor-view')}}" class="btn">View Visitor</a>


<table border="3" style="width: 100%">
    <br/>
    <tr>
        <th>Id</th>
        <th>Info</th>
        <th>Image</th>
        <th>Contact no</th>
        <th>Address</th>
        {{--<th>Enc Pass</th>--}}
        <th>Action</th>

    </tr>
    @foreach($visitors as $visitor)
        <tr style="text-align: center">
            <td>{{$visitor->id}}</td> <br/>
            <td>
                <span>Name:</span>{{$visitor->visitor_name}}
                <br/>
                <span>email:</span>{{$visitor->visitor_email}}
            </td>
            <td><img src="{{$visitor->visitor_image}}" style="height: 100px; width: 200px"></td>
            <td>{{$visitor->visitor_contact}}</td>
            <td>{{$visitor->visitor_address}}</td>

            <td>
                <a href="{{route('visitor-edit',['id' => $visitor->id])}}">Edit</a>


                <span> / </span>


                <a href="#" onclick="event.preventDefault();
                        var check=confirm('Are you sure??');
                        if(check){
                            document.getElementById('deleteForm').submit();

                           }

                        ">DELETE</a>
                <form action="{{route('visitor-delete')}}" method="post" id="deleteForm">
                    @csrf
                    <input type="text" name="id" value="{{$visitor->id}}" hidden>
                </form>

            </td>
        </tr>
    @endforeach
</table>
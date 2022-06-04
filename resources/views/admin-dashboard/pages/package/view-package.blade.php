@extends('.admin-dashboard.master')

@section('body')

    <h1 class="text-info text-center">View {{$package->package_name}} Category</h1>
    ID: {{$package->id}}

    <br/>


    Name: {{$package->package_name}}
    
    <br/>
    
    
    <img src="{{asset($package->package_image)}}" alt="not linked" style="height: 150px;width: 200px">


    <br/>



    Description: {{$package->package_description}}


    <br/>


    Price: {{$package->package_price}}

    <br/>





    Deadline: {{$package->package_deadline}}


    <br/>


    Status: <a href="{{route('package-status-change',['id'  =>$package->id])}}">{{$package->package_status==1? 'active':'deactive'}}</a>

@endsection


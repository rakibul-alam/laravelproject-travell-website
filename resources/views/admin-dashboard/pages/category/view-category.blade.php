@extends('.admin-dashboard.master')

@section('body')


    <h1 class="text-info text-center">View {{$category->category_name}} Category</h1>

    <br/>
    <span>{{Session::get('message')}}</span>
    <br/>
ID: {{$category->id}}

<br/>


Type: {{$category->category_name}}


<br/>



Description: {{$category->category_description}}


<br/>


Status: <a href="{{route('category-status-change',['id'=>$category->id])}}">{{$category->category_status==1?'active':'deactive'}}</a>

    @endsection


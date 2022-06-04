@extends('admin-dashboard.master')

@section('body')

    <style>
        label{
            font-weight: bold;
            color:#2176bd;
        }
    </style>
    <div>
        <h2 class="text-center text-info">Create A  Category</h2>
    </div>

    <div class="p-5">
        <span class="text-success">{{Session::get('message')}}</span>
    </div>

    <div class="p-5">
       <form action="{{route('save-category')}}" method="post">
           @csrf
           <div>
               <label>Category Name:</label>
               <input type="text" name="category_name" placeholder="write category name " class="form-control"/>
           </div>
           <br>
           <br>

           <div>
               <label>Category Description:</label>
               <textarea rows="5" name="category_description" placeholder="write category description" class="form-control"></textarea>
           </div>

           <br/>
           <br/>

           <div>
               <label>Category Publication:</label>
               <label style="color: black"><input type="radio" name="category_status" value="1">Published</label>
               <label style="color: black"><input type="radio" name="category_status" value="0" checked>Unpublished</label>
           </div>
           <br/>
           <br/>

           <div class="text-right">
               <input type="submit" name="category-btn" value="SaveInfo" class="btn btn-info">
           </div>

           <br/>
           <br/>
           <br/>
           <br/>
           </div>

       </form>
    </div>
    @endsection



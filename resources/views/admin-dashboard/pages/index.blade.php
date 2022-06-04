@extends('.admin-dashboard.master')




@section('body')
    <h3>Message from User</h3>

    <div>
        {{$messages->links()}}
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>

        @foreach($messages as $message)
            <tr>
                <td>{{$message->user_name}}</td>
                <td>{{$message->user_email}}</td>
                <td>{{$message->user_subject}}</td>
                <td>{{$message->user_message}}</td>
            </tr>
            @endforeach
    </table>

    <br>


    <div style="text-align: center">Comment Order Package ID</div>


    <table class="table table-bordered table-striped">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Package ID</th>
            <th>Package Name</th>
            <th>Comment</th>
        </tr>

        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->commentor_name}}</td>
                <td>{{$comment->commentor_email}}</td>
                <td>{{$comment->package_id}}</td>
                <td>{{$comment->packageRelationComment->package_name }}</td>
                <td>{{$comment->commentor_comment}}</td>
            </tr>
        @endforeach
    </table>
    @endsection
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.8 Multiple Image File Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<form action="{{url('multiplefileupload')}}" enctype="multipart/form-data" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Multiple File Select</label>
            <input required type="file" class="form-control" name="images[]" multiple>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
</body>
</html>
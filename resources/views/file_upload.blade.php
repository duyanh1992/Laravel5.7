<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
<form action="{{ route('post_file') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="file_upload[]" multiple>
    <br/>
    <input type="submit" value="upload">
</form>
</body>
</html>

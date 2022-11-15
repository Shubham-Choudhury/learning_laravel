<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download File</title>
</head>
<body>
    {{-- Download Image --}}
    <center>
        <h1>Download File</h1>
        <img src="{{ url('uploads/') }}/{{$file_name}}" alt="Image" width="300px">
        <br>
        <a href="{{ url('uploads/') }}/{{$file_name}}">Download</a><br>
        <a href="{{ route('file_upload') }}">Back</a>
    </center>
</body>
</html>
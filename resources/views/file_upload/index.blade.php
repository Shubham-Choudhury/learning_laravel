<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>
    <center>
        <h1>File Upload</h1>
        <form action="{{ route('file_upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file" required>
            
            <button type="submit">Upload</button>
        </form>
    </center>
</body>
</html>
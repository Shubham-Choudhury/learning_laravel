<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>
        h1{
            text-align: center;
        }
        ul{
            border: 1px solid #ccc;
            padding-right: 5px;
            padding-bottom: 5px;
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    <h1>Web Routes - About</h1>
    <ul>
        <li><a href="{{url('/web-routes')}}">Home</a></li>
        <li><a href="{{route('web-routes.about')}}">About</a></li>
        <li><a href="{{url('web-routes/contact')}}">Contact</a></li>
    </ul>
</body>
</html>
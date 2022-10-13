<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit Form</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form{
            width: 500px;
            height: fit-content;
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 20px;
        }

        .form div{
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .form div label{
            margin-bottom: 10px;
        }

        .form div input{
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form div button{
            height: 40px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .form h2{
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="form">
        <h2>Submit Form</h2>
        <form action="/submit-form" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
                @error('name')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{old('email')}}">
                @error('email')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                @error('password')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
                @error('password_confirmation')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            
            <div>
                <button type="submit">Submit</button>
            </div>
            
        </form>
    </div>
    
</body>
</html>
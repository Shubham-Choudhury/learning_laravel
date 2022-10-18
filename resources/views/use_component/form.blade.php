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
        <form action="/use-component" method="post">
            @csrf
            @php
                $demo = 1;
                $pass = "Password";
            @endphp
            <x-input name="name" type="text" label="Name" :demo=$demo/>
            <x-input name="email" type="email" label="Email"/>
            <x-input name="password" type="password" label="Password" :demo=$pass/>
            <x-input name="password_confirmation" type="password" label="Confirm Password"/>
            
            <div>
                <button type="submit">Submit</button>
            </div>
            
        </form>
    </div>
    
</body>
</html>
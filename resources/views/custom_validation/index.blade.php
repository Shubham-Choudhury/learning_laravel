<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Validation</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #34495e;
        }

        .container{
            width: 500px;
            background: #fff;
            margin: 80px auto;
            padding: 30px 20px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
        }

        .container .card{
            width: 100%;
            margin-bottom: 20px;
        }

        .container .card h1{
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .card .form{
            width: 100%;
        }

        .card .form div{
            width: 100%;
            margin-bottom: 20px;
        }

        .card .form div label{
            display: block;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .card .form div input{
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            outline: none;
            border-radius: 5px;
            transition: .3s;
        }

        .card .form div input:focus{
            border-color: #3498db;
        }

        .card .form div button{
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: none;
            outline: none;
            border-radius: 5px;
            background: #3498db;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        .card .form div button:hover{
            background: #002239;
        }

        .card .form div .error{
            color: #e74c3c;
            font-size: 12px;
        }

        .card .alert{
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #e74c3c;
            border-radius: 5px;
            color: #e74c3c;
            font-size: 12px;
        }

        .card .alert h3{
            margin: 0;
            padding: 0;
            text-align: center
        }

        .card .alert.success{
            border-color: #2ecc71;
            color: #2ecc71;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            @if (session('success'))
                <div class="alert success">
                    <h3>{{ session('success') }}</h3>
                </div>
            @endif
            @if (session('error'))
                <div class="alert">
                    <h3>{{ session('error') }}</h3>
                </div>
            @endif

            <h1>Make Driving Licence</h1>
            <div class="form">
                <form action="{{ route('custom_validation') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="form-control">
                        @error('dob')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
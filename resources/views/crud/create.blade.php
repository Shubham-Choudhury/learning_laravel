<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                background-color: #f1f1f1;
            }
            header {
                background-color: #000;
                color: #fff;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            header h1 {
                font-size: 30px;
            }
            header button {
                padding: 10px;
                background-color: #fff;
                color: #000;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            header a {
                text-decoration: none;
                color: #000;
                font-weight: 500;
            }
            .container {
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
                display: flex;
                justify-content: center;
            }
            form {
                width: 100%;
                max-width: 500px;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
            }
            form h1 {
                font-size: 30px;
                text-align: center;
                margin-bottom: 20px;
            }
            form label {
                display: block;
                margin-bottom: 10px;
            }
            form input {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 20px;
            }
            form textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 20px;
                resize: none;
                overflow: hidden;
            }
            form select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 20px;
            }
            
            form button {
                padding: 10px;
                background-color: #000;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            
        </style>
    </head>
    <body>
        <header>
            <h1>CRUD OPERATION</h1>

            <button><a href="index.html">Home</a></button>
        </header>

        <div class="container">
            <form action="/crud" method="post">
                @csrf
                <h1>Add Student Details</h1>
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" required value="{{old("fname")}}"/>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required />
                </div>
                <div class="form-group">
                    <label for="id">Student Id</label>
                    <input type="text" name="student_id" id="id" class="form-control" placeholder="Create Student Id" required />
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control" placeholder="Enter Address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth" required />
                </div>
                {{-- <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <option value="0">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                </div> --}}

                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>View</title>
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
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .container table {
                width: 100%;
                max-width: 500px;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                margin-bottom: 20px;
            }
            .container table tr {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
                border-bottom: 1px solid #ccc;
                padding-bottom: 10px;
            }
            .sap{
                border-right: 2px solid #ccc;
                padding-right: 20px;
            }
            .container table tr td {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>CRUD OPERATION</h1>

            <button><a href="edit.html">Edit Data</a></button>
        </header>

        <div class="container">
            <table>
                <h1 style="margin-bottom: 10px;">View Data</h1>
                <tr>
                    <th>First Name:</th>
                    <td class="sap">{{$student->first_name}}</td>
                    <th>Last Name:</th>
                    <td>{{$student->last_name}}</td>
                </tr>
                <tr>
                    <th>Student Id:</th>
                    <td>{{$student->student_id}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{$student->email}}</td>
                </tr>
                <tr>
                    <th style="margin-right: 25px;">Address:</th>
                    <td>
                        {{$student->address}}
                    </td>
                </tr>
                <tr>
                    <th>DOB:</th>
                    <td class="sap">{{$student->date_of_birth}}</td>
                    <th>Gender:</th>
                    <td>{{$student->gender}}</td>
                </tr>
            </table>
        </div>
    </body>
</html>

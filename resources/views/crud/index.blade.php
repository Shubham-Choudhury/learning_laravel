<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CRUD OPERATION</title>
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
            table {
                width: 100%;
                background-color: #fff;
                border-radius: 5px;
                overflow: hidden;
            }
            table thead tr {
                background-color: #000;
                color: #fff;
            }
            table thead tr th {
                padding: 10px;
            }
            table tbody tr {
                border-bottom: 1px solid #ddd;
            }
            table tbody tr td {
                padding: 10px;
            }
            table tbody tr td:last-child {
                text-align: center;
            }
            table tbody tr td:last-child a {
                padding: 5px 10px;
                background-color: #000;
                color: #fff;
                border-radius: 5px;
                text-decoration: none;
            }
            table tbody tr td:last-child a:hover {
                background-color: #d1c9c9;
                color: #000;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>CRUD OPERATION</h1>

            <button><a href="add.html">Add Data</a></button>
        </header>

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>1</td>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>
                            <a href="/crud/show/{{$student->student_id}}">View</a>
                            <a href="/crud/{{$student->student_id}}/edit">Edit</a>
                            <a href="delete.html">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>All Students</title>
    <style>
        .all-student{
            margin: 0 auto;
            width: 80%;
        }
        td,th{
            border: 1px solid #dddddd;
            text-align:left;
            padding: 8px;
            
        }
        .actions-column{
            width:200px;
            display: flex;
            text-align:center;
          
        }
        .actions-column a{
            margin-left:5px;
            border:1px solid green;
           
            
        }
    </style>
</head>
<body>
    <div class="all-student">
    <h1>All Students</h1>
    <table>
        <tr>
            <th>SL No</th>
            <th>Student Name</th>
            <th>Class</th>
            <th>Roll No</th>
            <th class="actions-column">Actions</th>
        </tr>
        @foreach($students as $index => $student)
        <tr>
            <td>{{ ($students->currentPage() - 1) * $students->perPage() + $index + 1 }}</td>
            <td>{{$student->student_name}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->roll_number}}</td>
            <td class="actions-column">
                <a href="">Show</a>
                <a href="">Edit</a>
                <form action=""> <a href="">delete</a></form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $students->links()}}
    <!-- {{ $students->links()}} -->
  <!--   {{ $students->links('pagination::bootstrap-5')}} -->

    </div>

    
</body>
</html>
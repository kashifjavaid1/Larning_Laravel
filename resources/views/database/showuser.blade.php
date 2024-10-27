<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="{{'session'}}">Add User</a></h1>
    <h1>List</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operation</th>
        </tr>
        @foreach($user as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td><a href="{{'delete/'.$student->id}}">Delete</a>
            <a href="{{'edit/'.$student->id}}">Edit</a>
        
        </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

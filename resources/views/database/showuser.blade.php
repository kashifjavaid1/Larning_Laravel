<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <title>Document</title>
</head>
<style>
    .w-5.h-5{
        width: 2px;
    }
</style>
<body>
    <h1><a href="{{'session'}}">Add User</a></h1>

    <h1>List</h1>
    <form action="search" method="get">
        <input type="text" placeholder="Search" name="search" value={{@$search}}>
        <button>Search</button>
    </form>
<br><br>
<form action="delete-multiple" method="post">
    @csrf
    <button>Delete</button>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Select</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operation</th>
        </tr>
        @foreach($user as $student)
        <tr>
        <td><input type="checkbox" name="ids[]" value="{{$student->id}}"></td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td><a href="{{'delete/'.$student->id}}">Delete</a>
            <a href="{{'edit/'.$student->id}}">Edit</a>
        
        </td>
        </tr>
        @endforeach
    </table>
    </form>
    {{$user->links()}}
</body>
</html>

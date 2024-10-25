<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Show Data in DataBase</h1>
    @foreach($user as $users)
 <h1>{{$users->name}}</h1>
 <h1>{{$users->email}}</h1>
    @endforeach
</body>
</html>
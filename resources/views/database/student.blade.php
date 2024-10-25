<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student List</h1>
    @foreach($std as $student)
    <h1>{{$student->name}}</h1>
    @endforeach
</body>
</html>
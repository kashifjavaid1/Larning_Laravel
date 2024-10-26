<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>

    <!-- Object ke form mein JSON data access karna -->
    @foreach($std as $student)
        <h2>{{ $student->name->firstname }} {{ $student->name->lastname }}</h2>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Username:</strong> {{ $student->username }}</p>
        <p><strong>Address:</strong> {{ $student->address->city }}, {{ $student->address->street }}, {{ $student->address->zipcode }}</p>
        <hr>
    @endforeach
</body>
</html>

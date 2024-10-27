<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Form</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="userName" value="{{ $data->name ?? '' }}" placeholder="Enter User Name">
        <br><br>
        <input type="email" name="userEmail" value="{{ $data->email ?? '' }}" placeholder="Enter User Email">
        <br><br>
        <input type="text" name="userPhone" value="{{ $data->phone ?? '' }}" placeholder="Enter User Phone Number">
        <br><br>
        <button>Update</button>
     <button><a href="/list">Cancel</a></button>
    </form>
</body>
</html>

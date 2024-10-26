<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    {{session("message")}}
    <form action="login" method="post">
        @csrf
        <input type="text" name="userName" placeholder="Enter User Name">
        <br>
        <br>
        <input type="email" name="userEmail" placeholder="Enter User Email">
        <br>
        <br>
        <input type="text" name="userPhone" placeholder="Enter User Phone Number">
        <br>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>
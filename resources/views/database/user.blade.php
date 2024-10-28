<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>User Form</h1>
    {{session("message")}}
    <h1><a href="list">List</a></h1>
    <form action="login" method="post" >
    <!-- enctype="multipart/form-data" -->
        @csrf
        <input type="text" name="userName" placeholder="Enter User Name">
        <br>
        <br>
        <input type="email" name="userEmail" placeholder="Enter User Email" >
        <br>
        <br>
        <input type="text" name="userPhone" placeholder="Enter User Phone Number">
        <br>
        <!-- <input type="file" name="file"> -->
        <br>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>
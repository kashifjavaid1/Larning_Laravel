<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        width: 300px;
        height: 30px;
        border: 2px solid skyblue;
        color: orange;
        padding-left:10px;
        font-size: 15px;
        font-weight:bold;
    }
    .input_wrapper{
        margin-top: 10px;
    }
</style>
<body>
    <h1>Register Form</h1>
    <form action="add-user" method="post">
        @csrf
        <div class="input_wrapper">
            <input type="text" placeholder="Enter User Name" name="userName">
        </div>
        <div class="input_wrapper">
            <input type="email" placeholder="Enter User Email" name="userEmail">
        </div>
        <div class="input_wrapper">
            <input type="text" placeholder="Enter User City" name="userCity">
        </div>
        <div class="input_wrapper">
            <input type="password" placeholder="Enter User Password" name="userPassword">
        </div>
        <div class="input_wrapper">
            <button>Submit</button>
        </div>
    </form>
</body>
</html>
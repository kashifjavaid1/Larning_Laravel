<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .success {
        background: red;
        color: blue;
        padding: 5px 8px;
       
    }
</style>

<body>
    <h1>Main Page</h1>
    <x-message-banner title="Header Page Components1"/>
    <!-- Sub view file import -->
     <h1>Sub Header View</h1>
    @include('subViews.header')
<br>
    <h1>Inner view</h1>
    @include('subViews.inner',["page"=>"this is a Inner File Page"])

    <br>

    <h3>Components:</h3>
    <!-- component call -->
    <x-message-banner title="Header Page Components2 "/>
</body>
</html>
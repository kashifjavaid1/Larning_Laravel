<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>{{__('welcome.heading')}}</h1>
        <h1>{{__('welcome.heading2')}}</h1>
        <h1>Routing</h1>
        <a href="/home">Home Page</a>
        <br>
        <br>
        <a href="/about">about Page</a>
        <br>
        <br>
        <a href="/name">Users Page</a>
    </div>
    <x-message-banner title="Front page "/>
</body>
</html>
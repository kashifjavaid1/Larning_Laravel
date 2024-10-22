<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
   
    @if($users==='ali')
    <h1>My name is ali</h1>
    @elseif($users==='kashif')
    <h1>My name is kashif</h1>
    @else 
    <h1>Other users</h1>
    @endif
</body>
</html>
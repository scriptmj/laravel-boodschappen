<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <br />
    <div class="container">
        <ul class="list-unstyled">
            <li><a href="{{route('groceries.index')}}">Boodschappen</a></li>
            <li><a href="{{route('groceries.create')}}">Nieuwe boodschap</a></li>
        </ul>
    </div>
    <div class="container">
        @yield ('content')
    </div>
</body>
</html>
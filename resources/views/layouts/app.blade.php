<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <ul>
    <li><a href="/groceries">Boodschappen</a></li>
    <li><a href="/groceries/create">Nieuwe boodschap</a></li>
    </ul>
    @yield ('header')
    @yield ('content')
    @yield ('footer')
</body>
</html>
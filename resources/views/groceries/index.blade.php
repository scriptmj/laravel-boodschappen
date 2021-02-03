

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>Amount</td>
            <td>Price</td>
        </tr>
    @foreach ($groceries as $grocery)
        <tr>
            <td>{{$grocery->name}}</td>
            <td>{{$grocery->amount}}</td>
            <td>{{$grocery->price}}</td>
        </tr>
    @endforeach
    <tr>
    <td colspan="2">Totaal</td>
    <td></td>
    <tr>
    </table>
</body>
</html>
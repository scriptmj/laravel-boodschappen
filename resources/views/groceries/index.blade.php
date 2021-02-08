@extends('../layouts/app')

@section('content')
    <h1>Index</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>Amount</td>
            <td>Price</td>
        </tr>
    @foreach ($groceries as $grocery)
        <tr>
            <td><a href="/groceries/{{$grocery->id}}/edit">{{$grocery->name}}</a></td>
            <td>{{$grocery->amount}}</td>
            <td>{{$grocery->price}}</td>
            <td><button class="glyphicon glyphicon-trash"></button></td>
            <!-- <td><a href="/groceries/{{$grocery->id}}"><span class="glyphicon glyphicon-trash"></span></a></td> -->
        </tr>
    @endforeach
    <tr>
    <td colspan="2">Totaal</td>
    <td></td>
    <tr>
    </table>
    @endsection
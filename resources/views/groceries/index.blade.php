@extends('../layouts/app')

@section('content')
    <h1>Boodschappen</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Aantal</th>
                <th>Prijs</th>
                <th>Aanpassen</th>
                <th>Verwijderen</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($groceries as $grocery)
        <tr>
            <td><p class="text-capitalize">{{$grocery->name}}</p></td>
            <td>{{$grocery->amount}}</td>
            <td>{{$grocery->price}}</td>
            <td><a role="button" class="btn btn-primary glyphicon glyphicon-pencil" href="{{route('groceries.edit', $grocery)}}"></a></td>
            <td>
                <form action="{{route('groceries.destroy', $grocery)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Weet je zeker dat je {{$grocery->name}} wilt verwijderen?')"></button>
                </form>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="2">Totaal</td>
        <td>{{$totalPrice}}</td>
        <td colspan="2"></td>
    <tr>
    </tbody>
    </table>
@endsection
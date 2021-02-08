@extends('../layouts/app')

@section('content')
    <h1>Nieuwe boodschap</h1>

    <form action="\groceries" method="post">
    @csrf
    
    Naam: <br />
    <input type="text" name="name"><br />

    Aantal: <br />
    <input type="number" name="amount"><br />

    Prijs: <br />
    <input type="float" name="price"><br />

    <button type="submit">Invoeren</button>

    </form>
@endsection
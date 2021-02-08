@extends('../layouts/app')

@section('content')
    <h1>Boodschap aanpassen</h1>
    <form action="\groceries\{{$grocery->id}}" method="POST">
    @csrf
    @method('PUT')
    
    Naam: <br />
    <input type="text" name="name" value='{{$grocery->name}}'><br />

    Aantal: <br />
    <input type="number" name="amount" value='{{$grocery->amount}}'><br />

    Prijs: <br />
    <input type="float" name="price" value='{{$grocery->price}}'><br />

    <button type="submit">Invoeren</button>

    </form>
@endsection
@extends('../layouts/app')

@section('content')
    <h1>Nieuwe boodschap</h1>

    <form class="form-horizontal" action="{{route('groceries.store')}}" method="post">
        @csrf
        
        <div class="form-group @error('name') has-error @enderror">
            <label for="groceryName" class="col-sm-1">Naam:</label>
            <div class="col-sm-10">
                <input 
                type="text" 
                name="name" 
                id="groceryName" 
                class="form-control" 
                value= "{{old('name')}}"
                required>

                @error('name')
                <p class="help-block">{{$errors->first('name')}}</p>
                @enderror
            </div>
        </div>

        <div class="form-group @error('amount') has-error @enderror">
            <label for="groceryAmount" class="col-sm-1">Aantal: </label>
            <div class="col-sm-10">
                <input 
                type="number" 
                name="amount" 
                id="groceryAmount" 
                class="form-control" 
                value= "{{old('amount')}}"
                required>

                @error('amount')
                <p class="help-block">{{$errors->first('amount')}}</p>
                @enderror
            </div>
        </div>

        <div class="form-group @error('price') has-error @enderror">
            <label for="groceryPrice" class="col-sm-1">Prijs:</label>
            <div class="col-sm-10">
                <input 
                type="float" 
                name="price" 
                id="groceryPrice" 
                class="form-control" 
                value= "{{old('price')}}"
                required>

                @error('price')
                <p class="help-block">{{$errors->first('price')}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Invoeren</button>

    </form>
@endsection
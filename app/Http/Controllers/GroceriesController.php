<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grocery;

class GroceriesController extends Controller{

    function index(){
        $groceries = Grocery::all();
        return view('groceries\index', [
            'groceries' => $groceries
        ]);
    }

    function create(){
        return view('groceries\create');
    }

    function store(){
        $grocery = new Grocery();
        $grocery->name = request('name');
        $grocery->amount = request('amount');
        $grocery->price = request('price');
        $grocery->save();

        return redirect('/groceries');
    }

    function edit($id){
        $grocery = Grocery::find($id);
        return view('groceries\edit', ['grocery' => $grocery]);
    }

    function update($id){
        $grocery = Grocery::find($id);

        $grocery->name = request('name');
        $grocery->amount = request('amount');
        $grocery->price = request('price');
        $grocery->save();
        
        return redirect('/groceries');
    }

    function destroy(){
        return "Deleting";
    }
}
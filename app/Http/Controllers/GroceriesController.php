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

    }

    function edit(){
        return view('groceries\edit');
    }

    function update(){

    }

    function destroy(){

    }
}
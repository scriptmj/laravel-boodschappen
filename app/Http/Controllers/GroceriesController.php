<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grocery;

class GroceriesController extends Controller{

    function index(){
        //Return the page that shows all groceries. Param: all groceries from database, calculated total price of all groceries.
        $groceries = Grocery::all();
        $totalPrice = $this->calculateTotalGroceryPrice($groceries);
        return view('groceries.index', [
            'groceries' => $groceries,
            'totalPrice' => $totalPrice
        ]);
    }

    function create(){
        //Returns page to create new grocery
        return view('groceries.create');
    }

    function store(){
        //Creates new grocery from user input, inserts into database, and redirects to main page
        Grocery::create($this->validateArticle());

        return redirect(route('groceries.index'));
    }

    function edit(Grocery $grocery){
        //Returns the page to edit an existing grocery. Param: chosen grocery, found by id
        return view('groceries.edit', ['grocery' => $grocery]);
    }

    function update(Grocery $grocery){
        //Updates existing grocery with new data from user input, and redirects to main page
        $grocery->update($this->validateArticle());

        return redirect(route('groceries.index'));
    }

    function destroy(Grocery $grocery){        
        //Deletes chosen grocery from database, and redirects to main page
        $grocery->delete();
        return redirect(route('groceries.index'));
    }

    //Helper functions
    function validateArticle(){
        return request()->validate([
            'name' => 'required|string|min:2',
            'amount' => 'required|integer|gt:0',
            'price' => 'required|numeric|gt:0'
        ]);
    }

    function calculateTotalGroceryPrice($groceryArr){
        $totalCost = 0;
        foreach($groceryArr as $grocery){
            $totalCost += $grocery->price * $grocery->amount;
        }
        return $totalCost;
    }
}
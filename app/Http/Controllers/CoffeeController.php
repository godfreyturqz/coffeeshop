<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//add Coffee model
use App\Models\Coffee;

class CoffeeController extends Controller
{
    public function index() {
        // $coffees = Coffee::all();
        // $coffees = Coffee::orderBy('name', 'asc')->get();
        // $coffees = Coffee::where('name', 'godfrey')->get();
        $coffees = Coffee::latest()->get();
        
        return view('coffees', ['coffees' => $coffees]);
    }
    public function show($id) {
        return view('details', ['id'=> $id]);
    }
}






// public function index() {
//     $coffees = [
//         ['name' => 'caffuccino', 'price' => 15, 'temp' => 'hot'],
//         ['name' => 'americano', 'price' => 10, 'temp' => 'hot'],
//         ['name' => 'espresso', 'price' => 20, 'temp' => 'cold']
//     ];
//     //for query parameters
//     $name = request('name');

//     return view('coffees', [
//         'coffees' => $coffees,
//         'name' => $name,
//         'age' => request('age')
//     ]);
// }
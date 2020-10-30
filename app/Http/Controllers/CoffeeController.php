<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//add Coffee model
use App\Models\Coffee;

class CoffeeController extends Controller
{
    public function index() {
        $coffees = Coffee::all();
        // $coffees = Coffee::orderBy('name', 'asc')->get();
        // $coffees = Coffee::where('name', 'godfrey')->get();
        // $coffees = Coffee::latest()->get();
        
        return view('coffees.index', ['coffees' => $coffees]);
    }

    public function show($id) {
        $coffee = Coffee::findOrFail($id);

        return view('coffees.show', ['coffee'=> $coffee]);
    }

    public function create() {
        return view('coffees.create');
    }

    public function store() {
        $coffee = new Coffee();
        $coffee->name = request('name');
        $coffee->type = request('type');
        $coffee->flavor = request('flavor');

        $coffee->save();

        return redirect('/')->with('message', 'Thank you. Order sent.');
    }
    public function destroy($id){
        $pizza= Coffee::findOrFail($id);
        $pizza->delete();

        return redirect('/coffees');
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
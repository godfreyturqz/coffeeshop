@extends('layouts.layout')

@section('content')
<div>
    <h1>ORDER A COFFEE</h1>
    <form action="/coffees" method="POST">
        @csrf
        <label>Your name:</label>
        <input type="text" name="name" autocomplete="off" required>
        <Label>Choose your order:</Label>
        <select name="type">
            <option value="Caffuccino" selected>Caffuccino</option>
            <option value="Espresso">Espresso</option>
            <option value="Hot Chocolate">Hot Chocolate</option>
            <option value="Cafe Americano">Cafe Americano</option>
        </select>
        <fieldset>
            <label>Flavor</label>
            <input type="checkbox" name="flavor[]" value="flavorA">flavor A
            <input type="checkbox" name="flavor[]" value="flavorB">flavor B
            <input type="checkbox" name="flavor[]" value="flavorC">flavor C
        </fieldset>
        <br><br>
        <button type="submit">Submit Order</button>
    </form>
    <div>
        <br>
        <a href="/"><- Back to CoffeeShop</a>
    </div>
</div>
@endsection
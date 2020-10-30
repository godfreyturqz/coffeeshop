@extends('layouts.layout')

@section('content')
<div>
    <h1>COFFEE ORDER LIST</h1>
    <br>
    <table>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Order</th>
            <th>Flavor</th>
        </tr>
        @foreach($coffees as $coffee)
        <tr>
            <td><a href="/coffees/{{ $coffee->id }}">{{ $coffee->id }}</a></td>
            <td>{{ $coffee->name }}</td>
            <td>{{ $coffee->type }}</td>
            <td>
                @foreach($coffee->flavor as $flavor)
                <p>{{$flavor}}</p>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <br>
        <a href="/"><- Back to CoffeeShop</a>
    </div>
</div>
@endsection


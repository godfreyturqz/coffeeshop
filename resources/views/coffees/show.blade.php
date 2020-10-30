@extends('layouts.layout')

@section('content')
<div>
    <h1>COFFEE ORDER # {{$coffee->id}}</h1>
    <table>
        <tr>
            <td>Customer Name:</td>
            <td>{{$coffee->name}}</td>
        </tr>
        <tr>
            <td>Order Type:</td>
            <td>{{$coffee->type}}</td>
        </tr>
    </table>

    <br>
    <form action="/coffees/{{ $coffee->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete order</button>
    </form>
    
    <div>
        <br>
        <a href="/coffees"><- Back to Order List</a>
    </div>
    

</div>
@endsection


@if($price > 15)
    <p>Price is expensive</p>
@elseif($price < 3)
    <p>Price is cheap</p>
@else
    <p>normal price</p>
@endif

@unless($temp == 'cold')
    <p>Hot available</p>
@endunless

@php 
    $owner = 'Godfrey';
    echo $owner;
@endphp

@for( $i = 0; $i < count($coffees); $i++ ) 
    <p>{{ $coffees[$i]['name'] }}</p>
@endfor

@if($loop-> first)
    <span>asd</span>
@endif
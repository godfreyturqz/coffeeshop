<div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <h1>COFFEE LIST</h1>
    <br>

    
    @foreach($coffees as $coffee)
        <div>
            {{$loop-> index}} {{ $coffee['name'] }} - {{ $coffee['price'] }}
        </div>
        
    @endforeach
</div>


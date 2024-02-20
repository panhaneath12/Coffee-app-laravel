    @extends('layouts.layout');
    @section('content')
            <div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6">Welcome to PHP Coffee</h1>
        <p>User Name: {{$name}}</p>
        @foreach($coffees as $coffee)
        <div>
            {{$coffee['type']}}
        </div>
        @endforeach

    </div>
</div>

       @endsection             


@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h1>Benvenuto nella Pizzeria Rustica</h1>
        <h2>Le nostre Pizze:</h2>
        @foreach ($pizzas as $pizza)
            <div class="card w-25">
                <div class="card-body">
                <h3 class="card-title">{{ $pizza['pizza_name'] }}</h3>
                <p class="card-text">{{ $pizza['ingredients'] }}</p>
                <p class="card-text">{{ $pizza['price'] }} €</p>
                <a href="#" class="btn btn-primary">More Details</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
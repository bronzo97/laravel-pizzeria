@extends('layouts.admin')

@section('main-content')

    <div class="container">
        <h1>Benvenuto nella parte Admin della pizaria rustica</h1>
        <h2>Le tue pizze:</h2>
        <a href="{{ route("admin.create")}}" class="btn btn-primary m-3">Create</a>
        <div class="conteiner">
            <div class="row">
                @foreach ($pizzas as $pizza)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $pizza['pizza_name'] }}</h3>
                                <p class="card-text">{{ $pizza['ingredients'] }}</p>
                                <p class="card-text">{{ $pizza['price'] }} €</p>
                                <a href="{{ route("admin.show", $pizza->id) }}" class="btn btn-primary">More Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
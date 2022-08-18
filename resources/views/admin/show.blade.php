@extends('layouts.admin')

@section('main-content')

    <div class="container text-center m-5 d-flex justify-content-center">
        <div class="card w-25">
            <div class="card-body">
            <h3 class="card-title">{{ $pizza['pizza_name'] }}</h3>
            <p class="card-text">{{ $pizza['ingredients'] }}</p>
            <p class="card-text">{{ $pizza['price'] }} €</p>
            <p class="card-text">{{ $pizza['size'] }}</p>
            <p class="card-text">{{ $pizza['nutritional_values'] }}</p>
            <a href="{{ route("admin.index")}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
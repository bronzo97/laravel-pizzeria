@extends('layouts.admin')

@section('main-content')

    <div class="container">
        <h2 class="text-center">Crea un nuovo prodotto:</h2>
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf

            <div class="form-group row m-3">
                <label for="pizza_name" class="col-sm-2 col-form-label">Pizza Name:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="pizza_name" id="pizza_name" placeholder="Pizza name">
                </div>
            </div>
            <div class="form-group row m-3">
                <label for="ingredients" class="col-sm-2 col-form-label">Ingredients:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="ingredients" id="ingredients" placeholder="Ingredients">
                </div>
            </div>
            <div class="form-group row m-3">
                <label for="price" class="col-sm-2 col-form-label">Price:</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                </div>
            </div>
            <div class="form-group row m-3">
                <label for="size" class="col-sm-2 col-form-label">Size:</label>
                <div class="col-sm-10">
                    <select id="size" name="size" class="form-control">
                        <option selected>Small</option>
                        <option>Regular</option>
                        <option>Big</option>
                        <option>Huge</option>
                        <option>Family</option>
                        <option>1/2 Meter</option>
                    </select>
                </div>
            </div>
            <div class="form-group row m-3">
                <label for="nutritional_values" class="col-sm-2 col-form-label">Nutritional values:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nutritional_values" id="nutritional_values" placeholder="Nutritional values">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary m-3">Create</button>
                <a href="{{ route("admin.index")}}" class="btn btn-primary m-3">Back</a>
                </div>
            </div>
            </form>

    </div>

@endsection
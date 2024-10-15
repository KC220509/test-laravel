@extends('productLayout.main')
@section('productContent')
    
    <h1>Create Product</h1>
    <form action="{{ route('product.store') }}" method="post">
        {{ csrf_field() }}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
@endsection


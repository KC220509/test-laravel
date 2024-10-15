@extends('productLayout.main')
@section('productContent')

    <h1>Update Product</h1>
    <form action="{{ url('products/' .$product->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"  value="{{ $product->description }}"></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" class="form-control"  value="{{ $product->price }}"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

@endsection
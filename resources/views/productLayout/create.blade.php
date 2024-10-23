@extends('productLayout.main')
@section('productContent')
    
    <h1>Create Product</h1>
    <form action="{{ route('product.store') }}" method="post">
        {{ csrf_field() }}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" class="form-control"></br>
        <label for="sale">Sale (%)</label></br>
        <input type="text" name="sale" id="sale" class="form-control"></br>
        <label for="procate_id">Category</label></br>
        <select name="procate_id" id="procate_id" class="form-control">
            @foreach ($cates as $cate)
                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Save" class="btn btn-success"></br>
        
    </form>
@endsection


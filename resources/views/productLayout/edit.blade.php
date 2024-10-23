@extends('productLayout.main')
@section('productContent')

    <h1>Update Product</h1>
    <form action="{{ route('product.update', $product->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}


        <label for="name">Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}"></br>
        @if ($errors->has('name'))
            <span class="textydanger">{{ $errors->first('name') }}</span>
        @endif
        <label for="description">Description</label></br>
        <input type="text" name="description" id="description" class="form-control"  value="{{ $product->description }}"></br>
        <label for="price">Price</label></br>
        <input type="number" name="price" id="price" class="form-control"  value="{{ $product->price }}"></br>
        <label for="sale">Sale (%)</label></br>
        <input type="text" name="sale" id="sale" class="form-control"  value="{{ $product->sale }}"></br>
        <label for="procate_id">Procate</label></br>
        <select name="procate_id" id="procate_id" class="form-control">
            @foreach ($cates as $cate)
                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

@endsection
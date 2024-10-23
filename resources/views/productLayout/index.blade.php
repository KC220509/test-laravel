
@extends('productLayout.main')
@section('productContent')  

    @if (Session :: has('success'))
        <p>{{ Session :: get('success') }}</p>
    @endif

    @if (Session:: has('error'))
        <p>{{ Session :: get('success') }}</p>
    @endif
    

    <h1>Products</h1>
    <table>
        <thead>
            <tr>
                <th style="width: 27%;">Name</th>
                <th style="width: 27%;">Description</th>
                <th style="width: 27%;">Sale (%)</th>
                <th style="width: 27%;">Price</th>
                <th colspan="2">
                    <!-- <a href="/products/create">New Product</a> -->
                    <a class="btn btn-new" href="{{ route('product.create') }}">Add New</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description}}</td>
                    <td>{{ $item->sale /100 }}</td>
                    <td>{{ $item->price }}</td> 
                    <td class="row function" colspan="2">
                        <a class="btn btn-view" href="{{ route('product.show', $item->id) }}">View</a>
                        <a class="btn btn-update" href="{{ route('product.edit', $item->id) }}">Update</a>
                        <form method="POST" action="{{ route('product.destroy', $item->id)}}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-delete" type="submit" title="Delete product" onclick="">Delete</button>
                        </form>
                    </td>   
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
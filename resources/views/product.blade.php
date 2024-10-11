<x-my-layout>
    <x-slot name="title">
        Products
    </x-slot>
    <x-slot name="linkcss">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product.css') }}">
    </x-slot>

    <h1>Products</h1>
    <table style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>    
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description}}</td>
                    <td>{{ $item->price }}</td>    
                </tr>
            @endforeach
        </tbody>
    </table>
</x-my-layout>
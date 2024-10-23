<x-my-layout>
    <x-slot name="title">
        Products
    </x-slot>
    <x-slot name="linkcss">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product.css') }}">
    </x-slot>
    <div>
        @yield('productContent')
    </div>
</x-my-layout>
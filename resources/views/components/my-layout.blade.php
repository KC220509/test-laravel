<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/header.css') }}">

    <title>{{ $title ?? 'home' }}</title>
    {{ $linkcss ?? '' }}


    <style>
        *{
            margin: 0;
            border: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
        }


        .flex-col{
            display: flex;
            flex-direction: column;
        }
        .flex-row{
            display: flex;
            flex-direction: row;
        }

        #content{
            padding: 8px 70px;
        }
    </style>
</head>
<body>
    @include('layouts.header')

    <section id="content">
        {{ $slot }}
    </section>

    @include('layouts.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ url('/logo.svg') }}">

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



        #myLayout{
            padding: 8px 70px;
            gap: 50px;
        }
        
        @media (max-width: 1290px) {
            #myLayout{
                padding: 8px 40px;
            }
        }
        @media (max-width: 1200px) {
            #myLayout{
                padding: 8px 10px;
            }
        
        }
    </style>
</head>
<body>
    @include('layouts.header')

    <section id="myLayout" class="flex-col">
        {{ $slot }}
    </section>

    @include('layouts.footer')
</body>
</html>
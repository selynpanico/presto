<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$title ?? 'Presto.it'}}</title>
</head>
<body>
    <x-navbar/>
    {{$slot}}
    <x-footer/>
    <script src="{{ asset('bladewind/js/helpers.js') }}"></script>
    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
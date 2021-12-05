<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-project</title>
    {{-- link:css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- script:src --}}
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    @include("structure.navbar")

    {{-- .container --}}
    <div class="container-fluid">
        <div class="pt-2">
            @include("structure.status")
            @yield("content")
        </div>
    </div>
</body>

</html>

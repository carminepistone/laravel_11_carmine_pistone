<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    {{-- Bootstrap Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="/style.css">
</head>


<body>
    
    <x-navbar></x-navbar>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                 </ul>
            </div>
        @endif

         @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
         @endif

    {{ $slot }}


</body>

</html>

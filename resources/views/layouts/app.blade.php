<!DOCTYPE html>
<html lang="en">

<head>
    <!-- icon -->
    <link rel="Website Icon" href="/images/Logogram Light.png" media="(prefers-color-scheme: dark)">
    <link rel="Website Icon" href="/images/Logogram Dark.png" media="(prefers-color-scheme: light)">

    <!-- style -->
    @stack('styles')
    {{-- <link rel="stylesheet" href="home.css"> --}}

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Batik Journey</title>
</head>

<body>

    <x-navbar>


    </x-navbar>

    {{ $slot }}

    <x-footer/>

    
    <!-- ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- js -->
    @stack('scripts')
</body>

</html>
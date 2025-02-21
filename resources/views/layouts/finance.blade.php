<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบ</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- เพิ่ม CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body class="bg-gray-800">
    @livewire('navbar')

    <div class="flex">
        <x-sidebar />

        <div class="content w-full">
            @yield('content')
        </div>
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>

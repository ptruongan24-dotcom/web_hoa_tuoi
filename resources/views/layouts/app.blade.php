<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Floret') }}</title>

        {{-- Font chữ Sáng tạo --}}
        {{-- Font Sans-serif mặc định (Inter) --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        {{-- Font Serif cho tiêu đề (Playfair Display) --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

        {{-- Font Awesome cho biểu tượng (Giỏ hàng, Menu) --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        {{-- Lệnh gọi Tailwind CSS --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Kiểu CSS tùy chỉnh để định nghĩa font family --}}
        <style>
            /* Định nghĩa lớp font-serif cho Tailwind */
            .font-serif {
                font-family: 'Playfair Display', serif !important;
            }
            /* Định nghĩa lớp font-sans mặc định */
            .font-sans {
                font-family: 'Inter', sans-serif !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-800">
        {{-- Nội dung chính của trang web --}}
        <main class="w-full">
            {{ $slot }}
        </main>
    </body>
</html>
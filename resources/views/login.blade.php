<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Đăng nhập - Nàng Tiên Hoa</title>

        <!-- Font chữ -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .font-serif {
                font-family: 'Playfair Display', serif !important;
            }
            .font-sans {
                font-family: 'Inter', sans-serif !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-800">
        <main class="w-full">
            <!-- Nền với gradient -->
            <div class="min-h-screen bg-gradient-to-br from-pink-50 via-white to-purple-50">

                <!-- Header đầy đủ như các trang khác -->
                <header class="bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto px-6">
                        <div class="flex items-center justify-between h-20">
                            <!-- Logo & Tên thương hiệu -->
                            <div class="flex items-center gap-2 md:gap-3 shrink-0">
                                <a href="/" class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center overflow-hidden">
                                    <img src="{{ asset('images/logo.png') }}" alt="Logo Nangtienhoa" class="w-full h-full object-contain">
                                </a>
                                <a href="/" class="text-xl md:text-2xl font-bold text-[#E12559] uppercase tracking-widest" style="font-family: 'Bacasime Antique', serif;">
                                    Nangtienhoa
                                </a>
                            </div>

                            <!-- Menu chính -->
                            <nav class="hidden md:block">
                                <ul class="flex items-center gap-4 lg:gap-7 text-[13px] font-bold text-gray-800 uppercase tracking-wide">
                                    <li><a href="/" class="hover:text-[#D81B60] transition">Trang chủ</a></li>
                                    
                                    {{-- Menu: Hoa Cưới --}} 
                                    <li class="relative group py-6">
                                        <a href="#" class="hover:text-[#D81B60] transition flex items-center gap-1">Hoa cưới <i class="fa-solid fa-chevron-down text-[9px] mt-0.5"></i></a>
                                        <ul class="absolute left-0 top-[70%] mt-2 w-48 bg-white border border-gray-100 shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100 z-50">
                                            <li><a href="/danh-muc/hoa-hong" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa hồng</a></li>
                                            <li><a href="/danh-muc/hoa-mau-don" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa mẫu đơn</a></li>
                                            <li><a href="/danh-muc/hoa-cam-tu-cau" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa cẩm tú cầu</a></li>
                                            <li><a href="/danh-muc/hoa-baby" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa baby</a></li>
                                            <li><a href="/danh-muc/hoa-tulip" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa Tulip</a></li>
                                        </ul>
                                    </li>

                                    {{-- Menu: Hoa Tươi --}}
                                    <li class="relative group py-6">
                                        <a href="#" class="hover:text-[#D81B60] transition flex items-center gap-1">Hoa tươi <i class="fa-solid fa-chevron-down text-[9px] mt-0.5"></i></a>
                                        <ul class="absolute left-0 top-[70%] mt-2 w-48 bg-white border border-gray-100 shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100 z-50">
                                            <li><a href="/hoa-tuoi/hoa-hong-tuoi" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa hồng</a></li>
                                            <li><a href="/hoa-tuoi/hoa-rose" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa rose</a></li>
                                            <li><a href="/hoa-tuoi/hoa-cuc" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa cúc</a></li>
                                            <li><a href="/hoa-tuoi/hoa-ly" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa ly</a></li>
                                            <li><a href="/hoa-tuoi/hoa-lan" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa lan</a></li>
                                            <li><a href="/hoa-tuoi/hoa-dong-tien" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa đồng tiền</a></li>
                                            <li><a href="/hoa-tuoi/hoa-cam-chuong" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa cẩm chướng</a></li>
                                            <li><a href="/hoa-tuoi/hoa-cam-tu-cau-tuoi" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa cẩm tú cầu</a></li>
                                            <li><a href="/hoa-tuoi/hoa-pho-bien" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Các loại hoa phổ biến khác</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="/gio-hoa-qua-tang" class="hover:text-[#D81B60] transition">Giỏ hoa & Quà tặng</a></li>
                                    <li><a href="/chung-toi" class="hover:text-[#D81B60] transition">Chúng tôi</a></li>
                                </ul>
                            </nav>

                            {{-- Cụm Icons bên phải --}}
                            <div class="flex items-center gap-4 lg:gap-6 relative shrink-0">
                                <button class="text-gray-800 hover:text-[#D81B60] transition">
                                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                                </button>
                                {{-- Ẩn icon account vì đang ở trang đăng nhập --}}
                                <button class="text-gray-800 hover:text-[#D81B60] transition relative">
                                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                                    <span class="absolute -top-1.5 -right-2 bg-red-500 text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Nội dung chính - Khung đăng nhập nhỏ gọn -->
                <div class="flex items-start justify-center min-h-[calc(100vh-80px)] px-6 py-2">
                    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="grid grid-cols-1 md:grid-cols-5">
                            <!-- Bên trái: Form đăng nhập -->
                            <div class="md:col-span-3 p-6">
                                <!-- Logo và tiêu đề -->
                                <div class="text-center mb-6">
                                    <div class="flex items-center justify-center gap-2 mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center">
                                            <img src="{{ asset('images/logo.png') }}" alt="Logo Nangtienhoa" class="w-full h-full object-contain">
                                        </div>
                                        <span class="text-xl font-bold text-[#E12559] uppercase tracking-widest" style="font-family: 'Bacasime Antique', serif;">
                                            Nangtienhoa
                                        </span>
                                    </div>
                                    <h2 class="text-xl font-bold text-gray-900 font-serif mb-2">Đăng nhập</h2>
                                    <p class="text-sm text-gray-600">Chào mừng bạn đến với Nangtienhoa</p>
                                </div>

                                <!-- Form đăng nhập -->
                                <form method="POST" action="{{ route('login.post') }}" class="space-y-4">
                                    @csrf
                                    
                                    @if ($errors->any())
                                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                                            <ul class="list-disc list-inside">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <!-- Email -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fa-solid fa-envelope text-gray-400 text-sm"></i>
                                            </div>
                                            <input type="email" placeholder="Nhập email của bạn" 
                                                   class="w-full pl-10 pr-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D81B60] focus:border-transparent outline-none transition">
                                        </div>
                                    </div>
                                    
                                    <!-- Mật khẩu -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Mật khẩu</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <i class="fa-solid fa-lock text-gray-400 text-sm"></i>
                                            </div>
                                            <input type="password" placeholder="Nhập mật khẩu của bạn" 
                                                   class="w-full pl-10 pr-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#D81B60] focus:border-transparent outline-none transition">
                                        </div>
                                    </div>
                                    
                                    <!-- Ghi nhớ + Quên mật khẩu -->
                                    <div class="flex items-center justify-between mb-4">
                                        <label class="flex items-center">
                                            <input type="checkbox" class="w-4 h-4 text-[#D81B60] border-gray-300 rounded focus:ring-[#D81B60]">
                                            <span class="ml-2 text-sm text-gray-600">Ghi nhớ tôi</span>
                                        </label>
                                        <a href="#" class="text-sm text-[#D81B60] hover:underline">Quên mật khẩu?</a>
                                    </div>
                                    
                                    <!-- Nút đăng nhập -->
                                    <button type="submit" class="w-full bg-gradient-to-r from-[#D81B60] to-pink-700 text-white py-3 rounded-lg text-sm font-medium hover:opacity-90 transition duration-300">
                                        Đăng nhập
                                    </button>
                                    
                                    <!-- Hoặc -->
                                    <div class="relative my-6">
                                        <div class="absolute inset-0 flex items-center">
                                            <div class="w-full border-t border-gray-300"></div>
                                        </div>
                                        <div class="relative flex justify-center text-sm">
                                            <span class="px-4 bg-white text-gray-500">Hoặc</span>
                                        </div>
                                    </div>

                                    <!-- Đăng nhập mạng xã hội -->
                                    <div class="space-y-3">
                                        <button type="button" class="w-full flex items-center justify-center gap-3 border border-gray-300 py-3 rounded-lg hover:bg-gray-50 transition">
                                            <img src="{{ asset('images/google.png') }}" alt="Google" class="w-5 h-5">
                                            <span class="text-gray-700 text-sm">Đăng nhập với Google</span>
                                        </button>
                                        <button type="button" class="w-full flex items-center justify-center gap-3 border border-gray-300 py-3 rounded-lg hover:bg-gray-50 transition">
                                            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                                            <span class="text-gray-700 text-sm">Đăng nhập với Facebook</span>
                                        </button>
                                    </div>
                                    
                                    <!-- Đăng ký -->
                                    <div class="text-center pt-4 border-t border-gray-100">
                                        <p class="text-sm text-gray-600">
                                            Bạn chưa có tài khoản? 
                                            <a href="#" class="text-[#D81B60] hover:underline font-medium">Đăng ký ngay</a>
                                        </p>
                                    </div>
                                </form>
                            </div>

                            <!-- Bên phải: Ảnh hoa -->
                            <div class="md:col-span-2 relative bg-gradient-to-br from-pink-50 to-purple-50 flex items-center justify-center p-2">
                                <img src="{{ asset('images/dangnhap.jpg') }}" alt="Hoa Nàng Tiên Hoa" class="w-full h-full object-cover rounded-lg">
                                
                                <!-- Hoa nền trang trí -->
                                <div class="absolute inset-0 opacity-10">
                                    <div class="absolute top-2 left-2 text-2xl text-white/30">🌸</div>
                                    <div class="absolute top-4 right-3 text-xl text-white/20">🌺</div>
                                    <div class="absolute bottom-4 left-2 text-2xl text-white/25">🌷</div>
                                    <div class="absolute bottom-2 right-3 text-lg text-white/20">🌹</div>
                                    <div class="absolute top-1/2 left-1/4 text-3xl text-white/15">🌸</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

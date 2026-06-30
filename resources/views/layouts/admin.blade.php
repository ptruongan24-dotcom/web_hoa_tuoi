<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Trang Quản Trị') - Nangtienhoa</title>
    
    <!-- Font chữ -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        /* Animation */
        .fade-in {
            animation: fadeIn 0.3s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Sidebar hover effect */
        .sidebar-item {
            transition: all 0.3s ease;
        }
        .sidebar-item:hover {
            transform: translateX(5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-purple-700 to-purple-900 text-white flex-shrink-0">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="p-6 border-b border-purple-600">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain">
                        </div>
                        <div>
                            <h1 class="text-xl font-bold">Nangtienhoa</h1>
                            <p class="text-xs text-purple-200">Hệ thống quản trị</p>
                        </div>
                    </div>
                </div>
                
                <!-- User info -->
                <div class="p-4 border-b border-purple-600">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <p class="font-semibold">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-purple-200">Quản trị viên</p>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="flex-1 p-4 overflow-y-auto">
                    <ul class="space-y-2">
                        <!-- Dashboard -->
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="sidebar-item flex items-center gap-3 p-3 rounded-lg bg-purple-800 text-white">
                                <i class="fas fa-tachometer-alt w-5"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>
                        
                        <!-- Quản lý sản phẩm -->
                        <li>
                            <div class="sidebar-item">
                                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-purple-800 transition">
                                    <i class="fas fa-box w-5"></i>
                                    <span>Sản phẩm</span>
                                    <i class="fas fa-chevron-down ml-auto text-xs"></i>
                                </a>
                                <ul class="ml-8 mt-2 space-y-1">
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-list mr-2"></i>Danh sách sản phẩm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-plus mr-2"></i>Thêm sản phẩm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-tags mr-2"></i>Danh mục
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Quản lý đơn hàng -->
                        <li>
                            <div class="sidebar-item">
                                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-purple-800 transition">
                                    <i class="fas fa-shopping-cart w-5"></i>
                                    <span>Đơn hàng</span>
                                    <i class="fas fa-chevron-down ml-auto text-xs"></i>
                                </a>
                                <ul class="ml-8 mt-2 space-y-1">
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-list mr-2"></i>Tất cả đơn hàng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-clock mr-2"></i>Đang xử lý
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-truck mr-2"></i>Đã giao
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Quản lý khách hàng -->
                        <li>
                            <a href="#" class="sidebar-item flex items-center gap-3 p-3 rounded-lg hover:bg-purple-800 transition">
                                <i class="fas fa-users w-5"></i>
                                <span>Khách hàng</span>
                            </a>
                        </li>
                        
                        <!-- Quản lý tin tức -->
                        <li>
                            <div class="sidebar-item">
                                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-purple-800 transition">
                                    <i class="fas fa-newspaper w-5"></i>
                                    <span>Tin tức</span>
                                    <i class="fas fa-chevron-down ml-auto text-xs"></i>
                                </a>
                                <ul class="ml-8 mt-2 space-y-1">
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-list mr-2"></i>Danh sách tin tức
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-plus mr-2"></i>Thêm tin tức
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Quản lý liên hệ -->
                        <li>
                            <a href="#" class="sidebar-item flex items-center gap-3 p-3 rounded-lg hover:bg-purple-800 transition">
                                <i class="fas fa-envelope w-5"></i>
                                <span>Liên hệ</span>
                            </a>
                        </li>
                        
                        <!-- Cài đặt -->
                        <li>
                            <div class="sidebar-item">
                                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-purple-800 transition">
                                    <i class="fas fa-cog w-5"></i>
                                    <span>Cài đặt</span>
                                    <i class="fas fa-chevron-down ml-auto text-xs"></i>
                                </a>
                                <ul class="ml-8 mt-2 space-y-1">
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-info-circle mr-2"></i>Thông tin website
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-2 text-sm text-purple-200 hover:text-white hover:bg-purple-800 rounded transition">
                                            <i class="fas fa-palette mr-2"></i>Giao diện
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                
                <!-- Logout -->
                <div class="p-4 border-t border-purple-600">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 p-3 rounded-lg hover:bg-purple-800 transition text-left">
                            <i class="fas fa-sign-out-alt w-5"></i>
                            <span>Đăng xuất</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>
        
        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center gap-4">
                        <button id="sidebarToggle" class="text-gray-600 hover:text-gray-900 lg:hidden">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h2 class="text-xl font-semibold text-gray-800">
                            @yield('page-title', 'Tổng quan')
                        </h2>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <!-- Search -->
                        <div class="relative">
                            <input type="text" placeholder="Tìm kiếm..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        
                        <!-- Notifications -->
                        <div class="relative">
                            <button class="relative text-gray-600 hover:text-gray-900">
                                <i class="fas fa-bell text-xl"></i>
                                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                            </button>
                        </div>
                        
                        <!-- User menu -->
                        <div class="relative">
                            <button class="flex items-center gap-2 text-gray-700 hover:text-gray-900">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-purple-600"></i>
                                </div>
                                <span class="hidden md:block">{{ Auth::user()->name }}</span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page content -->
            <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg fade-in">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ session('success') }}
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg fade-in">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        {{ session('error') }}
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
    
    <script>
        // Toggle sidebar for mobile
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.querySelector('aside').classList.toggle('hidden');
        });
        
        // Auto-hide alerts
        setTimeout(() => {
            document.querySelectorAll('.fade-in').forEach(el => {
                el.style.opacity = '0';
                setTimeout(() => el.remove(), 300);
            });
        }, 5000);
    </script>
</body>
</html>

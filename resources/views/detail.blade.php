<x-app-layout>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&display=swap" rel="stylesheet">

    {{-- BẠN HÃY PASTE TOÀN BỘ KHỐI <header> TỪ TRANG CATEGORY VÀO ĐÂY ĐỂ GIỮ MENU NHÉ --}}
     {{-- 1. THANH ĐIỀU HƯỚNG (HEADER ĐẦY ĐỦ GIỐNG TRANG CHỦ) --}}
    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 xl:px-6 h-20 flex items-center justify-between">
            
            {{-- Logo & Tên thương hiệu --}}
            <div class="flex items-center gap-2 md:gap-3 shrink-0">
                <a href="/" class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Nàng Tiên Hoa" class="w-full h-full object-contain">
                </a>
                <a href="/" class="text-xl md:text-2xl font-bold text-[#E12559] uppercase tracking-widest" style="font-family: 'Bacasime Antique', serif;">
                    Nangtienhoa
                </a> 
            </div>

            {{-- Menu chính (Đã cập nhật Hover màu hồng #D81B60 và đủ Dropdown) --}}
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

                    {{-- Menu: Sự Kiện --}}
                    <li class="relative group py-6">
                        <a href="#" class="hover:text-[#D81B60] transition flex items-center gap-1">Sự kiện <i class="fa-solid fa-chevron-down text-[9px] mt-0.5"></i></a>
                        <ul class="absolute left-0 top-[70%] mt-2 w-48 bg-white border border-gray-100 shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100 z-50">
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Ngày của phụ nữ</a></li>
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Valentine</a></li>
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Sinh nhật</a></li>
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">20/11</a></li>
                        </ul>
                    </li>

                    {{-- Menu: Hoa Tươi --}}
                    <li class="relative group py-6">
                        <a href="#" class="hover:text-[#D81B60] transition flex items-center gap-1">Hoa tươi <i class="fa-solid fa-chevron-down text-[9px] mt-0.5"></i></a>
                        <ul class="absolute left-0 top-[70%] mt-2 w-48 bg-white border border-gray-100 shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100 z-50">
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa hồng</a></li>
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa cúc</a></li>
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa ly</a></li>
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa lan</a></li>
                            <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa đồng tiền</a></li>
                        </ul>
                    </li>

                    <li><a href="#" class="hover:text-[#D81B60] transition">Giỏ hoa & Quà tặng</a></li>
                    <li><a href="#" class="hover:text-[#D81B60] transition">Chúng tôi</a></li>
                </ul>
            </nav>

            {{-- Cụm Icons bên phải --}}
            <div class="flex items-center gap-4 lg:gap-6 relative shrink-0">
                <button onclick="toggleSearch()" class="text-gray-800 hover:text-[#D81B60] transition focus:outline-none">
                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                </button>
                
                {{-- Thanh Tìm Kiếm --}}
                <div id="search-bar" class="absolute top-full right-0 mt-6 w-64 lg:w-72 bg-white border border-gray-200 shadow-2xl rounded-full px-5 py-2.5 flex items-center opacity-0 invisible transition-all duration-300 transform translate-y-4 z-50">
                    <input type="text" placeholder="Nhập từ khóa tìm kiếm..." class="w-full text-sm text-gray-700 outline-none bg-transparent">
                    <button class="text-[#D81B60] hover:text-pink-700 transition"><i class="fa-solid fa-arrow-right"></i></button>
                </div>

                <button class="text-gray-800 hover:text-[#D81B60] transition">
                    <i class="fa-regular fa-user text-lg"></i>
                </button>
                <button class="text-gray-800 hover:text-[#D81B60] transition relative">
                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                    <span class="absolute -top-1.5 -right-2 bg-red-500 text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                </button>
            </div>
        </div>
    </header> 

    {{-- KHU VỰC CHI TIẾT SẢN PHẨM --}}
    <section class="bg-white py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-6">
            
            {{-- Thanh điều hướng nhỏ (Breadcrumb) --}}
            <div class="flex items-center gap-2 text-xs md:text-sm text-gray-500 font-medium mb-8">
                <a href="/" class="hover:text-[#E12559] transition">Trang chủ</a>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <a href="#" class="hover:text-[#E12559] transition">{{ $product->category }}</a>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span class="text-gray-900 font-bold">{{ $product->name }}</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">
                
                {{-- BÊN TRÁI: KHUNG ẢNH LỚN --}}
                <div class="relative w-full aspect-[4/5] bg-[#F9F8F6] rounded-2xl overflow-hidden shadow-sm border border-gray-100 flex items-center justify-center">
                    @if($product->badge)
                        <div class="absolute top-4 left-4 bg-[#E12559] text-white text-xs font-bold px-3 py-1.5 rounded-md z-10 uppercase tracking-wider shadow-sm">
                            {{ $product->badge }}
                        </div>
                    @endif
                    <img src="{{ asset('images/' . ($product->image ?: 'prod-placeholder.jpg')) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                </div>

                {{-- BÊN PHẢI: THÔNG TIN CHI TIẾT --}}
                <div class="flex flex-col pt-4">
                    {{-- Tên hoa --}}
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                        {{ $product->name }}
                    </h1>
                    
                    {{-- Đánh giá --}}
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-500">({{ $product->rating }} Đánh giá)</span>
                    </div>

                    {{-- Giá tiền --}}
                    <div class="flex items-end gap-4 mb-8 pb-8 border-b border-gray-100">
                        <span class="text-3xl md:text-4xl font-bold text-[#E12559]">
                            {{ number_format($product->price * 1000, 0, ',', '.') }} đ
                        </span>
                        @if($product->old_price)
                            <span class="text-lg text-gray-400 line-through mb-1">
                                {{ number_format($product->old_price * 1000, 0, ',', '.') }} đ
                            </span>
                        @endif
                    </div>

                    {{-- Phần mô tả cụ thể cho riêng bó hoa này --}}
                    <div class="mb-10">
                        <h3 class="text-sm font-bold text-gray-900 uppercase tracking-widest mb-4">Thông tin sản phẩm</h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{-- Tạm thời dùng chữ mẫu. Nếu trong phpMyAdmin bạn có cột 'description', hãy thay bằng {{ $product->description }} --}}
                            Tuyệt tác <strong>{{ $product->name }}</strong> được tuyển chọn từ những bông hoa tươi mới nhất, cắt tại vườn vào lúc bình minh. Với thiết kế tinh tế, tỉ mỉ trong từng lớp giấy gói, sản phẩm này không chỉ là một món quà, mà còn là lời gửi gắm yêu thương sâu sắc nhất đến người nhận.
                        </p>
                    </div>

                    {{-- Chọn số lượng & Thêm vào giỏ --}}
                    <div class="flex flex-col sm:flex-row gap-4 mt-auto">
                        {{-- Ô chọn số lượng --}}
                        <div class="flex items-center border border-gray-300 rounded-full px-4 py-3 bg-white w-full sm:w-32 justify-between">
                            <button class="text-gray-500 hover:text-black focus:outline-none"><i class="fa-solid fa-minus"></i></button>
                            <span class="font-bold text-gray-900">1</span>
                            <button class="text-gray-500 hover:text-black focus:outline-none"><i class="fa-solid fa-plus"></i></button>
                        </div>
                        
                        {{-- Nút Thêm vào giỏ --}}
                        <button class="flex-1 bg-[#0a3d3c] text-white px-8 py-4 rounded-full font-bold text-sm uppercase tracking-wider hover:bg-[#E12559] transition-colors duration-300 shadow-md flex items-center justify-center gap-3">
                            <i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ hàng
                        </button>
                    </div>

                    {{-- Cam kết nhỏ --}}
                    <div class="mt-8 flex items-center gap-6 text-xs font-bold text-gray-500">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-truck text-gray-400"></i> Giao siêu tốc 2H</span>
                        <span class="flex items-center gap-2"><i class="fa-solid fa-leaf text-gray-400"></i> Hoa tươi 100%</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- BẠN HÃY PASTE TOÀN BỘ KHỐI <footer> TỪ TRANG CATEGORY VÀO ĐÂY ĐỂ GIỮ CHÂN TRANG NHÉ --}}
      {{-- ========================================== --}}
    {{-- 3. KHU VỰC FOOTER (CHÂN TRANG)            --}}
    {{-- ========================================== --}}
    <footer class="bg-white pt-16 pb-8 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">
            <div>
                <h3 class="font-bold text-gray-900 text-lg mb-6">Hỗ trợ khách hàng</h3>
                <p class="text-gray-600 mb-2 text-sm md:text-base">+1 (973) 3333-5555</p>
                <p class="text-gray-600 mb-6 text-sm md:text-base">Nangtienhoa@gmail.com</p>
                <div class="flex flex-col xl:flex-row xl:items-center gap-3">
                    <span class="text-sm font-medium text-gray-900 whitespace-nowrap">Theo dõi qua:</span>
                    <div class="flex gap-2">
                        <a href="#" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:border-[#0a3d3c] hover:text-[#0a3d3c] transition duration-300"><i class="fa-brands fa-instagram text-xs"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:border-[#0a3d3c] hover:text-[#0a3d3c] transition duration-300"><i class="fa-brands fa-tiktok text-xs"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:border-[#0a3d3c] hover:text-[#0a3d3c] transition duration-300"><i class="fa-brands fa-youtube text-xs"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:border-[#0a3d3c] hover:text-[#0a3d3c] transition duration-300"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:border-[#0a3d3c] hover:text-[#0a3d3c] transition duration-300"><i class="fa-brands fa-x-twitter text-xs"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-gray-900 text-lg mb-6">Danh mục sản phẩm</h3>
                <ul class="space-y-4 text-gray-600 text-sm md:text-base">
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Hoa cưới</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Hoa sự kiện</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Hoa bán chạy nhất</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Danh mục hoa cao cấp</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-gray-900 text-lg mb-6">Khám phá sự liên kết</h3>
                <ul class="space-y-4 text-gray-600 text-sm md:text-base">
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Chúng tôi</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Liên hệ</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Danh mục sự kiện</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Các nhà cung cấp lớn</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-gray-900 text-lg mb-6">Cửa hàng</h3>
                <p class="text-gray-600 mb-6 text-sm md:text-base leading-relaxed">Địa chỉ: 783, Phạm Hữu Lầu, Phường 6, tỉnh Đồng Tháp</p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Nhập email của bạn... *" class="flex-1 border border-gray-300 rounded-full px-5 py-3 text-sm focus:outline-none focus:border-[#0a3d3c] focus:ring-1 focus:ring-[#0a3d3c] transition">
                    <button class="bg-[#1e443f] text-white px-6 py-3 rounded-full text-sm font-bold hover:bg-[#0a3d3c] shadow-sm hover:shadow-md transition duration-300 whitespace-nowrap">Đăng ký</button>
                </div>
                <p class="text-[11px] text-gray-400 mt-3 italic">***Bằng việc đăng ký, bạn đồng ý với Điều khoản và Chính sách bảo mật của chúng tôi.</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-16 pt-8 border-t border-gray-100 text-center text-sm text-gray-500">
            &copy; 2026 Nàng Tiên Hoa. All rights reserved.
        </div>
    </footer>

</x-app-layout>
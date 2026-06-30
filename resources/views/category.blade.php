<x-app-layout>

    {{-- THÊM FONT CHỮ --}}
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&display=swap" rel="stylesheet">

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

                    {{-- Menu: Hoa Tươi --}}
                    <li class="relative group py-6">
                        <a href="#" class="hover:text-[#D81B60] transition flex items-center gap-1">Hoa tươi <i class="fa-solid fa-chevron-down text-[9px] mt-0.5"></i></a>
                        <ul class="absolute left-0 top-[70%] mt-2 w-48 bg-white border border-gray-100 shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100 z-50">
                            <li><a href="/hoa-tuoi/hoa-hong-tuoi" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#D81B60] hover:bg-pink-50 transition capitalize">Hoa hồng</a></li>
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
                <button onclick="toggleSearch()" class="text-gray-800 hover:text-[#D81B60] transition focus:outline-none">
                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                </button>
                
                {{-- Thanh Tìm Kiếm --}}
                <div id="search-bar" class="absolute top-full right-0 mt-6 w-64 lg:w-72 bg-white border border-gray-200 shadow-2xl rounded-full px-5 py-2.5 flex items-center opacity-0 invisible transition-all duration-300 transform translate-y-4 z-50">
                    <input type="text" placeholder="Nhập từ khóa tìm kiếm..." class="w-full text-sm text-gray-700 outline-none bg-transparent">
                    <button class="text-[#D81B60] hover:text-pink-700 transition"><i class="fa-solid fa-arrow-right"></i></button>
                </div>

                <a href="/dang-nhap" class="text-gray-800 hover:text-[#D81B60] transition">
                    <i class="fa-regular fa-user text-lg"></i>
                </a>
                <button class="text-gray-800 hover:text-[#D81B60] transition relative">
                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                    <span class="absolute -top-1.5 -right-2 bg-red-500 text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                </button>
            </div>
        </div>
    </header>

    {{-- ========================================== --}}
    {{-- 2. KHU VỰC THÔNG TIN SẢN PHẨM (NỀN TRẮNG)  --}}
    {{-- ========================================== --}}
    {{-- Đã giảm pb-16 xuống pb-12 để phần trắng xích lên trên --}}
    <section class="bg-white pt-12 md:pt-16 pb-12 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                {{-- CỘT TRÁI: Nội dung văn bản (di chuyển lên trên) --}}
                <div class="z-20 lg:col-span-4 order-2 lg:order-1 mt-8 lg:mt-0">
                    {{-- Thay chữ cứng thành biến $pageTitle --}}
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight lg:whitespace-nowrap">
                        Hoa {{ $pageTitle }}
                    </h1>
                    
                    {{-- Thay đoạn văn cứng thành biến $pageDescription --}}
                    <p class="text-gray-600 text-base md:text-lg leading-relaxed mb-10 font-medium">
                        {{ $pageDescription }}
                    </p>
                    
                    <a href="#" class="inline-flex items-center gap-3 bg-gradient-to-r from-[#ff9a9e] via-[#fecfef] to-[#a1c4fd] text-gray-900 px-8 py-3.5 rounded-md font-bold text-sm md:text-base hover:opacity-90 transition-all duration-300 hover:scale-105 shadow-sm border border-pink-100">
                        Tìm hiểu thêm
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                {{-- CỘT PHẢI: Khung hình ảnh (kéo dài hơn) --}}
                <div class="flex justify-center lg:justify-end z-10 lg:col-span-8 w-full order-1 lg:order-2 -mr-6 lg:-mr-12">
    {{-- Khung chứa Slider (Kéo dài về chiều ngang) --}}
    <div id="media-carousel" class="relative w-full h-[250px] md:h-[350px] lg:h-[450px] rounded-xl overflow-hidden border border-gray-200 shadow-lg bg-black">
        
        @foreach($mediaItems as $index => $item)
            {{-- Mỗi slide nằm chồng lên nhau. Slide đầu tiên (index 0) hiện rõ, các slide sau bị mờ đi --}}
            <div class="carousel-slide absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $index == 0 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none' }}">
                
                @if($item['type'] == 'image')
                    <img src="{{ asset('images/' . $item['src']) }}" class="w-full h-full object-cover">
                @else
                    {{-- Với video, ta bỏ autoplay và loop đi để Javascript tự điều khiển --}}
                    <video src="{{ asset('images/' . $item['src']) }}" class="w-full h-full object-cover" muted playsinline></video>
                @endif
                
            </div>
        @endforeach

    </div>
</div>
                
                {{-- Đã Cắt dòng chữ "Danh mục sản phẩm" khỏi khu vực này --}}

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 3. KHU VỰC LƯỚI SẢN PHẨM (NỀN XÁM NHẠT)    --}}
    {{-- ========================================== --}}
    <section class="bg-[#F9F8F6] py-16 md:py-20 border-t border-gray-100">
        <div class="max-w-[1400px] mx-auto px-4 xl:px-6">
            
            {{-- DÒNG CHỮ DANH MỤC SẢN PHẨM ĐƯỢC CHUYỂN XUỐNG ĐÂY --}}
            {{-- Dùng mb-12 để tạo khoảng cách đẹp mắt với dàn sản phẩm bên dưới --}}
            {{-- HEADER CỦA LƯỚI SẢN PHẨM (CÓ BỘ LỌC TÌM KIẾM BÊN PHẢI) --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end mb-12 md:mb-16 relative z-10">
                
                {{-- Cột 1: Cố tình để trống để ép tiêu đề vào chính giữa màn hình --}}
                <div class="hidden md:block"></div>

                {{-- Cột 2: Tiêu đề nằm chính giữa --}}
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 tracking-wide">
                        Danh mục sản phẩm
                    </h2>
                    <div class="w-16 h-1 bg-[#0a3d3c] mx-auto mt-4 rounded-full"></div>
                </div>

                {{-- Cột 3: Bộ lọc Tìm kiếm nằm bên phải --}}
                <div class="flex flex-col items-center md:items-end gap-2">
                    {{-- Dòng chữ nhỏ phía trên --}}
                    <span class="text-[11px] font-bold text-gray-500 uppercase tracking-widest pr-2">Tìm kiếm theo:</span>
                    
                    {{-- Khung chứa 2 nút Dropdown --}}
                    <div class="flex items-center gap-3">
                        
                        {{-- Dropdown 1: Giá tiền --}}
                        <div class="relative group">
                            <button class="flex items-center gap-2 px-5 py-2 bg-white border border-gray-200 rounded-full text-sm font-bold text-gray-700 hover:border-[#E12559] hover:text-[#E12559] transition shadow-sm focus:outline-none">
                                Giá tiền <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            </button>
                            {{-- Menu xổ xuống khi rê chuột --}}
                            <ul class="absolute right-0 top-full mt-2 w-40 bg-white border border-gray-100 shadow-xl rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right scale-95 group-hover:scale-100 z-50">
                                <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#E12559] hover:bg-pink-50 transition">Dưới 80.000 đ</a></li>
                                <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#E12559] hover:bg-pink-50 transition">Từ 100.000 đ</a></li>
                                <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#E12559] hover:bg-pink-50 transition">Trên 200.000 đ</a></li>
                            </ul>
                        </div>

                        {{-- Dropdown 2: Ưu đãi --}}
                        <div class="relative group">
                            <button class="flex items-center gap-2 px-5 py-2 bg-white border border-gray-200 rounded-full text-sm font-bold text-gray-700 hover:border-[#E12559] hover:text-[#E12559] transition shadow-sm focus:outline-none">
                                Ưu đãi <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            </button>
                            {{-- Menu xổ xuống khi rê chuột --}}
                            <ul class="absolute right-0 top-full mt-2 w-44 bg-white border border-gray-100 shadow-xl rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right scale-95 group-hover:scale-100 z-50">
                                <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#E12559] hover:bg-pink-50 transition">Đang giảm giá</a></li>
                                <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#E12559] hover:bg-pink-50 transition">Sale 10%</a></li>
                                <li><a href="#" class="block px-5 py-2.5 text-sm text-gray-600 hover:text-[#E12559] hover:bg-pink-50 transition">Sale 20%</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                
            </div>

            {{-- Lưới Grid 5 Cột --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                
                @foreach($products as $product)
                <a href="/san-pham/{{ $product->id }}" class="block h-full">
                <div class="group cursor-pointer flex flex-col h-full bg-white rounded-2xl overflow-hidden shadow-[0_2px_10px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-50">
                    
                    <div class="relative aspect-[3/4] w-full overflow-hidden bg-gray-50">
                        @if($product->badge)
                            <div class="absolute top-3 left-3 bg-[#E12559] text-white text-[9px] md:text-[10px] font-bold px-2.5 py-1 rounded-md z-10 uppercase tracking-wider shadow-sm">
                                {{ $product->badge }}
                            </div>
                        @endif
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-bold px-2 py-1 rounded-md shadow-sm z-10 flex items-center gap-1">
                            <i class="fa-solid fa-star text-yellow-400"></i> {{ $product->rating }}
                        </div>

                        <img src="{{ asset('images/' . ($product->image ?: 'prod-placeholder.jpg')) }}" 
                            alt="{{ $product->name }}" 
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    
                    <div class="p-4 md:p-5 flex flex-col flex-grow">
                        <h3 class="font-bold text-gray-900 text-sm md:text-base group-hover:text-[#E12559] transition duration-300 line-clamp-1 mb-2">
                            {{ $product->name }}
                        </h3>

                        <div class="mt-auto pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[#E12559] font-bold text-base md:text-lg">{{ number_format($product->price * 1000, 0, ',', '.') }} đ</span>
                                @if($product->old_price)
                                    <span class="text-gray-400 line-through text-[10px] md:text-[11px] font-medium">{{ number_format($product->old_price * 1000, 0, ',', '.') }} đ</span>
                                @endif
                            </div>
                            
                            <button class="bg-[#0a3d3c] text-white px-3 py-1.5 md:px-4 md:py-2 rounded-full text-[9px] md:text-xs font-bold uppercase tracking-wider hover:bg-[#E12559] hover:shadow-md transition-colors duration-300">
                                Mua hàng
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            {{-- Nút Xem thêm --}}
            <div class="mt-16 md:mt-20 flex justify-center">
                <a href="#" class="inline-flex items-center gap-2 font-bold text-[#0a3d3c] hover:text-[#E12559] transition-colors group text-base md:text-lg pb-1 relative">
                    Xem thêm
                    <i class="fa-solid fa-arrow-right text-sm transform group-hover:translate-x-1 transition-transform"></i>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#0a3d3c] group-hover:bg-[#E12559] transition-colors"></span>
                </a>
            </div>

        </div>
    </section>

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
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Điều khoản dịch vụ</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Chính sách bảo mật</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-gray-900 text-lg mb-6">Phương thức thanh toán</h3>
                <div class="flex flex-wrap gap-3">
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">VISA</div>
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">JCB</div>
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">MC</div>
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">COD</div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 mt-12 pt-8 border-t border-gray-200 text-center">
            <p class="text-gray-500 text-sm">
                © 2025 Nàng Tiên Hoa. All rights reserved.
            </p>
        </div>
    </footer>

    {{-- ========================================== --}}
    {{-- 4. SCRIPT JAVASCRIPT                        --}}
    {{-- ========================================== --}}
    <script>
        // Toggle Thanh Tìm Kiếm
        function toggleSearch() {
            const searchBar = document.getElementById('search-bar');
            searchBar.classList.toggle('opacity-100');
            searchBar.classList.toggle('visible');
            searchBar.classList.toggle('invisible');
            searchBar.classList.toggle('translate-y-4');
            searchBar.classList.toggle('translate-y-0');
        }

        // Carousel Media (ảnh/video) - Tự động chuyển slide
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.add('opacity-100', 'z-10');
                    slide.classList.remove('opacity-0', 'z-0', 'pointer-events-none');
                    
                    // Nếu là video, tự động play
                    const video = slide.querySelector('video');
                    if (video) {
                        video.play();
                    }
                } else {
                    slide.classList.remove('opacity-100', 'z-10');
                    slide.classList.add('opacity-0', 'z-0', 'pointer-events-none');
                    
                    // Nếu là video, pause và reset về đầu
                    const video = slide.querySelector('video');
                    if (video) {
                        video.pause();
                        video.currentTime = 0;
                    }
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Tự động chuyển slide mỗi 4 giây
        setInterval(nextSlide, 4000);

        // Hiển thị slide đầu tiên khi tải trang
        showSlide(0);
    </script>

    </script>

</x-app-layout>

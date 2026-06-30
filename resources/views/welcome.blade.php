<x-app-layout>

    {{-- THÊM FONT CHỮ CHO TOÀN TRANG --}}
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&display=swap" rel="stylesheet">

    {{-- ========================================== --}}
    {{-- 1. THANH ĐIỀU HƯỚNG (HEADER)               --}}
    {{-- ========================================== --}}
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

            {{-- Menu chính --}}
            <nav class="hidden md:block">
                <ul class="flex items-center gap-4 lg:gap-7 text-[13px] font-bold text-gray-800 uppercase tracking-wide">
                    <li><a href="#" class="hover:text-[#D81B60] transition">Trang chủ</a></li>
                    
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

                    {{-- Menu: Đặt hoa --}}
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
    {{-- 2. KHU VỰC HERO BANNER                     --}}
    {{-- ========================================== --}}
<section class="relative w-full h-[600px] md:h-[700px] lg:h-[600px] overflow-hidden bg-gray-900">
    
    <button id="home-banner-prev" class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-40 bg-black/40 hover:bg-black/80 text-white w-12 h-12 flex items-center justify-center rounded-full text-2xl transition-all shadow-lg border border-white/20">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button id="home-banner-next" class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-40 bg-black/40 hover:bg-black/80 text-white w-12 h-12 flex items-center justify-center rounded-full text-2xl transition-all shadow-lg border border-white/20">
        <i class="fa-solid fa-chevron-right"></i>
    </button>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-30">
        @foreach($bannerMedia as $index => $item)
            <button class="banner-dot h-3 rounded-full transition-all duration-300 {{ $index == 0 ? 'bg-white w-10' : 'bg-white/40 w-3 hover:bg-white/70' }}"></button>
        @endforeach
    </div>

    <div id="full-slide-track" class="flex w-full h-full transition-transform duration-1000 ease-in-out" style="transform: translateX(0%);">
        
        @foreach($bannerMedia as $index => $item)
            <div class="w-full h-full flex-shrink-0 relative flex items-center">
                
                <div class="absolute inset-0 w-full h-full z-0">
                    @if($item['type'] == 'image')
                        <img src="{{ asset('images/' . $item['src']) }}" class="w-full h-full object-cover">
                    @else
                        <video src="{{ asset('images/' . $item['src']) }}" class="w-full h-full object-cover" muted playsinline></video>
                    @endif
                </div>

                @if($item['title'])
                    <div class="relative z-20 w-full px-10 md:px-16 lg:px-24 xl:px-32 flex justify-start">
                        <div class="text-left max-w-2xl">
                            <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif font-bold text-white mb-6 drop-shadow-[0_2px_4px_rgba(0,0,0,0.5)] whitespace-nowrap">
                                {{ $item['title'] }}
                            </h1>
                            <p class="text-base md:text-lg lg:text-xl text-gray-100 mb-10 drop-shadow-[0_1px_3px_rgba(0,0,0,0.5)] font-light pr-10">
                                {{ $item['desc'] }}
                            </p>
                            <a href="#shop" class="inline-flex items-center gap-3 bg-[#E12559] text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-[#E12559] transition-colors shadow-xl">
                                Khám phá ngay <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        @endforeach

    </div>
</section>

    {{-- ========================================== --}}
    {{-- 3. THANH THÔNG BÁO TIỆN ÍCH  --}}
    {{-- ========================================== --}}
    <div class="w-full bg-[#F7F5F0] border-y border-gray-200 py-3 hidden md:block">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center text-xs font-bold text-gray-700 uppercase tracking-wider">
            <div class="flex items-center gap-2"><i class="fa-solid fa-rotate-left"></i> Đổi trả miễn phí khi sự cố</div>
            <div class="flex items-center gap-2"><i class="fa-solid fa-lock"></i> Thanh toán bảo mật</div>
            <div class="flex items-center gap-2"><i class="fa-solid fa-leaf"></i> Hoa tươi 100% tự nhiên</div>
            <div class="flex items-center gap-2"><i class="fa-regular fa-star"></i> 4.8/5 từ 17K Đánh giá</div>
            <div class="flex items-center gap-2"><i class="fa-solid fa-truck-fast"></i> Miễn phí ship đơn từ 175K</div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- 4. KHU VỰC HOA BÁN CHẠY NHẤT  --}}
    {{-- ========================================== --}}
    <section class="max-w-7xl mx-auto px-6 py-20 border-t border-gray-50">
        <div class="text-center mb-6">
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 mb-6">
                Hoa Bán Chạy Nhất
            </h2>
        </div>

        <div class="flex justify-center gap-6 md:gap-12 mb-10 border-b border-gray-200">
            <button onclick="switchTabBestSeller('ban-chay')" id="btn-ban-chay" class="pb-3 border-b-2 border-black font-bold text-black transition text-sm md:text-base uppercase tracking-wider focus:outline-none">
                Bán chạy
            </button>
            <button onclick="switchTabBestSeller('dang-hot')" id="btn-dang-hot" class="pb-3 border-b-2 border-transparent font-medium text-gray-400 hover:text-black transition text-sm md:text-base uppercase tracking-wider focus:outline-none">
                Đang Hot
            </button>
            <button onclick="switchTabBestSeller('tiet-kiem')" id="btn-tiet-kiem" class="pb-3 border-b-2 border-transparent font-medium text-gray-400 hover:text-black transition text-sm md:text-base uppercase tracking-wider focus:outline-none">
                Tiết kiệm
            </button>
        </div>

        <div class="relative">
            @php
                $allTabs = [
                    'ban-chay' => $bestSellers,
                    'dang-hot' => $hotProducts,
                    'tiet-kiem' => $savingProducts
                ];
            @endphp

            @foreach($allTabs as $tabId => $productsList)
           
            <div id="bestseller-panel-{{ $tabId }}" class="tab-bestseller {{ $tabId == 'ban-chay' ? 'flex' : 'hidden' }} overflow-x-auto snap-x snap-mandatory gap-6 pb-8 hide-scroll">
                @foreach($productsList as $product)
                <a href="/san-pham/{{ $product->id }}" class="block">
                <div class="group cursor-pointer flex flex-col min-w-[260px] md:min-w-[280px] snap-start bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    
                    <div class="relative aspect-[3/4] w-full overflow-hidden bg-gray-50">
                        @if($product->badge)
                            <div class="absolute top-3 left-3 bg-[#E12559] text-white text-[10px] font-bold px-2.5 py-1 rounded-md z-10 uppercase tracking-wider shadow-sm">
                                {{ $product->badge }}
                            </div>
                        @endif
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-bold px-2 py-1 rounded-md shadow-sm z-10 flex items-center gap-1">
                            <i class="fa-solid fa-star text-yellow-400"></i> {{ $product->rating }}
                        </div>

                        <img src="{{ asset('images/' . ($product->image ?: 'prod-placeholder.jpg')) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold text-gray-900 group-hover:text-[#E12559] transition duration-300 line-clamp-1">
                            {{ $product->name }}
                        </h3>

                        <div class="mt-auto pt-4 flex items-center justify-between">
                            <div class="flex flex-col">
                                {{-- Giá tiền đã chuẩn hóa định dạng (Hiển thị nguyên mẫu giá trị nhập từ phpMyAdmin) --}}
                               <span class="text-[#E12559] font-bold text-lg">{{ number_format($product->price, 0, ',', '.') }} đ</span>
                                    @if($product->old_price && $product->old_price > 0)
                                        <span class="text-gray-400 line-through text-[11px] font-medium">{{ number_format($product->old_price, 0, ',', '.') }} đ</span>
                                    @endif
                            </div>
                            
                            <button class="bg-[#0a3d3c] text-white px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider hover:bg-[#E12559] hover:shadow-md transition-colors duration-300">
                                Mua hàng
                            </button>
                        </div>
                    </div>
                </div>
            </a>@endforeach

            {{-- Nút Xem thêm --}}
            <div class="min-w-[260px] md:min-w-[280px] snap-start flex items-center justify-center">
                <a href="/xem-them/{{ $tabId }}" class="flex flex-col items-center justify-center w-full h-full min-h-[300px] border-2 border-dashed border-gray-200 rounded-2xl hover:border-[#E12559] hover:bg-pink-50 transition-all duration-300 group">
                    <div class="w-16 h-16 rounded-full bg-gray-100 group-hover:bg-[#E12559] flex items-center justify-center mb-4 transition-colors duration-300">
                        <i class="fa-solid fa-plus text-2xl text-gray-400 group-hover:text-white transition-colors duration-300"></i>
                    </div>
                    <span class="text-gray-500 group-hover:text-[#E12559] font-medium text-sm uppercase tracking-wider transition-colors duration-300">Xem thêm</span>
                </a>
            </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- ========================================== --}}
    {{--  5. KHU VỰC BỘ SƯU TẬP & CAM KẾT             --}}
    {{-- ========================================== --}}
    <section class="max-w-7xl mx-auto px-6 py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="grid grid-cols-2 gap-4">
                <img src="{{ asset('images/bosuutap1.jpg') }}" alt="Bộ sưu tập 1" class="w-full h-[400px] md:h-[500px] object-cover rounded-2xl shadow-sm hover:opacity-90 transition">
                <img src="{{ asset('images/bosuutap2.jpg') }}" alt="Bộ sưu tập 2" class="w-full h-[400px] md:h-[500px] object-cover rounded-2xl shadow-sm hover:opacity-90 transition mt-8"> 
            </div>

            <div class="pl-0 lg:pl-8">
                <p class="text-sm font-bold text-gray-500 mb-3 tracking-wide">Bắt nhịp xu hướng thời đại</p>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-10 relative inline-block">
                    KHÁM PHÁ BỘ SƯU TẬP HOA MỚI
                    <span class="absolute -bottom-3 left-0 w-24 h-1.5 bg-yellow-400 rounded-full"></span>
                </h2>

                <ul class="divide-y divide-gray-200 mt-8">
                    <li class="py-6 flex justify-between items-center group cursor-pointer">
                        <span class="text-xl text-gray-800 group-hover:text-[#0a3d3c] transition duration-300 font-medium">Hoa mộc lan & thời trang</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-[#0a3d3c] group-hover:translate-x-1 transition duration-300"></i>
                    </li>
                    <li class="py-6 flex justify-between items-center group cursor-pointer">
                        <span class="text-xl text-gray-800 group-hover:text-[#0a3d3c] transition duration-300 font-medium">Hoa hồng Ecuador và quà tặng</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-[#0a3d3c] group-hover:translate-x-1 transition duration-300"></i>
                    </li>
                    <li class="py-6 flex justify-between items-center group cursor-pointer">
                        <span class="text-xl text-gray-800 group-hover:text-[#0a3d3c] transition duration-300 font-medium">Hoa baby renbow theo yêu cầu</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-[#0a3d3c] group-hover:translate-x-1 transition duration-300"></i>
                    </li>
                    <li class="py-6 flex justify-between items-center group cursor-pointer">
                        <span class="text-xl text-gray-800 group-hover:text-[#0a3d3c] transition duration-300 font-medium">Thanh liễu cắm chậu</span>
                        <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-[#0a3d3c] group-hover:translate-x-1 transition duration-300"></i>
                    </li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-28 pt-16 border-t border-gray-100">
            <div class="flex flex-col items-center text-center group">
                <div class="w-20 h-20 rounded-full bg-gray-50 flex items-center justify-center mb-6 group-hover:bg-gray-100 transition">
                    <img src="{{ asset('images/icongiaohang.png') }}" alt="Giao Hàng" class="w-10 h-10 object-contain">
                </div>
                <h4 class="font-bold text-lg text-gray-900 mb-3">Giao Hàng Tận Nơi</h4>
                <p class="text-sm text-gray-500 leading-relaxed max-w-xs">Cam kết giao hoa hỏa tốc, an toàn và giữ nguyên vẹn độ tươi mới đến tận tay người nhận.</p>
            </div>
            <div class="flex flex-col items-center text-center group">
                <div class="w-20 h-20 rounded-full bg-gray-50 flex items-center justify-center mb-6 group-hover:bg-gray-100 transition">
                    <img src="{{ asset('images/iconhoatuoi.png') }}" alt="Chất Lượng" class="w-10 h-10 object-contain">
                </div>
                <h4 class="font-bold text-lg text-gray-900 mb-3">Hoa Tươi 100%</h4>
                <p class="text-sm text-gray-500 leading-relaxed max-w-xs">Sản phẩm được cắt tại vườn mỗi ngày, không sử dụng hóa chất bảo quản độc hại.</p>
            </div>
            <div class="flex flex-col items-center text-center group">
                <div class="w-20 h-20 rounded-full bg-gray-50 flex items-center justify-center mb-6 group-hover:bg-gray-100 transition">
                    <img src="{{ asset('images/iconmoitruong.png') }}" alt="Môi Trường" class="w-10 h-10 object-contain">
                </div>
                <h4 class="font-bold text-lg text-gray-900 mb-3">Thân Thiện Môi Trường</h4>
                <p class="text-sm text-gray-500 leading-relaxed max-w-xs">Sử dụng giấy gói Kraft và vật liệu dễ phân hủy sinh học, góp phần bảo vệ môi trường.</p>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 6. KHU VỰC DANH MỤC HOA CAO CẤP (TABS)     --}}
    {{-- ========================================== --}}
    <section class="max-w-7xl mx-auto px-6 py-20 border-t border-gray-100 mt-12">
        <div class="text-center mb-12 overflow-hidden">
            <h2 class="text-2xl md:text-4xl font-serif font-bold text-gray-900 whitespace-nowrap">
                Danh mục hoa cao cấp
            </h2>
            <p class="text-sm font-bold text-gray-500 mb-3 tracking-wide">Bông hoa này xứng đáng với bạn và những người quan trọng</p>
        </div>

        <div class="flex justify-center gap-6 md:gap-16 mb-8">
            <button onclick="switchTab(1)" class="group flex flex-col items-center focus:outline-none">
                <div id="ring-1" class="w-16 h-16 md:w-20 md:h-20 rounded-full p-1 border-2 border-[#0a3d3c] transition-all duration-300">
                    <img src="{{ asset('images/iconhoahong.png') }}" alt="Hoa hồng Juliet" class="w-full h-full object-cover rounded-full group-hover:scale-105 transition duration-300">
                </div>
                <span id="text-1" class="mt-3 text-xs md:text-sm font-bold text-[#0a3d3c] transition">Hoa hồng Juliet</span>
            </button>
            <button onclick="switchTab(2)" class="group flex flex-col items-center focus:outline-none">
                <div id="ring-2" class="w-16 h-16 md:w-20 md:h-20 rounded-full p-1 border-2 border-transparent transition-all duration-300">
                    <img src="{{ asset('images/icontulip.png') }}" alt="Tulip Hà Lan" class="w-full h-full object-cover rounded-full group-hover:scale-105 transition duration-300">
                </div>
                <span id="text-2" class="mt-3 text-xs md:text-sm font-medium text-gray-500 transition">Tulip Hà Lan</span>
            </button>
            <button onclick="switchTab(3)" class="group flex flex-col items-center focus:outline-none">
                <div id="ring-3" class="w-16 h-16 md:w-20 md:h-20 rounded-full p-1 border-2 border-transparent transition-all duration-300">
                    <img src="{{ asset('images/iconmaudon.png') }}" alt="Hoa mẫu đơn" class="w-full h-full object-cover rounded-full group-hover:scale-105 transition duration-300">
                </div>
                <span id="text-3" class="mt-3 text-xs md:text-sm font-medium text-gray-500 transition">Hoa mẫu đơn nhập khẩu</span>
            </button>
            <button onclick="switchTab(4)" class="group flex flex-col items-center focus:outline-none">
                <div id="ring-4" class="w-16 h-16 md:w-20 md:h-20 rounded-full p-1 border-2 border-transparent transition-all duration-300">
                    <img src="{{ asset('images/iconbaby.png') }}" alt="Hoa baby" class="w-full h-full object-cover rounded-full group-hover:scale-105 transition duration-300">
                </div>
                <span id="text-4" class="mt-3 text-xs md:text-sm font-medium text-gray-500 transition">Hoa baby Nhật bản</span>
            </button>
            <button onclick="switchTab(5)" class="group flex flex-col items-center focus:outline-none">
                <div id="ring-5" class="w-16 h-16 md:w-20 md:h-20 rounded-full p-1 border-2 border-transparent transition-all duration-300">
                    <img src="{{ asset('images/iconcaocap.png') }}" alt="Hoa cao cấp" class="w-full h-full object-cover rounded-full group-hover:scale-105 transition duration-300">
                </div>
                <span id="text-5" class="mt-3 text-xs md:text-sm font-medium text-gray-500 transition">Hoa cao cấp</span>
            </button>
        </div>

        <div class="max-w-2xl mx-auto h-0.5 bg-gray-200 mb-12 relative">
            <div id="tab-indicator" class="absolute top-0 left-0 h-full bg-[#0a3d3c] transition-all duration-500 w-1/5"></div>
        </div>

        <div class="relative">
            @php
                $premiumTabs = [
                    1 => $julietFlowers,
                    2 => $tulipFlowers,
                    3 => $peonyFlowers,
                    4 => $babyFlowers,
                    5 => $premiumFlowers
                ];
            @endphp

            @foreach($premiumTabs as $tab => $products)
            <div id="tab-content-{{ $tab }}" class="tab-panel {{ $tab == 1 ? 'flex' : 'hidden' }} overflow-x-auto gap-6 pb-8 snap-x snap-mandatory scroll-smooth hide-scroll">
                @foreach($products as $product)
                <a href="/san-pham/{{ $product->id }}" class="block snap-start shrink-0">
                    <div class="group cursor-pointer flex flex-col w-[260px] md:w-[280px] bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                        
                        <div class="relative aspect-[3/4] w-full overflow-hidden bg-gray-50">
                            @if($product->badge)
                                <div class="absolute top-3 left-3 bg-[#E12559] text-white text-[10px] font-bold px-2.5 py-1 rounded-md z-10 uppercase tracking-wider shadow-sm">
                                    {{ $product->badge }}
                                </div>
                            @endif
                            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-bold px-2 py-1 rounded-md shadow-sm z-10 flex items-center gap-1">
                                <i class="fa-solid fa-star text-yellow-400"></i> {{ $product->rating }}
                            </div>

                            <img src="{{ asset('images/' . ($product->image ?: 'prod-placeholder.jpg')) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="font-bold text-gray-900 group-hover:text-[#E12559] transition duration-300 line-clamp-1">
                                {{ $product->name }}
                            </h3>

                            <div class="mt-auto pt-4 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-[#E12559] font-bold text-lg">{{ number_format($product->price, 0, ',', '.') }} đ</span>
                                    @if($product->old_price)
                                        <span class="text-gray-400 line-through text-[11px] font-medium">{{ number_format($product->old_price, 0, ',', '.') }} đ</span>
                                    @endif
                                </div>
                                
                                <button class="bg-[#0a3d3c] textsss-white px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider hover:bg-[#E12559] hover:shadow-md transition-colors duration-300">
                                    Mua hàng
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

                {{-- Nút Xem thêm cho Hoa cao cấp --}}
                @if($tab == 5)
                <div class="min-w-[260px] md:min-w-[280px] snap-start flex items-center justify-center">
                    <a href="/xem-them/hoa-cao-cap" class="flex flex-col items-center justify-center w-full h-full min-h-[300px] border-2 border-dashed border-gray-200 rounded-2xl hover:border-[#E12559] hover:bg-pink-50 transition-all duration-300 group">
                        <div class="w-16 h-16 rounded-full bg-gray-100 group-hover:bg-[#E12559] flex items-center justify-center mb-4 transition-colors duration-300">
                            <i class="fa-solid fa-plus text-2xl text-gray-400 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <span class="text-gray-500 group-hover:text-[#E12559] font-medium text-sm uppercase tracking-wider transition-colors duration-300">Xem thêm</span>
                    </a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 7. SỰ KIỆN NỔI BẬT--}}
    {{-- ========================================== --}}
    <section class="max-w-7xl mx-auto px-10 py-16 mt-12 mb-12">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900">Sự kiện nổi bật</h2>
            <p class="text-gray-500 mt-3 text-sm md:text-base">Lựa chọn những bó hoa dành cho những sự kiện quan trọng trong cuộc đời bạn</p>
        </div>

        <div class="flex justify-center gap-2 mb-6" id="event-carousel-dots">
            <button onclick="goToEventSlide(0)" class="event-dot transition-all duration-300 w-8 h-2.5 rounded-full bg-[#0a3d3c]"></button>
            <button onclick="goToEventSlide(1)" class="event-dot transition-all duration-300 w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400"></button>
            <button onclick="goToEventSlide(2)" class="event-dot transition-all duration-300 w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400"></button>
            <button onclick="goToEventSlide(3)" class="event-dot transition-all duration-300 w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400"></button>
            <button onclick="goToEventSlide(4)" class="event-dot transition-all duration-300 w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400"></button>
        </div>

        <div class="relative overflow-hidden rounded-2xl shadow-lg bg-gray-100 h-[250px] md:h-[450px]">
            <div id="event-carousel-track" class="flex w-full h-full transition-transform duration-500 ease-out" style="transform: translateX(0%);">
                
                {{-- 1. TẠO DANH SÁCH ẢNH VÀ TÊN SỰ KIỆN TƯƠNG ỨNG --}}
                @php
                    $eventList = [
                        1 => ['image' => 'bannervalentine.jpg', 'name' => 'Lễ Tình Nhân Valentine'],
                        2 => ['image' => 'bannerngvn.jpg', 'name' => 'Ngày Nhà Giáo VN 20/11'],
                        3 => ['image' => 'bannerme.jpg', 'name' => 'Ngày Của Mẹ'],
                        4 => ['image' => 'bannersale.jpg', 'name' => 'Siêu Sale Xả Kho'],
                        5 => ['image' => 'bannertotnghiep.jpg', 'name' => 'Mùa Lễ Tốt Nghiệp']
                    ];
                @endphp

                {{-- 2. CHẠY VÒNG LẶP --}}
                @for($i = 1; $i <= 5; $i++)
                    <div class="w-full h-full flex-shrink-0 relative group cursor-pointer">
                        
                        {{-- Mã gọi ảnh đã được sửa chuẩn --}}
                        <img src="{{ asset('images/' . $eventList[$i]['image']) }}" alt="{{ $eventList[$i]['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            
                            {{-- Tự động in tên sự kiện tương ứng với ảnh --}}
                            <h3 class="text-2xl md:text-4xl font-serif font-bold drop-shadow-md">{{ $eventList[$i]['name'] }}</h3>
                            
                            <div class="flex items-center gap-2 mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="text-sm font-medium uppercase tracking-wider">Khám phá ngay</span>
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 8. KHU VỰC HOA ĐANG GIẢM GIÁ (SALE)        --}}
    {{-- ========================================== --}}
    <section class="max-w-7xl mx-auto px-6 py-20 border-t border-gray-50">
        <div class="mb-12">
            <p class="text-sm font-bold text-[#D81B60] mb-2 uppercase tracking-wide">
                <i class="fa-regular fa-clock mr-1"></i> Áp dụng đến ngày 25/04/2026
            </p>
            <h2 class="text-3xl font-serif font-bold text-gray-900 inline-block relative pb-4">
                Hoa đang giảm giá
                <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-[#0a3d3c] rounded-full"></span>
            </h2>
        </div>

        <div class="relative">
            <!-- Nút điều hướng trái/phải -->
            <button onclick="scrollDiscounted('left')" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-gray-800 w-10 h-10 flex items-center justify-center rounded-full shadow-lg transition-all duration-300 -ml-5">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button onclick="scrollDiscounted('right')" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-gray-800 w-10 h-10 flex items-center justify-center rounded-full shadow-lg transition-all duration-300 -mr-5">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            {{-- Thay lưới bằng thanh cuộn ngang Flexbox --}}
            <div id="discounted-scroll" class="flex overflow-x-auto gap-6 pb-8 snap-x snap-mandatory scroll-smooth hide-scroll">
            @foreach($discountedFlowers as $product)
            {{-- Thẻ a bao bọc toàn bộ card để click nhảy trang --}}
            <a href="/san-pham/{{ $product->id }}" class="block snap-start shrink-0">
                {{-- Khung card đồng phục viền trắng --}}
                <div class="group cursor-pointer flex flex-col w-[260px] md:w-[280px] bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    
                    <div class="relative aspect-[3/4] w-full overflow-hidden bg-gray-50">
                        @if($product->old_price && $product->old_price > $product->price)
                            <div class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-md z-10 shadow-sm">
                                -{{ round((($product->old_price - $product->price) / $product->old_price) * 100) }}%
                            </div>
                        @endif
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-bold px-2 py-1 rounded-md shadow-sm z-10 flex items-center gap-1">
                            <i class="fa-solid fa-star text-yellow-400"></i> {{ $product->rating }}
                        </div>
                        <img src="{{ asset('images/' . ($product->image ?: 'prod-placeholder.jpg')) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>

                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold text-gray-900 group-hover:text-[#E12559] transition duration-300 line-clamp-1">
                            {{ $product->name }}
                        </h3>

                        <div class="mt-auto pt-4 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[#E12559] font-bold text-lg">{{ number_format($product->price, 0, ',', '.') }} đ</span>
                                @if($product->old_price)
                                    <span class="text-gray-400 line-through text-[11px] font-medium">{{ number_format($product->old_price, 0, ',', '.') }} đ</span>
                                @endif
                            </div>
                            
                            <button class="bg-[#0a3d3c] text-white px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider hover:bg-[#E12559] hover:shadow-md transition-colors duration-300">
                                Mua hàng
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 9. KHU VỰC HOA CHÚC MỪNG                   --}}
    {{-- ========================================== --}}
    <section class="max-w-7xl mx-auto px-6 py-16 border-t border-gray-50">
        <div class="mb-12">
            <h2 class="text-3xl font-serif font-bold text-gray-900 inline-block relative pb-4">
                Hoa chúc mừng
                <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-[#0a3d3c] rounded-full"></span>
            </h2>
        </div>

        <div class="relative">
            <!-- Nút điều hướng trái/phải -->
            <button onclick="scrollCongrats('left')" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-gray-800 w-10 h-10 flex items-center justify-center rounded-full shadow-lg transition-all duration-300 -ml-5">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button onclick="scrollCongrats('right')" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-gray-800 w-10 h-10 flex items-center justify-center rounded-full shadow-lg transition-all duration-300 -mr-5">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            {{-- Thay lưới bằng thanh cuộn ngang Flexbox --}}
            <div id="congrats-scroll" class="flex overflow-x-auto gap-6 pb-8 snap-x snap-mandatory scroll-smooth hide-scroll">
            @foreach($congratsFlowers as $product)
            {{-- Thẻ a bao bọc toàn bộ card để click nhảy trang --}}
            <a href="/san-pham/{{ $product->id }}" class="block snap-start shrink-0">
                {{-- Khung card đồng phục viền trắng --}}
                <div class="group cursor-pointer flex flex-col w-[260px] md:w-[280px] bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    
                    <div class="relative aspect-[3/4] w-full overflow-hidden bg-gray-50">
                        @if($product->badge)
                            <div class="absolute top-3 left-3 bg-[#0a3d3c] text-white text-[10px] font-bold px-2.5 py-1 rounded-md z-10 uppercase shadow-sm">
                                {{ $product->badge }}
                            </div>
                        @endif
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-bold px-2 py-1 rounded-md shadow-sm z-10 flex items-center gap-1">
                            <i class="fa-solid fa-star text-yellow-400"></i> {{ $product->rating }}
                        </div>
                        <img src="{{ asset('images/' . ($product->image ?: 'prod-placeholder.jpg')) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>

                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="font-bold text-gray-900 group-hover:text-[#E12559] transition duration-300 line-clamp-1">
                            {{ $product->name }}
                        </h3>

                        <div class="mt-auto pt-4 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[#E12559] font-bold text-lg">{{ number_format($product->price, 0, ',', '.') }} đ</span>
                                @if($product->old_price)
                                    <span class="text-gray-400 line-through text-[11px] font-medium">{{ number_format($product->old_price, 0, ',', '.') }} đ</span>
                                @endif
                            </div>
                            
                            <button class="bg-[#0a3d3c] text-white px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider hover:bg-[#E12559] hover:shadow-md transition-colors duration-300">
                                Mua hàng
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 10. NHÀ CUNG CẤP LỚN (FEATURED BRANDS)     --}}
    {{-- ========================================== --}}
    <section class="max-w-7xl mx-auto px-6 py-16 border-t border-gray-50 mb-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-3">
                Các nhà cung cấp lớn
            </h2>
            <p class="text-sm md:text-base text-gray-500 tracking-wide">
                Các nhà cung cấp lớn luôn mang lại giá trị cốt lõi cho bạn
            </p>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-12 md:gap-24">
            <div class="w-32 md:w-48 flex flex-col items-center justify-center gap-3 group cursor-pointer">
                <div class="h-16 w-full flex items-center justify-center grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                    <img src="{{ asset('images/brand-1.png') }}" alt="DALAT HASFARM" class="max-h-full max-w-full object-contain">
                </div>
                <span class="text-[11px] md:text-xs font-bold text-gray-400 uppercase tracking-wider group-hover:text-[#0a3d3c] transition text-center text-balance">
                    DALAT HASFARM
                </span>
            </div>

            <div class="w-32 md:w-48 flex flex-col items-center justify-center gap-3 group cursor-pointer">
                <div class="h-16 w-full flex items-center justify-center grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                    <img src="{{ asset('images/brand-2.png') }}" alt="Công Ty TNHH Hoa Mặt Trời" class="max-h-full max-w-full object-contain">
                </div>
                <span class="text-[11px] md:text-xs font-bold text-gray-400 uppercase tracking-wider group-hover:text-[#0a3d3c] transition text-center text-balance">
                    Công Ty TNHH Hoa Mặt Trời
                    <br><span class="text-[9px] font-medium">(Lan Hồ Điệp)</span>
                </span>
            </div>

            <div class="w-32 md:w-48 flex flex-col items-center justify-center gap-3 group cursor-pointer">
                <div class="h-16 w-full flex items-center justify-center grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                    <img src="{{ asset('images/brand-3.png') }}" alt="Dümmen Orange" class="max-h-full max-w-full object-contain">
                </div>
                <span class="text-[11px] md:text-xs font-bold text-gray-400 uppercase tracking-wider group-hover:text-[#0a3d3c] transition text-center text-balance">
                    Dümmen Orange
                    <br><span class="text-[9px] font-medium">(Hà Lan)</span>
                </span>
            </div>

            <div class="w-32 md:w-48 flex flex-col items-center justify-center gap-3 group cursor-pointer">
                <div class="h-16 w-full flex items-center justify-center grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                    <img src="{{ asset('images/brand-4.png') }}" alt="Ecuador Rose Farms" class="max-h-full max-w-full object-contain">
                </div>
                <span class="text-[11px] md:text-xs font-bold text-gray-400 uppercase tracking-wider group-hover:text-[#0a3d3c] transition text-center text-balance">
                    Ecuador Rose Farms
                </span>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 11. KHU VỰC FOOTER (CHÂN TRANG)            --}}
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

    {{-- ========================================== --}}
    {{-- KHU VỰC CSS & JAVASCRIPT GỘP CHUNG BÊN DƯỚI--}}
    {{-- ========================================== --}}
    <style>
        /* CSS ẩn thanh cuộn ngang trên mọi trình duyệt để nhìn vuốt mượt như app */
        .hide-scroll::-webkit-scrollbar, .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scroll, .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>

    <script>
        // 1. Script Kính lúp tìm kiếm
        function toggleSearch() {
            const searchBar = document.getElementById('search-bar');
            if (searchBar.classList.contains('invisible')) {
                searchBar.classList.remove('invisible', 'opacity-0', 'translate-y-4');
                searchBar.classList.add('visible', 'opacity-100', 'translate-y-0');
                searchBar.querySelector('input').focus(); 
            } else {
                searchBar.classList.add('invisible', 'opacity-0', 'translate-y-4');
                searchBar.classList.remove('visible', 'opacity-100', 'translate-y-0');
            }
        }

        // 2. Script Đổi Tab Hoa Bán Chạy
        function switchTabBestSeller(tabId) {
            const allPanels = document.querySelectorAll('.tab-bestseller');
            allPanels.forEach(panel => {
                panel.classList.add('hidden');
                panel.classList.remove('flex'); 
            });
            
            const activePanel = document.getElementById('bestseller-panel-' + tabId);
            if (activePanel) {
                activePanel.classList.remove('hidden');
                activePanel.classList.add('flex'); 
            }

            const buttonIds = ['btn-ban-chay', 'btn-dang-hot', 'btn-tiet-kiem'];
            buttonIds.forEach(id => {
                const btn = document.getElementById(id);
                if (btn) {
                    if (id === 'btn-' + tabId) {
                        btn.classList.remove('border-transparent', 'text-gray-400');
                        btn.classList.add('border-black', 'text-black');
                    } else {
                        btn.classList.remove('border-black', 'text-black');
                        btn.classList.add('border-transparent', 'text-gray-400');
                    }
                }
            });
        }

        // 3. Script Đổi Tab Danh Mục Hoa Cao Cấp
        function switchTab(tabIndex) {
            document.querySelectorAll('.tab-panel').forEach(panel => {
                panel.classList.remove('flex');
                panel.classList.add('hidden');
            });
            document.getElementById('tab-content-' + tabIndex).classList.remove('hidden');
            document.getElementById('tab-content-' + tabIndex).classList.add('flex');

            const indicator = document.getElementById('tab-indicator');
            indicator.style.left = ((tabIndex - 1) * 20) + '%';

            for(let i = 1; i <= 5; i++) {
                let ring = document.getElementById('ring-' + i);
                let text = document.getElementById('text-' + i);
                
                if(i === tabIndex) {
                    ring.classList.replace('border-transparent', 'border-[#0a3d3c]');
                    text.classList.replace('text-gray-500', 'text-[#0a3d3c]');
                    text.classList.replace('font-medium', 'font-bold');
                } else {
                    ring.classList.replace('border-[#0a3d3c]', 'border-transparent');
                    text.classList.replace('text-[#0a3d3c]', 'text-gray-500');
                    text.classList.replace('font-bold', 'font-medium');
                }
            }
        }

        // 4. Script Banner Sự Kiện Tự Chạy
        let currentEventSlide = 0;
        const totalEventSlides = 5;

        function goToEventSlide(index) {
            currentEventSlide = index;
            const track = document.getElementById('event-carousel-track');
            track.style.transform = `translateX(-${index * 100}%)`;

            const dots = document.querySelectorAll('.event-dot');
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-gray-300', 'w-2.5');
                    dot.classList.add('bg-[#0a3d3c]', 'w-8');
                } else {
                    dot.classList.remove('bg-[#0a3d3c]', 'w-8');
                    dot.classList.add('bg-gray-300', 'w-2.5');
                }
            });
        }

        setInterval(() => {
            let nextSlide = (currentEventSlide + 1) % totalEventSlides;
            goToEventSlide(nextSlide);
        }, 4000);

        // 5. Script Điều hướng cho Hoa đang giảm giá và Hoa chúc mừng
        function scrollDiscounted(direction) {
            const container = document.getElementById('discounted-scroll');
            const scrollAmount = 300; // Khoảng cách cuỗi mỗi lần nhấn
            
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }

        function scrollCongrats(direction) {
            const container = document.getElementById('congrats-scroll');
            const scrollAmount = 300; // Khoảng cách cuỗi mỗi lần nhấn
            
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('full-slide-track');
        const slides = track.children;
        const dots = document.querySelectorAll('.banner-dot');
        const prevBtn = document.getElementById('home-banner-prev');
        const nextBtn = document.getElementById('home-banner-next');

        if (slides.length <= 1) return;

        let currentIndex = 0;
        let slideTimer;

        // Hàm đổi màu và kích thước dấu chấm (Pagination)
        function updateDots(index) {
            dots.forEach((dot, i) => {
                dot.className = i === index 
                    ? 'banner-dot h-3 rounded-full transition-all duration-300 bg-white w-10'
                    : 'banner-dot h-3 rounded-full transition-all duration-300 bg-white/40 w-3 hover:bg-white/70';
            });
        }

        // Hàm dịch chuyển đường ray
        function updateSlider(index) {
            // Dịch chuyển đường ray sang trái: -0%, -100%, -200%...
            track.style.transform = `translateX(-${index * 100}%)`;
            updateDots(index);
        }

        function playCurrentSlide() {
            clearTimeout(slideTimer);
            let currentSlide = slides[currentIndex];
            let video = currentSlide.querySelector('video');

            if (video) {
                // NẾU LÀ VIDEO: Phát video, và ra lệnh "khi nào chạy HẾT (onended) thì mới đổi toa"
                video.play().catch(error => console.log("Autoplay bị chặn"));
                video.onended = function() {
                    manualNextSlide(); // Tự động kéo sang toa khác khi video kết thúc
                };
            } else {
                // NẾU LÀ ẢNH: Đợi 5 giây rồi chuyển toa
                slideTimer = setTimeout(manualNextSlide, 5000);
            }
        }

        // --- HÀM ĐIỀU KHIỂN MANUAL ---
        
        function manualPrevSlide() {
            // Tạm dừng video của toa hiện tại
            let currentVideo = slides[currentIndex].querySelector('video');
            if (currentVideo) {
                currentVideo.pause();
                currentVideo.currentTime = 0;
            }

            // Tính toán toa lùi và kéo băng chuyền sang
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlider(currentIndex);
            
            playCurrentSlide(); // Bắt đầu chạy thời gian cho toa mới
        }

        function manualNextSlide() {
            // Tạm dừng video của toa hiện tại
            let currentVideo = slides[currentIndex].querySelector('video');
            if (currentVideo) {
                currentVideo.pause();
                currentVideo.currentTime = 0;
            }

            // Tính toán toa tiếp theo và kéo băng chuyền sang
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlider(currentIndex);
            
            playCurrentSlide(); // Bắt đầu chạy thời gian cho toa mới
        }

        // --- GẮN SỰ KIỆN CHO NÚT MŨI TÊN Manual ---
        prevBtn.addEventListener('click', manualPrevSlide);
        nextBtn.addEventListener('click', manualNextSlide);

        // Kích hoạt ngay khi vừa vào web
        playCurrentSlide();
    });

    </script>

</x-app-layout>
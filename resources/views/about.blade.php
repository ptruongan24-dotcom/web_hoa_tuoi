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

            {{-- Menu chính --}}
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

    {{-- 2. HERO SECTION - GIỚI THIỆU VỀ CHÚNG TÔI --}}
    <section class="bg-gradient-to-br from-pink-50 via-white to-purple-50 py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight" style="font-family: 'Bacasime Antique', serif;">
                Về Nàng Tiên Hoa
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                Mang vẻ đẹp của thiên nhiên đến từng khoảnh khắc đặc biệt trong cuộc đời bạn
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/gio-hoa-qua-tang" class="inline-flex items-center justify-center gap-3 bg-[#E12559] text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-pink-700 transition-all duration-300 hover:scale-105 shadow-lg">
                    <i class="fa-solid fa-shopping-basket"></i>
                    Khám phá sản phẩm
                </a>
                <a href="#lien-he" class="inline-flex items-center justify-center gap-3 border-2 border-[#E12559] text-[#E12559] px-8 py-4 rounded-full font-bold text-lg hover:bg-[#E12559] hover:text-white transition-all duration-300">
                    <i class="fa-solid fa-phone"></i>
                    Liên hệ ngay
                </a>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 2. CÂU CHUYỆN THƯƠNG HIỆU --}}
    {{-- ========================================== --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Câu Chuyện Của Chúng Tôi</h2>
                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>
                            Nàng Tiên Hoa ra đời từ tình yêu sâu sắc với vẻ đẹp của hoa và mong muốn mang những đóa hoa tươi thắm nhất đến với mọi người. Với hơn 10 năm kinh nghiệm trong ngành hoa tươi, chúng tôi tự hào là địa chỉ tin cậy cho những khoảnh khắc đặc biệt.
                        </p>
                        <p>
                            Chúng tôi không chỉ bán hoa, mà còn trao gửi những cảm xúc, những lời yêu thương và những kỷ niệm đáng nhớ. Mỗi sản phẩm đều được chăm chút tỉ mỉ từ khâu chọn lựa hoa tươi đến thiết kế và gói ghém, đảm bảo mang lại sự hài lòng tuyệt đối với khách hàng.
                        </p>
                        <p>
                            Với đội ngũ nhân viên tận tâm và chuyên nghiệp, Nàng Tiên Hoa cam kết mang đến dịch vụ xuất sắc và những sản phẩm chất lượng vượt trội.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/about-story.jpg') }}" alt="Câu chuyện Nàng Tiên Hoa" class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -bottom-6 -right-6 bg-[#E12559] text-white p-6 rounded-2xl shadow-xl">
                        <div class="text-3xl font-bold mb-2">10+</div>
                        <div class="text-sm">Năm Kinh Nghiệm</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 3. GIÁ TRỊ CỐT LÕI --}}
    {{-- ========================================== --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Giá Trị Cốt Lõi</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Những nguyên tắc định hình nên dịch vụ và sản phẩm của Nàng Tiên Hoa
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-heart text-2xl text-[#E12559]"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Tận Tâm</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Mỗi sản phẩm được chăm chút với tình yêu và sự tận tâm, đảm bảo chất lượng tốt nhất.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-gem text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Chất Lượng</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Hoa tươi được chọn lọc kỹ càng, đảm bảo độ tươi và đẹp lâu nhất.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-leaf text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Tự Nhiên</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ưu tiên các sản phẩm thân thiện với môi trường và phương pháp canh tác bền vững.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-star text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Tuyệt Vời</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Cam kết mang lại trải nghiệm dịch vụ vượt trội và sự hài lòng của khách hàng.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 4. ĐỘI NGŨ CHUYÊN NGHIỆP --}}
    {{-- ========================================== --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Đội Ngũ Của Chúng Tôi</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Những người tận tâm đằng sau mỗi sản phẩm hoa tươi
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="{{ asset('images/team1.jpg') }}" alt="Thiết kế hoa" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Nguyễn Thị Mai</h3>
                    <p class="text-[#E12559] font-medium mb-3">Thiết Kế Trưởng</p>
                    <p class="text-gray-600">
                        Với 8 năm kinh nghiệm thiết kế hoa, chị Mai là người tạo nên những tác phẩm hoa nghệ thuật độc đáo.
                    </p>
                </div>
                
                <div class="text-center">
                    <img src="{{ asset('images/team2.jpg') }}" alt="Chăm sóc khách hàng" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Trần Văn Hùng</h3>
                    <p class="text-[#E12559] font-medium mb-3">Quản Lý Dịch Vụ</p>
                    <p class="text-gray-600">
                        Anh Hùng đảm bảo mọi đơn hàng được giao đúng hẹn và chất lượng dịch vụ luôn ở mức tốt nhất.
                    </p>
                </div>
                
                <div class="text-center">
                    <img src="{{ asset('images/team3.jpg') }}" alt="Chuyên gia hoa" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Lê Thị Hoa</h3>
                    <p class="text-[#E12559] font-medium mb-3">Chuyên Gia Hoa</p>
                    <p class="text-gray-600">
                        Chị Hoa có kiến thức sâu rộng về các loại hoa và luôn chọn được những bông hoa tươi đẹp nhất.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 5. THỐNG KÊ SỐ --}}
    {{-- ========================================== --}}
    <section class="py-20 bg-gradient-to-r from-[#E12559] to-pink-600 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">50,000+</div>
                    <div class="text-lg opacity-90">Khách Hàng Hài Lòng</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">100,000+</div>
                    <div class="text-lg opacity-90">Sản Phẩm Đã Bán</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">4.9/5</div>
                    <div class="text-lg opacity-90">Đánh Giá Trung Bình</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-lg opacity-90">Hỗ Trợ Khách Hàng</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 6. LIÊN HỆ --}}
    {{-- ========================================== --}}
    <section id="lien-he" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Liên Hệ Với Chúng Tôi</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Chúng tôi luôn sẵn sàng lắng nghe và phục vụ bạn
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-map-marker-alt text-2xl text-[#E12559]"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Địa Chỉ</h3>
                    <p class="text-gray-600 leading-relaxed">
                        123 Đường Hoa, Quận 1<br>
                        TP. Hồ Chí Minh
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-phone text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Điện Thoại</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Hotline: (028) 1234 5678<br>
                        Di động: 0912 345 678
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-envelope text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Email</h3>
                    <p class="text-gray-600 leading-relaxed">
                        info@nangtienhoa.vn<br>
                        hotro@nangtienhoa.vn
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 7. FOOTER --}}
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
                <h3 class="font-bold text-gray-900 text-lg mb-6">Cửa hàng</h3>
                <ul class="space-y-4 text-gray-600 text-sm md:text-base mb-6">
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Về chúng tôi</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Tìm cửa hàng</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Ưu đãi đặc biệt</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Chương trình khách hàng thân thiết</a></li>
                </ul>
                <h3 class="font-bold text-gray-900 text-lg mb-4">Phương thức thanh toán</h3>
                <div class="flex flex-wrap gap-3">
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">VISA</div>
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">JCB</div>
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">MC</div>
                    <div class="w-12 h-8 bg-gray-100 rounded flex items-center justify-center text-gray-600 text-xs font-bold">COD</div>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-gray-900 text-lg mb-6">Khám phá sự liên kết</h3>
                <ul class="space-y-4 text-gray-600 text-sm md:text-base">
                    <li><a href="/chung-toi" class="hover:text-[#0a3d3c] transition duration-300">Chúng tôi</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Liên hệ</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Điều khoản dịch vụ</a></li>
                    <li><a href="#" class="hover:text-[#0a3d3c] transition duration-300">Chính sách bảo mật</a></li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 mt-12 pt-8 border-t border-gray-200 text-center">
            <p class="text-gray-500 text-sm">
                © 2025 Nàng Tiên Hoa. All rights reserved.
            </p>
        </div>
    </footer>

    {{-- ========================================== --}}
    {{-- 8. SCRIPT JAVASCRIPT --}}
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
    </script>

    </script>

</x-app-layout>

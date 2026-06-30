@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<section class="relative h-96 bg-gradient-to-r from-red-100 to-pink-100 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hoa-hong-ecuador-hero.jpg') }}" alt="Hoa Hồng Ecuador & Quà Tặng" class="w-full h-full object-cover opacity-70">
    </div>
    <div class="relative z-10 h-full flex items-center justify-center text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 font-serif" style="font-family: 'Bacasime Antique', serif;">
                Hoa Hồng Ecuador & Quà Tặng
            </h1>
            <p class="text-xl md:text-2xl text-white mb-8 drop-shadow-lg">
                Vẻ đẹp kiêu sa và những món quà tặng tinh tế từ hoa hồng Ecuador thượng hạng
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#san-pham" class="bg-white text-red-800 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition transform hover:scale-105 shadow-lg">
                    Khám Phá Sản Phẩm
                </a>
                <a href="#thong-tin" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-red-800 transition transform hover:scale-105">
                    Tìm Hiểu Thêm
                </a>
            </div>
        </div>
    </div>
    
    <!-- Hoa nền trang trí -->
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-10 left-10 text-6xl text-white">🌹</div>
        <div class="absolute top-20 right-20 text-4xl text-white">🌸</div>
        <div class="absolute bottom-20 left-20 text-5xl text-white">🌺</div>
        <div class="absolute bottom-10 right-10 text-3xl text-white">🌷</div>
        <div class="absolute top-1/2 left-1/3 text-7xl text-white">🌹</div>
    </div>
</section>

<!-- Giới thiệu -->
<section id="thong-tin" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Vẻ Đẹp Thượng Hạng</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hoa hồng Ecuador được mệnh danh là "nữ hoàng của các loài hoa" với những cánh hoa dày, 
                màu sắc rực rỡ và hương thơm nồng nàn. Kết hợp với những món quà tặng tinh tế, 
                tạo nên sự hoàn hảo cho mọi khoảnh khắc đặc biệt.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-rose text-red-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hoa Hồng Ecuador Cao Cấp</h3>
                <p class="text-gray-600">
                    Những bông hồng Ecuador được nhập khẩu trực tiếp, 
                    với cánh hoa dày, màu sắc sâu và hương thơm quyến rũ đặc trưng.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-gift text-pink-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Quà Tặng Độc Đáo</h3>
                <p class="text-gray-600">
                    Bộ sưu tập quà tặng được thiết kế riêng, 
                    từ hộp quà sang trọng đến những món đồ trang trí tinh tế.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-yellow-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Thông Điệp Yêu Thương</h3>
                <p class="text-gray-600">
                    Mỗi bông hoa và món quà đều mang theo thông điệp yêu thương, 
                    thể hiện sự quan tâm chân thành đến người nhận.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sản phẩm nổi bật -->
<section id="san-pham" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Sản Phẩm Nổi Bật</h2>
            <p class="text-xl text-gray-600">
                Khám phá bộ sưu tập hoa hồng Ecuador và quà tặng sang trọng
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <!-- Sản phẩm 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-red-100 to-pink-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-hong-ecuador-1.jpg') }}" alt="Hoa Hồng Ecuador" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bó Hồng Ecuador Đỏ</h3>
                    <p class="text-gray-600 mb-4">99 bông hồng Ecuador đỏ thắm, biểu tượng tình yêu vĩnh cửu</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-red-600">2.999.000đ</span>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-pink-100 to-red-100 flex items-center justify-center">
                    <img src="{{ asset('images/qua-tang-sinh-nhat-1.jpg') }}" alt="Quà Tặng" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Hộp Quà Sinh Nhật</h3>
                    <p class="text-gray-600 mb-4">Hộp quà sang trọng với hồng Ecuador và socola cao cấp</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-red-600">1.599.000đ</span>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-red-100 to-pink-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-hong-hong-1.jpg') }}" alt="Hoa Hồng" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Giỏ Hồng Hỗn Hợp</h3>
                    <p class="text-gray-600 mb-4">Giỏ hoa hồng Ecuador nhiều màu sắc, tươi thắm và rực rỡ</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-red-600">1.299.000đ</span>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-pink-100 to-red-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-hong-trang-1.jpg') }}" alt="Hoa Hồng Trắng" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bó Hồng Trắng</h3>
                    <p class="text-gray-600 mb-4">Bó hồng Ecuador trắng tinh khôi, biểu tượng sự trong sáng</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-red-600">1.899.000đ</span>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="bg-red-600 text-white px-8 py-4 rounded-full font-bold hover:bg-red-700 transition transform hover:scale-105 shadow-lg">
                Xem Tất Cả Sản Phẩm
            </a>
        </div>
    </div>
</section>

<!-- Dịch vụ -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Dịch Vụ Của Chúng Tôi</h2>
            <p class="text-xl text-gray-600">
                Chúng tôi cung cấp dịch vụ chuyên nghiệp về hoa hồng Ecuador và quà tặng cao cấp
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 bg-red-50 rounded-xl hover:bg-red-100 transition">
                <i class="fas fa-shipping-fast text-red-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Giao Hàng Nhanh</h3>
                <p class="text-gray-600">Giao hàng trong 2 giờ tại nội thành</p>
            </div>

            <div class="text-center p-6 bg-pink-50 rounded-xl hover:bg-pink-100 transition">
                <i class="fas fa-certificate text-pink-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Cam Kết Chất Lượng</h3>
                <p class="text-gray-600">100% hoa Ecuador nhập khẩu chính hãng</p>
            </div>

            <div class="text-center p-6 bg-yellow-50 rounded-xl hover:bg-yellow-100 transition">
                <i class="fas fa-headset text-yellow-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Tư Vấn 24/7</h3>
                <p class="text-gray-600">Hỗ trợ khách hàng mọi lúc mọi nơi</p>
            </div>

            <div class="text-center p-6 bg-green-50 rounded-xl hover:bg-green-100 transition">
                <i class="fas fa-undo text-green-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Đổi Trả Dễ Dàng</h3>
                <p class="text-gray-600">Chính sách đổi trả linh hoạt trong 7 ngày</p>
            </div>
        </div>
    </div>
</section>
@endsection

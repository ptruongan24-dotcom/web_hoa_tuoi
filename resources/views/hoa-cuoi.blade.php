@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<section class="relative h-96 bg-gradient-to-r from-pink-100 to-white overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hoa-cuoi-hero.jpg') }}" alt="Hoa Cưới" class="w-full h-full object-cover opacity-70">
    </div>
    <div class="relative z-10 h-full flex items-center justify-center text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 font-serif" style="font-family: 'Bacasime Antique', serif;">
                Hoa Cưới
            </h1>
            <p class="text-xl md:text-2xl text-white mb-8 drop-shadow-lg">
                Vẻ đẹp lãng mạn cho ngày trọng đại của cuộc đời
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#san-pham" class="bg-white text-pink-800 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition transform hover:scale-105 shadow-lg">
                    Khám Phá Sản Phẩm
                </a>
                <a href="#thong-tin" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-pink-800 transition transform hover:scale-105">
                    Tìm Hiểu Thêm
                </a>
            </div>
        </div>
    </div>
    
    <!-- Hoa nền trang trí -->
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-10 left-10 text-6xl text-white">💐</div>
        <div class="absolute top-20 right-20 text-4xl text-white">🌸</div>
        <div class="absolute bottom-20 left-20 text-5xl text-white">🌹</div>
        <div class="absolute bottom-10 right-10 text-3xl text-white">💕</div>
        <div class="absolute top-1/2 left-1/3 text-7xl text-white">💐</div>
    </div>
</section>

<!-- Giới thiệu -->
<section id="thong-tin" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Vẻ Đẹp Ngày Cưới</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hoa cưới không chỉ là vật trang trí mà còn là biểu tượng của tình yêu, hạnh phúc và sự khởi đầu mới. 
                Chúng tôi mang đến những bó hoa cưới đẹp nhất, tinh tế nhất cho ngày trọng đại của bạn.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-pink-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Bó Hoa Cưới</h3>
                <p class="text-gray-600">
                    Những bó hoa cưới được thiết kế tinh tế, 
                    kết hợp hài hòa giữa màu sắc và các loại hoa khác nhau.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-ring text-red-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hoa Cô Dâu</h3>
                <p class="text-gray-600">
                    Giỏ hoa cô dâu sang trọng, 
                    được thiết kế riêng theo phong cách và sở thích của cô dâu.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-church text-purple-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Trang Trí Đám Cưới</h3>
                <p class="text-gray-600">
                    Dịch vụ trang trí toàn bộ lễ cưới, 
                    từ nhà thờ đến tiệc cưới với hoa tươi thượng hạng.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sản phẩm nổi bật -->
<section id="san-pham" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Sản Phẩm Cưới Nổi Bật</h2>
            <p class="text-xl text-gray-600">
                Khám phá bộ sưu tập hoa cưới đẹp và tinh tế nhất
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <!-- Sản phẩm 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-pink-100 to-red-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-cuoi-1.jpg') }}" alt="Bó Hoa Cưới" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bó Hoa Cưới Đỏ</h3>
                    <p class="text-gray-600 mb-4">Bó hoa cưới đỏ rực rỡ với hồng và baby trắng tinh khôi</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-pink-600">1.599.000đ</span>
                        <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-red-100 to-pink-100 flex items-center justify-center">
                    <img src="{{ asset('images/gio-hoa-co-dau-1.jpg') }}" alt="Giỏ Hoa Cô Dâu" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Giỏ Hoa Cô Dâu</h3>
                    <p class="text-gray-600 mb-4">Giỏ hoa cô dâu sang trọng với hoa hồng trắng và cẩm tú cầu</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-pink-600">2.299.000đ</span>
                        <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-cuoi-trang-1.jpg') }}" alt="Hoa Cưới Trắng" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Hoa Cưới Trắng</h3>
                    <p class="text-gray-600 mb-4">Bó hoa cưới trắng tinh khôi, biểu tượng sự trong sáng</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-pink-600">1.899.000đ</span>
                        <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-cuoi-hong-1.jpg') }}" alt="Hoa Cưới Hồng" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Hoa Cưới Hồng</h3>
                    <p class="text-gray-600 mb-4">Bó hoa cưới hồng ngọt ngào với hoa hồng và baby hồng</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-pink-600">1.799.000đ</span>
                        <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="bg-pink-600 text-white px-8 py-4 rounded-full font-bold hover:bg-pink-700 transition transform hover:scale-105 shadow-lg">
                Xem Tất Cả Sản Phẩm
            </a>
        </div>
    </div>
</section>

<!-- Dịch vụ -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Dịch Vụ Cưới</h2>
            <p class="text-xl text-gray-600">
                Chúng tôi cung cấp dịch vụ chuyên nghiệp cho ngày cưới hoàn hảo
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 bg-pink-50 rounded-xl hover:bg-pink-100 transition">
                <i class="fas fa-truck text-pink-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Giao Hàng Đúng Giờ</h3>
                <p class="text-gray-600">Giao hoa đúng giờ cho ngày cưới</p>
            </div>

            <div class="text-center p-6 bg-red-50 rounded-xl hover:bg-red-100 transition">
                <i class="fas fa-certificate text-red-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Cam Kết Chất Lượng</h3>
                <p class="text-gray-600">100% hoa tươi và đẹp nhất</p>
            </div>

            <div class="text-center p-6 bg-purple-50 rounded-xl hover:bg-purple-100 transition">
                <i class="fas fa-headset text-purple-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Tư Vấn 24/7</h3>
                <p class="text-gray-600">Hỗ trợ tư vấn cho ngày cưới</p>
            </div>

            <div class="text-center p-6 bg-yellow-50 rounded-xl hover:bg-yellow-100 transition">
                <i class="fas fa-undo text-yellow-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Đổi Trả Linh Hoạt</h3>
                <p class="text-gray-600">Chính sách đổi trả cho hoa cưới</p>
            </div>
        </div>
    </div>
</section>
@endsection

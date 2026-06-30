@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<section class="relative h-96 bg-gradient-to-r from-green-100 to-white overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hoa-tuoi-hero.jpg') }}" alt="Hoa Tươi" class="w-full h-full object-cover opacity-70">
    </div>
    <div class="relative z-10 h-full flex items-center justify-center text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 font-serif" style="font-family: 'Bacasime Antique', serif;">
                Hoa Tươi
            </h1>
            <p class="text-xl md:text-2xl text-white mb-8 drop-shadow-lg">
                Vẻ đẹp tươi thắm từ thiên nhiên, mang lại niềm vui và sự tươi mới cho cuộc sống
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#san-pham" class="bg-white text-green-800 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition transform hover:scale-105 shadow-lg">
                    Khám Phá Sản Phẩm
                </a>
                <a href="#thong-tin" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-green-800 transition transform hover:scale-105">
                    Tìm Hiểu Thêm
                </a>
            </div>
        </div>
    </div>
    
    <!-- Hoa nền trang trí -->
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-10 left-10 text-6xl text-white">🌻</div>
        <div class="absolute top-20 right-20 text-4xl text-white">🌸</div>
        <div class="absolute bottom-20 left-20 text-5xl text-white">🌺</div>
        <div class="absolute bottom-10 right-10 text-3xl text-white">🌷</div>
        <div class="absolute top-1/2 left-1/3 text-7xl text-white">🌻</div>
    </div>
</section>

<!-- Giới thiệu -->
<section id="thong-tin" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Vẻ Đẹp Tươi Thắm</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hoa tươi mang đến vẻ đẹp tự nhiên, hương thơm dịu nhẹ và sức sống mãnh liệt. 
                Chúng tôi cam kết mang đến những bông hoa tươi nhất, đẹp nhất từ các vườn hoa uy tín.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-leaf text-green-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hoa Tươi Ngày</h3>
                <p class="text-gray-600">
                    Hoa được cắt và giao hàng trong ngày, 
                    đảm bảo độ tươi ngon và thời gian sử dụng lâu nhất.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-spa text-blue-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Đa Dạng Loại Hoa</h3>
                <p class="text-gray-600">
                    Hàng trăm loại hoa khác nhau từ hồng, ly, lan, tulip, 
                    đến các loại hoa đặc biệt và hiếm có.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-sun text-yellow-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Nguồn Gốc Rõ Ràng</h3>
                <p class="text-gray-600">
                    Hoa được nhập khẩu từ các quốc gia nổi tiếng, 
                    và trồng tại các vườn hoa đạt chuẩn chất lượng.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sản phẩm nổi bật -->
<section id="san-pham" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Sản Phẩm Hoa Tươi</h2>
            <p class="text-xl text-gray-600">
                Khám phá bộ sưu tập hoa tươi đẹp và đa dạng nhất
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <!-- Sản phẩm 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-green-100 to-blue-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-hong-tuoi-1.jpg') }}" alt="Hoa Hồng Tươi" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bó Hoa Hồng Tươi</h3>
                    <p class="text-gray-600 mb-4">Bó hoa hồng đỏ tươi thắm, 11 bông hoa đẹp nhất</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">399.000đ</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-blue-100 to-green-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-ly-1.jpg') }}" alt="Hoa Ly" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bó Hoa Ly Trắng</h3>
                    <p class="text-gray-600 mb-4">Bó hoa ly trắng tinh khôi, hương thơm dịu nhẹ</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">599.000đ</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-green-100 to-yellow-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-tulip-1.jpg') }}" alt="Hoa Tulip" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bó Hoa Tulip</h3>
                    <p class="text-gray-600 mb-4">Bó hoa tulip nhiều màu sắc, tươi thắm và rực rỡ</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">799.000đ</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-yellow-100 to-green-100 flex items-center justify-center">
                    <img src="{{ asset('images/hoa-lan-1.jpg') }}" alt="Hoa Lan" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Giỏ Hoa Lan</h3>
                    <p class="text-gray-600 mb-4">Giỏ hoa lan hồ điệp trắng, sang trọng và tinh tế</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">1.299.000đ</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="bg-green-600 text-white px-8 py-4 rounded-full font-bold hover:bg-green-700 transition transform hover:scale-105 shadow-lg">
                Xem Tất Cả Sản Phẩm
            </a>
        </div>
    </div>
</section>

<!-- Dịch vụ -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Dịch Vụ Hoa Tươi</h2>
            <p class="text-xl text-gray-600">
                Chúng tôi cung cấp dịch vụ chuyên nghiệp về hoa tươi
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 bg-green-50 rounded-xl hover:bg-green-100 transition">
                <i class="fas fa-truck text-green-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Giao Hàng Nhanh</h3>
                <p class="text-gray-600">Giao hàng trong 2 giờ tại nội thành</p>
            </div>

            <div class="text-center p-6 bg-blue-50 rounded-xl hover:bg-blue-100 transition">
                <i class="fas fa-certificate text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Cam Kết Tươi Mới</h3>
                <p class="text-gray-600">100% hoa tươi và đẹp nhất</p>
            </div>

            <div class="text-center p-6 bg-yellow-50 rounded-xl hover:bg-yellow-100 transition">
                <i class="fas fa-headset text-yellow-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Tư Vấn 24/7</h3>
                <p class="text-gray-600">Hỗ trợ khách hàng mọi lúc</p>
            </div>

            <div class="text-center p-6 bg-purple-50 rounded-xl hover:bg-purple-100 transition">
                <i class="fas fa-undo text-purple-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Đổi Trả Dễ Dàng</h3>
                <p class="text-gray-600">Chính sách đổi trả trong 24h</p>
            </div>
        </div>
    </div>
</section>
@endsection

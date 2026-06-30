@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<section class="relative h-96 bg-gradient-to-r from-purple-100 to-pink-100 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hoa-moc-lan-hero.jpg') }}" alt="Hoa Mộc Lan & Thời Trang" class="w-full h-full object-cover opacity-70">
    </div>
    <div class="relative z-10 h-full flex items-center justify-center text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 font-serif" style="font-family: 'Bacasime Antique', serif;">
                Hoa Mộc Lan & Thời Trang
            </h1>
            <p class="text-xl md:text-2xl text-white mb-8 drop-shadow-lg">
                Vẻ đẹp tinh tế và phong cách thời trang từ hoa mộc lan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#san-pham" class="bg-white text-purple-800 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition transform hover:scale-105 shadow-lg">
                    Khám Phá Sản Phẩm
                </a>
                <a href="#thong-tin" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-purple-800 transition transform hover:scale-105">
                    Tìm Hiểu Thêm
                </a>
            </div>
        </div>
    </div>
    
    <!-- Hoa nền trang trí -->
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-10 left-10 text-6xl text-white">🌸</div>
        <div class="absolute top-20 right-20 text-4xl text-white">🌺</div>
        <div class="absolute bottom-20 left-20 text-5xl text-white">🌷</div>
        <div class="absolute bottom-10 right-10 text-3xl text-white">🌹</div>
        <div class="absolute top-1/2 left-1/3 text-7xl text-white">🌸</div>
    </div>
</section>

<!-- Giới thiệu -->
<section id="thong-tin" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 font-serif">Vẻ Đẹp Tinh Hoa</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hoa mộc lan không chỉ là loài hoa đẹp mà còn là nguồn cảm hứng cho thế giới thời trang. 
                Với vẻ đẹp thanh lịch và hương thơm quyến rũ, hoa mộc lan đã trở thành biểu tượng của sự sang trọng và tinh tế.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-flower text-purple-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hoa Mộc Lan Cao Cấp</h3>
                <p class="text-gray-600">
                    Những bông mộc lan tươi thắm được tuyển chọn kỹ lưỡng từ các vườn hoa uy tín, 
                    đảm bảo chất lượng và độ tươi ngon tuyệt đối.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-tshirt text-pink-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Thời Trang Hoa</h3>
                <p class="text-gray-600">
                    Sản phẩm thời trang lấy cảm hứng từ hoa mộc lan, từ váy áo đến phụ kiện, 
                    mang đến vẻ đẹp thanh lịch và phong cách riêng.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-gift text-yellow-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Quà Tặng Sang Trọng</h3>
                <p class="text-gray-600">
                    Những món quà tặng được thiết kế tinh tế với hoa mộc lan, 
                    phù hợp cho mọi dịp đặc biệt và thể hiện sự quan tâm chân thành.
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
                Khám phá bộ sưu tập hoa mộc lan và các sản phẩm thời trang độc đáo
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <!-- Sản phẩm 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center">
                    <img src="{{ asset('images/moc-lan-1.jpg') }}" alt="Bó Mộc Lan" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bó Mộc Lan Sang Trọng</h3>
                    <p class="text-gray-600 mb-4">Bó hoa mộc lan tươi thắm với 9 bông hoa đẹp nhất</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-purple-600">899.000đ</span>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                    <img src="{{ asset('images/vay-hoa-1.jpg') }}" alt="Váy Hoa" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Váy Hoa Mộc Lan</h3>
                    <p class="text-gray-600 mb-4">Váy thiết kế lấy cảm hứng từ hoa mộc lan thanh lịch</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-purple-600">1.299.000đ</span>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center">
                    <img src="{{ asset('images/trai-hoa-1.jpg') }}" alt="Trái Hoa" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Trái Hoa Mộc Lan</h3>
                    <p class="text-gray-600 mb-4">Trái hoa mộc lan trang trí sang trọng cho không gian</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-purple-600">599.000đ</span>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                    <img src="{{ asset('images/phu-kien-1.jpg') }}" alt="Phụ Kiện" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Cài Áo Hoa Mộc Lan</h3>
                    <p class="text-gray-600 mb-4">Phụ kiện trang trí tinh tế từ hoa mộc lan thật</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-purple-600">299.000đ</span>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
                            Thêm vào giỏ
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="bg-purple-600 text-white px-8 py-4 rounded-full font-bold hover:bg-purple-700 transition transform hover:scale-105 shadow-lg">
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
                Chúng tôi cung cấp dịch vụ chuyên nghiệp về hoa mộc lan và thời trang
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 bg-purple-50 rounded-xl hover:bg-purple-100 transition">
                <i class="fas fa-truck text-purple-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Giao Hàng Nhanh</h3>
                <p class="text-gray-600">Giao hàng trong 2 giờ tại nội thành</p>
            </div>

            <div class="text-center p-6 bg-pink-50 rounded-xl hover:bg-pink-100 transition">
                <i class="fas fa-certificate text-pink-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Cam Kết Chất Lượng</h3>
                <p class="text-gray-600">100% hoa tươi và sản phẩm chính hãng</p>
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

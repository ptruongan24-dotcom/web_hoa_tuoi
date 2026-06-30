@extends('layouts.admin')

@section('title', 'Tổng quan')

@section('page-title', 'Tổng quan')

@section('content')
<div class="fade-in">
    <!-- Thống kê cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Tổng doanh thu -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-dollar-sign text-blue-600 text-xl"></i>
                </div>
                <span class="text-sm text-green-600 font-semibold">
                    <i class="fas fa-arrow-up mr-1"></i>12.5%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-1">₫ 125.678.000</h3>
            <p class="text-gray-600 text-sm">Tổng doanh thu</p>
        </div>
        
        <!-- Tổng đơn hàng -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-shopping-cart text-green-600 text-xl"></i>
                </div>
                <span class="text-sm text-green-600 font-semibold">
                    <i class="fas fa-arrow-up mr-1"></i>8.2%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-1">1,234</h3>
            <p class="text-gray-600 text-sm">Tổng đơn hàng</p>
        </div>
        
        <!-- Tổng khách hàng -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <span class="text-sm text-green-600 font-semibold">
                    <i class="fas fa-arrow-up mr-1"></i>15.3%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-1">5,678</h3>
            <p class="text-gray-600 text-sm">Tổng khách hàng</p>
        </div>
        
        <!-- Tổng sản phẩm -->
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-box text-orange-600 text-xl"></i>
                </div>
                <span class="text-sm text-red-600 font-semibold">
                    <i class="fas fa-arrow-down mr-1"></i>2.1%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-1">892</h3>
            <p class="text-gray-600 text-sm">Tổng sản phẩm</p>
        </div>
    </div>
    
    <!-- Biểu đồ và danh sách -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Biểu đồ doanh thu -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800">Biểu đồ doanh thu</h3>
                <select class="px-3 py-1 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <option>7 ngày qua</option>
                    <option>30 ngày qua</option>
                    <option>3 tháng qua</option>
                    <option>1 năm qua</option>
                </select>
            </div>
            
            <!-- Placeholder cho biểu đồ -->
            <div class="h-64 bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-chart-line text-4xl text-purple-400 mb-2"></i>
                    <p class="text-gray-600">Biểu đồ doanh thu</p>
                    <p class="text-sm text-gray-500">(Cần tích hợp Chart.js)</p>
                </div>
            </div>
            
            <!-- Thống kê nhanh -->
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-600">₫ 45.2M</p>
                    <p class="text-xs text-gray-600">Hôm nay</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-blue-600">₫ 312.5M</p>
                    <p class="text-xs text-gray-600">Tuần này</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-purple-600">₫ 1.2B</p>
                    <p class="text-xs text-gray-600">Tháng này</p>
                </div>
            </div>
        </div>
        
        <!-- Top sản phẩm bán chạy -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-6">Sản phẩm bán chạy</h3>
            
            <div class="space-y-4">
                <!-- Sản phẩm 1 -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-rose text-pink-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Hoa hồng Ecuador</h4>
                        <p class="text-sm text-gray-600">245 đơn hàng</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-green-600">₫ 45.2M</p>
                        <p class="text-xs text-gray-500">+12%</p>
                    </div>
                </div>
                
                <!-- Sản phẩm 2 -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-spa text-purple-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Hoa tulip Hà Lan</h4>
                        <p class="text-sm text-gray-600">189 đơn hàng</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-green-600">₫ 32.8M</p>
                        <p class="text-xs text-gray-500">+8%</p>
                    </div>
                </div>
                
                <!-- Sản phẩm 3 -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-snowflake text-blue-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Hoa baby Nhật Bản</h4>
                        <p class="text-sm text-gray-600">156 đơn hàng</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-green-600">₫ 28.5M</p>
                        <p class="text-xs text-gray-500">+15%</p>
                    </div>
                </div>
                
                <!-- Sản phẩm 4 -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-sun text-yellow-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Hoa cưới sang trọng</h4>
                        <p class="text-sm text-gray-600">134 đơn hàng</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-green-600">₫ 22.1M</p>
                        <p class="text-xs text-gray-500">+5%</p>
                    </div>
                </div>
                
                <!-- Sản phẩm 5 -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-leaf text-green-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Bó hoa tươi</h4>
                        <p class="text-sm text-gray-600">98 đơn hàng</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-green-600">₫ 15.6M</p>
                        <p class="text-xs text-gray-500">+3%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Đơn hàng gần đây và hoạt động -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Đơn hàng gần đây -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800">Đơn hàng gần đây</h3>
                <a href="#" class="text-purple-600 hover:text-purple-700 text-sm font-medium">
                    Xem tất cả <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            
            <div class="space-y-4">
                <!-- Đơn hàng 1 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-green-600 text-sm"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">#DH001234</p>
                            <p class="text-sm text-gray-600">Nguyễn Văn A</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">₫ 1.250.000</p>
                        <span class="text-xs px-2 py-1 bg-green-100 text-green-700 rounded-full">Đã giao</span>
                    </div>
                </div>
                
                <!-- Đơn hàng 2 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-truck text-blue-600 text-sm"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">#DH001233</p>
                            <p class="text-sm text-gray-600">Trần Thị B</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">₫ 890.000</p>
                        <span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 rounded-full">Đang giao</span>
                    </div>
                </div>
                
                <!-- Đơn hàng 3 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-clock text-yellow-600 text-sm"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">#DH001232</p>
                            <p class="text-sm text-gray-600">Lê Văn C</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">₫ 2.450.000</p>
                        <span class="text-xs px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full">Đang xử lý</span>
                    </div>
                </div>
                
                <!-- Đơn hàng 4 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-green-600 text-sm"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">#DH001231</p>
                            <p class="text-sm text-gray-600">Phạm Thị D</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">₫ 567.000</p>
                        <span class="text-xs px-2 py-1 bg-green-100 text-green-700 rounded-full">Đã giao</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hoạt động hệ thống -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800">Hoạt động gần đây</h3>
                <button class="text-purple-600 hover:text-purple-700 text-sm font-medium">
                    <i class="fas fa-sync-alt mr-1"></i>Cập nhật
                </button>
            </div>
            
            <div class="space-y-4">
                <!-- Hoạt động 1 -->
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-shopping-cart text-green-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800">
                            <span class="font-semibold">Nguyễn Văn A</span> đã đặt hàng 
                            <span class="font-semibold text-purple-600">#DH001234</span>
                        </p>
                        <p class="text-xs text-gray-500">2 phút trước</p>
                    </div>
                </div>
                
                <!-- Hoạt động 2 -->
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-user-plus text-blue-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800">
                            <span class="font-semibold">Trần Thị B</span> đã đăng ký tài khoản mới
                        </p>
                        <p class="text-xs text-gray-500">15 phút trước</p>
                    </div>
                </div>
                
                <!-- Hoạt động 3 -->
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-comment text-purple-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800">
                            <span class="font-semibold">Lê Văn C</span> đã gửi phản hồi về sản phẩm
                        </p>
                        <p class="text-xs text-gray-500">1 giờ trước</p>
                    </div>
                </div>
                
                <!-- Hoạt động 4 -->
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-star text-yellow-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800">
                            <span class="font-semibold">Phạm Thị D</span> đã đánh giá 5 sao cho sản phẩm
                        </p>
                        <p class="text-xs text-gray-500">2 giờ trước</p>
                    </div>
                </div>
                
                <!-- Hoạt động 5 -->
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-exclamation-triangle text-red-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800">
                            Cảnh báo: Tồn kho sản phẩm <span class="font-semibold text-red-600">Hoa hồng Ecuador</span> thấp
                        </p>
                        <p class="text-xs text-gray-500">3 giờ trước</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

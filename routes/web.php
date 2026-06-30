<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

// ==========================================
// TRANG CHỦ
// ==========================================
Route::get('/', function () {
    $bestSellers       = Product::where('category', 'Bán chạy')->take(10)->get();
    $hotProducts       = Product::where('category', 'Đang hot')->take(10)->get();
    $savingProducts    = Product::where('category', 'Gói Tiết kiệm')->take(10)->get();
    $premiumFlowers   = Product::where('category', 'Hoa cao cấp')->take(10)->get();

    $julietFlowers     = Product::where('category', 'Hoa hồng Juliet')->take(10)->get();
    $tulipFlowers      = Product::where('category', 'Tulip Hà Lan')->take(10)->get();
    $peonyFlowers      = Product::where('category', 'Hoa mẫu đơn nhập khẩu')->take(10)->get();
    $babyFlowers       = Product::where('category', 'Hoa baby Nhật bản')->take(10)->get();

    $discountedFlowers = Product::where('category', 'Hoa đang giảm giá')->take(10)->get();
    $congratsFlowers   = Product::where('category', 'Hoa chúc mừng')->take(10)->get();
    
    $products = Product::take(4)->get(); // Biến dự phòng

    $bannerMedia = [
        ['type' => 'image', 'src' => 'banner.jpg', 'title' => 'Hoa Tươi, Niềm Vui Trọn Vẹn', 'desc' => 'Khám phá những đóa hoa tươi thắm được tuyển chọn kỹ lưỡng.'],
        ['type' => 'video', 'src' => 'videobanner.mp4', 'title' => null, 'desc' => null]
    ];

    return view('welcome', compact(
        'products', 'discountedFlowers', 'congratsFlowers', 
        'julietFlowers', 'tulipFlowers', 'peonyFlowers', 'babyFlowers',
        'bestSellers', 'hotProducts', 'savingProducts', 'bannerMedia',
        'premiumFlowers'
    ));
});

// ==========================================
// TRANG HOA CƯỚI CHÍNH
// ==========================================
Route::get('/hoa-cuoi', function () {
    $products = Product::where('category', 'Hoa cưới')->take(20)->get();
    
    $mediaItems = [
        ['type' => 'image', 'src' => 'banner_hoacuoi.jpg'],
        ['type' => 'image', 'src' => 'banner_hoacuoi2.jpg'],
        ['type' => 'video', 'src' => 'video_hoacuoi.mp4']
    ];

    return view('category', [
        'pageTitle' => 'Hoa Cưới',
        'pageDescription' => 'Những đóa hoa cưới tươi thắm và lãng mạn cho ngày trọng đại của bạn.',
        'mediaItems' => $mediaItems,
        'products' => $products
    ]);
});

// ==========================================
// CÁC TRANG DANH MỤC HOA CƯỚI
// ==========================================
$categories = [
    'hoa-hong' => ['name' => 'Hoa hồng cưới', 'title' => 'Hoa Hồng Cưới', 'desc' => 'Biểu tượng kinh điển của tình yêu và sự lãng mạn.', 'banners' => ['bannerhoahong.jpg', 'bannerhoahong2.jpg'], 'video' => 'videohoahong.mp4'],
    'hoa-mau-don' => ['name' => 'Hoa mẫu đơn cưới', 'title' => 'Mẫu Đơn Vương Giả', 'desc' => 'Tượng trưng cho cuộc sống hôn nhân viên mãn.', 'banners' => ['bannermaudon.jpg', 'bannermaudon2.jpg'], 'video' => 'videomaudon.mp4'],
    'hoa-cam-tu-cau' => ['name' => 'Hoa cẩm tú cầu cưới', 'title' => 'Cẩm Tú Cầu', 'desc' => 'Lòng biết ơn và những cảm xúc chân thành.', 'banners' => ['banner-camtucau.jpg'], 'video' => 'video-camtucau.mp4'],
    'hoa-baby' => ['name' => 'Hoa baby cưới', 'title' => 'Baby Tinh Khôi', 'desc' => 'Đại diện cho một tình yêu thuần khiết, vĩnh cửu.', 'banners' => ['banner-baby.jpg', 'banner-baby-2.jpg'], 'video' => 'videotulip.mp4'],
    'hoa-tulip' => ['name' => 'Hoa tulip cưới', 'title' => 'Tulip Hà Lan', 'desc' => 'Biểu tượng của tình yêu hoàn hảo và hạnh phúc bền lâu.', 'banners' => ['bannertulip.jpg', 'bannertulip2.jpg'], 'video' => 'videotulip.mp4']
];

foreach ($categories as $slug => $data) {
    Route::get("/danh-muc/{$slug}", function () use ($data) {
        $products = Product::where('category', $data['name'])->take(20)->get();
        
        $mediaItems = [];
        foreach ($data['banners'] as $img) { $mediaItems[] = ['type' => 'image', 'src' => $img]; }
        if ($data['video']) { $mediaItems[] = ['type' => 'video', 'src' => $data['video']]; }

        return view('category', [
            'pageTitle' => $data['title'],
            'pageDescription' => $data['desc'],
            'mediaItems' => $mediaItems,
            'products' => $products
        ]);
    });
}

// ==========================================
// CÁC TRANG DANH MỤC HOA TƯƠI
// ==========================================
$freshCategories = [
    'hoa-hong-tuoi' => ['name' => 'Hoa hồng', 'title' => 'Hoa Hồng Tươi', 'desc' => 'Những đóa hồng tươi thắm, biểu tượng vĩnh cửu của tình yêu và đam mê.', 'banners' => ['bannerhoahongt.jpg', 'bannerhoahongt2.jpg'], 'video' => 'videohoahongt.mp4'],
    'hoa-cuc' => ['name' => 'Hoa cúc', 'title' => 'Hoa Cúc Tươi', 'desc' => 'Sự tươi mới và rực rỡ của hoa cúc mang lại niềm vui và năng lượng tích cực.', 'banners' => ['bannercuct.jpg', 'bannercuct2.jpg'], 'video' => 'videocuct.mp4'],
    'hoa-ly' => ['name' => 'Hoa ly', 'title' => 'Hoa Ly Tươi', 'desc' => 'Vẻ đẹp thanh lịch và hương thơm tinh tế của hoa ly thiên đường.', 'banners' => ['bannerlyt.jpg', 'bannerlyt2.jpg'], 'video' => 'videolyt.mp4'],
    'hoa-lan' => ['name' => 'Hoa lan', 'title' => 'Hoa Lan Tươi', 'desc' => 'Sang trọng và quý phái, hoa lan là lựa chọn hoàn hảo cho mọi dịp.', 'banners' => ['bannerlant.jpg', 'bannerlant2.jpg'], 'video' => 'videolant.mp4'],
    'hoa-dong-tien' => ['name' => 'Hoa đồng tiền', 'title' => 'Hoa Đồng Tiền Tươi', 'desc' => 'Màu sắc vàng rực rỡ mang lại may mắn và thịnh vượng.', 'banners' => ['bannerdongtient.jpg', 'bannerdongtient2.jpg'], 'video' => 'videodongtient.mp4'],
    'hoa-cam-chuong' => ['name' => 'Hoa cẩm chướng', 'title' => 'Hoa Cẩm Chướng Tươi', 'desc' => 'Vẻ đẹp kiêu sa và sắc màu đa dạng của hoa cẩm chướng.', 'banners' => ['bannercamchuongt.jpg', 'bannercamchuongt2.jpg'], 'video' => 'videocamchuongt.mp4'],
    'hoa-cam-tu-cau-tuoi' => ['name' => 'Hoa cẩm tú cầu', 'title' => 'Hoa Cẩm Tú Cầu Tươi', 'desc' => 'Những chùm hoa cẩm tú cầu tròn đầy mang lại cảm giác viên mãn.', 'banners' => ['bannercamtucaut.jpg', 'bannercamtucaut2.jpg'], 'video' => 'videocamtucaut.mp4'],
    'hoa-pho-bien' => ['name' => 'Các loại hoa phổ biến khác', 'title' => 'Các Loại Hoa Phổ Biến', 'desc' => 'Tuyển chọn những loại hoa được yêu thích nhất hiện nay.', 'banners' => ['bannerphobient.jpg', 'bannerphobient2.jpg'], 'video' => 'videophobient.mp4']
];

foreach ($freshCategories as $slug => $data) {
    Route::get("/hoa-tuoi/{$slug}", function () use ($data) {
        $products = Product::where('category', $data['name'])->take(20)->get();
        
        $mediaItems = [];
        foreach ($data['banners'] as $img) { $mediaItems[] = ['type' => 'image', 'src' => $img]; }
        if ($data['video']) { $mediaItems[] = ['type' => 'video', 'src' => $data['video']]; }

        return view('category', [
            'pageTitle' => $data['title'],
            'pageDescription' => $data['desc'],
            'mediaItems' => $mediaItems,
            'products' => $products
        ]);
    });
}

// ==========================================
// CÁC TRANG KHÁC
// ==========================================

// Trang Giỏ hoa & Quà tặng
Route::get('/gio-hoa-qua-tang', function () {
    $products = Product::where('category', 'Giỏ hoa & Quà tặng')->take(20)->get();
    
    $mediaItems = [
        ['type' => 'image', 'src' => 'banner_giohoa.jpg'],
        ['type' => 'image', 'src' => 'banner_giohoa2.jpg'],
        ['type' => 'video', 'src' => 'video_giohoa.mp4']
    ];

    return view('category', [
        'pageTitle' => 'Giỏ Hoa & Quà Tặng',
        'pageDescription' => 'Những giỏ hoa tinh tế và quà tặng ý nghĩa cho mọi dịp đặc biệt trong cuộc đời.',
        'mediaItems' => $mediaItems,
        'products' => $products
    ]);
});

// Trang Đăng nhập
Route::get('/dang-nhap', function () {
    return view('login');
});

// Trang Chúng tôi
Route::get('/chung-toi', function () {
    return view('about');
});

// ==========================================
// TRANG CHI TIẾT SẢN PHẨM
// ==========================================
Route::get('/san-pham/{id}', function ($id) {
    $product = Product::findOrFail($id);
    $relatedProducts = Product::where('category', $product->category)->where('id', '!=', $id)->take(4)->get();
    return view('detail', compact('product', 'relatedProducts'));
});

// ==========================================
// TRANG XEM THÊM THEO DANH MỤC
// ==========================================
Route::get('/xem-them/{category}', function ($category) {
    // Map slug với category name trong database
    $categoryMap = [
        'ban-chay' => 'Bán chạy',
        'dang-hot' => 'Đang hot',
        'goi-tiet-kiem' => 'Gói tiết kiệm',
        'hoa-cao-cap' => 'Hoa cao cấp',
    ];

    $categoryName = $categoryMap[$category] ?? $category;
    $products = Product::where('category', $categoryName)->paginate(12);

    $titles = [
        'ban-chay' => 'Sản Phẩm Bán Chạy',
        'dang-hot' => 'Sản Phẩm Đang Hot',
        'goi-tiet-kiem' => 'Gói Tiết Kiệm',
        'hoa-cao-cap' => 'Hoa Cao Cấp',
    ];

    return view('category', [
        'pageTitle' => $titles[$category] ?? 'Danh mục',
        'pageDescription' => 'Xem tất cả sản phẩm trong danh mục ' . $categoryName,
        'mediaItems' => [],
        'products' => $products
    ]);
});

// ==========================================
// TRANG HOA MỘC LAN & THỜI TRANG
// ==========================================
Route::get('/hoa-moc-lan-thoi-trang', function () {
    $products = Product::where('category', 'Hoa mộc lan')->orWhere('category', 'Thời trang hoa')->take(20)->get();
    
    return view('hoa-moc-lan-thoi-trang', [
        'pageTitle' => 'Hoa Mộc Lan & Thời Trang',
        'pageDescription' => 'Khám phá bộ sưu tập hoa mộc lan và thời trang độc đáo',
        'products' => $products
    ]);
});

// ==========================================
// TRANG HOA HỒNG ECUADOR & QUÀ TẶNG
// ==========================================
Route::get('/hoa-hong-ecuador-qua-tang', function () {
    $products = Product::where('category', 'Hoa hồng Ecuador')->orWhere('category', 'Quà tặng')->take(20)->get();
    
    return view('hoa-hong-ecuador-qua-tang', [
        'pageTitle' => 'Hoa Hồng Ecuador & Quà Tặng',
        'pageDescription' => 'Khám phá hoa hồng Ecuador thượng hạng và quà tặng sang trọng',
        'products' => $products
    ]);
});

// ==========================================
// TRANG HOA CƯỚI
// ==========================================
Route::get('/hoa-cuoi', function () {
    $products = Product::where('category', 'Hoa cưới')->take(20)->get();
    
    return view('hoa-cuoi', [
        'pageTitle' => 'Hoa Cưới',
        'pageDescription' => 'Vẻ đẹp lãng mạn cho ngày trọng đại',
        'products' => $products
    ]);
});

// ==========================================
// TRANG HOA TƯƠI
// ==========================================
Route::get('/hoa-tuoi', function () {
    $products = Product::where('category', 'Hoa tươi')->take(20)->get();
    
    return view('hoa-tuoi', [
        'pageTitle' => 'Hoa Tươi',
        'pageDescription' => 'Vẻ đẹp tươi thắm từ thiên nhiên',
        'products' => $products
    ]);
});

// ==========================================
// ROUTES ĐĂNG NHẬP VÀ PHÂN QUYỀN
// ==========================================
Route::get('/dang-nhap', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/dang-nhap', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==========================================
// ROUTES ADMIN (CẦN PHÂN QUYỀN ADMIN)
// ==========================================
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::get('/customers', [AdminController::class, 'customers'])->name('customers');
});
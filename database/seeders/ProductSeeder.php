<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Xóa sạch dữ liệu cũ để bơm lô mới 30 sản phẩm vào
        DB::table('products')->truncate();

        $products = [
            // ================= 10 SẢN PHẨM: BÁN CHẠY =================
            ['name' => 'Bó hoa Tình Yêu Nhỏ', 'price' => 350000, 'old_price' => 450000, 'image' => 'banchay_1.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Giỏ hoa Nắng Mai', 'price' => 500000, 'old_price' => 0, 'image' => 'banchay_2.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Bó hoa Hạnh Phúc', 'price' => 450000, 'old_price' => 550000, 'image' => 'banchay_3.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Lẵng hoa Rực Rỡ', 'price' => 850000, 'old_price' => 950000, 'image' => 'banchay_4.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Bó hoa Tinh Khôi', 'price' => 400000, 'old_price' => 0, 'image' => 'banchay_5.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Hộp hoa Ngọt Ngào', 'price' => 600000, 'old_price' => 700000, 'image' => 'banchay_6.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Bó hoa Say Đắm', 'price' => 550000, 'old_price' => 0, 'image' => 'banchay_7.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Giỏ hoa Bình Minh', 'price' => 480000, 'old_price' => 520000, 'image' => 'banchay_8.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Bó hoa Dịu Dàng', 'price' => 380000, 'old_price' => 0, 'image' => 'banchay_9.jpg', 'category' => 'Bán chạy'],
            ['name' => 'Bó hoa Thủy Chung', 'price' => 420000, 'old_price' => 500000, 'image' => 'banchay_10.jpg', 'category' => 'Bán chạy'],

            // ================= 10 SẢN PHẨM: ĐANG HOT =================
            ['name' => 'Hồng Ecuador Cao Cấp', 'price' => 1200000, 'old_price' => 1500000, 'image' => 'hot_1.jpg', 'category' => 'Đang hot'],
            ['name' => 'Bó hoa Tulip Hà Lan', 'price' => 850000, 'old_price' => 0, 'image' => 'hot_2.jpg', 'category' => 'Đang hot'],
            ['name' => 'Lẵng Cúc Mẫu Đơn', 'price' => 950000, 'old_price' => 1100000, 'image' => 'hot_3.jpg', 'category' => 'Đang hot'],
            ['name' => 'Chậu Lan Hồ Điệp Vàng', 'price' => 2500000, 'old_price' => 2800000, 'image' => 'hot_4.jpg', 'category' => 'Đang hot'],
            ['name' => 'Bó Baby Trắng Khổng Lồ', 'price' => 650000, 'old_price' => 0, 'image' => 'hot_5.jpg', 'category' => 'Đang hot'],
            ['name' => 'Hộp Mẫu Đơn Sang Trọng', 'price' => 1800000, 'old_price' => 2000000, 'image' => 'hot_6.jpg', 'category' => 'Đang hot'],
            ['name' => 'Bó Cẩm Tú Cầu Xanh', 'price' => 550000, 'old_price' => 650000, 'image' => 'hot_7.jpg', 'category' => 'Đang hot'],
            ['name' => 'Giỏ hoa Thảo Đường', 'price' => 1400000, 'old_price' => 0, 'image' => 'hot_8.jpg', 'category' => 'Đang hot'],
            ['name' => 'Bó Hồng Juliet', 'price' => 980000, 'old_price' => 1200000, 'image' => 'hot_9.jpg', 'category' => 'Đang hot'],
            ['name' => 'Hoa Cưới Cầm Tay', 'price' => 750000, 'old_price' => 0, 'image' => 'hot_10.jpg', 'category' => 'Đang hot'],

            // ================= 10 SẢN PHẨM: GÓI TIẾT KIỆM =================
            ['name' => 'Bó Cúc Tana Tinh Khôi', 'price' => 150000, 'old_price' => 200000, 'image' => 'tietkiem_1.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Hướng Dương 1 Bông', 'price' => 80000, 'old_price' => 120000, 'image' => 'tietkiem_2.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Bó Baby Mini', 'price' => 120000, 'old_price' => 0, 'image' => 'tietkiem_3.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Cẩm Chướng Để Bàn', 'price' => 180000, 'old_price' => 250000, 'image' => 'tietkiem_4.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Bó Đồng Tiền May Mắn', 'price' => 140000, 'old_price' => 0, 'image' => 'tietkiem_5.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Bó Thạch Thảo Tím', 'price' => 160000, 'old_price' => 220000, 'image' => 'tietkiem_6.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Bó Salem Trắng', 'price' => 110000, 'old_price' => 150000, 'image' => 'tietkiem_7.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Combo 3 Bông Hồng', 'price' => 99000, 'old_price' => 150000, 'image' => 'tietkiem_8.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Bó Cúc Họa Mi', 'price' => 170000, 'old_price' => 0, 'image' => 'tietkiem_9.jpg', 'category' => 'Gói tiết kiệm'],
            ['name' => 'Hướng Dương Mix Baby', 'price' => 190000, 'old_price' => 260000, 'image' => 'tietkiem_10.jpg', 'category' => 'Gói tiết kiệm'],

            // ================= 10 SẢN PHẨM: HOA HỒNG JULIET =================
            ['name' => 'Bó Hoa Juliet 1', 'price' => 500000, 'old_price' => 600000, 'image' => 'juliet_1.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 2', 'price' => 520000, 'old_price' => 620000, 'image' => 'juliet_2.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 3', 'price' => 540000, 'old_price' => 640000, 'image' => 'juliet_3.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 4', 'price' => 560000, 'old_price' => 660000, 'image' => 'juliet_4.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 5', 'price' => 580000, 'old_price' => 680000, 'image' => 'juliet_5.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 6', 'price' => 600000, 'old_price' => 700000, 'image' => 'juliet_6.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 7', 'price' => 620000, 'old_price' => 720000, 'image' => 'juliet_7.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 8', 'price' => 640000, 'old_price' => 740000, 'image' => 'juliet_8.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 9', 'price' => 660000, 'old_price' => 760000, 'image' => 'juliet_9.jpg', 'category' => 'Hoa hồng Juliet'],
            ['name' => 'Bó Hoa Juliet 10', 'price' => 680000, 'old_price' => 780000, 'image' => 'juliet_10.jpg', 'category' => 'Hoa hồng Juliet'],

            // ================= 10 SẢN PHẨM: TULIP HÀ LAN =================
            ['name' => 'Bó Tulip 1', 'price' => 700000, 'old_price' => 800000, 'image' => 'tulip_1.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 2', 'price' => 720000, 'old_price' => 820000, 'image' => 'tulip_2.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 3', 'price' => 740000, 'old_price' => 840000, 'image' => 'tulip_3.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 4', 'price' => 760000, 'old_price' => 860000, 'image' => 'tulip_4.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 5', 'price' => 780000, 'old_price' => 880000, 'image' => 'tulip_5.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 6', 'price' => 800000, 'old_price' => 900000, 'image' => 'tulip_6.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 7', 'price' => 820000, 'old_price' => 920000, 'image' => 'tulip_7.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 8', 'price' => 840000, 'old_price' => 940000, 'image' => 'tulip_8.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 9', 'price' => 860000, 'old_price' => 960000, 'image' => 'tulip_9.jpg', 'category' => 'Tulip Hà Lan'],
            ['name' => 'Bó Tulip 10', 'price' => 880000, 'old_price' => 980000, 'image' => 'tulip_10.jpg', 'category' => 'Tulip Hà Lan'],

            // ================= 10 SẢN PHẨM: HOA MẪU ĐƠN NHẬP KHẨU =================
            ['name' => 'Bó Mẫu Đơn 1', 'price' => 900000, 'old_price' => 1000000, 'image' => 'maudon_1.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 2', 'price' => 920000, 'old_price' => 1020000, 'image' => 'maudon_2.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 3', 'price' => 940000, 'old_price' => 1040000, 'image' => 'maudon_3.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 4', 'price' => 960000, 'old_price' => 1060000, 'image' => 'maudon_4.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 5', 'price' => 980000, 'old_price' => 1080000, 'image' => 'maudon_5.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 6', 'price' => 1000000, 'old_price' => 1100000, 'image' => 'maudon_6.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 7', 'price' => 1020000, 'old_price' => 1120000, 'image' => 'maudon_7.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 8', 'price' => 1040000, 'old_price' => 1140000, 'image' => 'maudon_8.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 9', 'price' => 1060000, 'old_price' => 1160000, 'image' => 'maudon_9.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],
            ['name' => 'Bó Mẫu Đơn 10', 'price' => 1080000, 'old_price' => 1180000, 'image' => 'maudon_10.jpg', 'category' => 'Hoa mẫu đơn nhập khẩu'],

            // ================= 10 SẢN PHẨM: HOA BABY NHẬT BẢN =================
            ['name' => 'Bó Baby Nhật 1', 'price' => 300000, 'old_price' => 350000, 'image' => 'baby_1.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 2', 'price' => 320000, 'old_price' => 370000, 'image' => 'baby_2.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 3', 'price' => 340000, 'old_price' => 390000, 'image' => 'baby_3.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 4', 'price' => 360000, 'old_price' => 410000, 'image' => 'baby_4.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 5', 'price' => 380000, 'old_price' => 430000, 'image' => 'baby_5.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 6', 'price' => 400000, 'old_price' => 450000, 'image' => 'baby_6.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 7', 'price' => 420000, 'old_price' => 470000, 'image' => 'baby_7.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 8', 'price' => 440000, 'old_price' => 490000, 'image' => 'baby_8.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 9', 'price' => 460000, 'old_price' => 510000, 'image' => 'baby_9.jpg', 'category' => 'Hoa baby Nhật bản'],
            ['name' => 'Bó Baby Nhật 10', 'price' => 480000, 'old_price' => 530000, 'image' => 'baby_10.jpg', 'category' => 'Hoa baby Nhật bản'],

            // ================= 10 SẢN PHẨM: HOA ĐANG GIẢM GIÁ =================
            ['name' => 'Bó Hoa Sale 1', 'price' => 250000, 'old_price' => 350000, 'image' => 'sale_1.jpg', 'badge' => 'Sale', 'rating' => 4.5, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Giỏ Hoa Sale 2', 'price' => 320000, 'old_price' => 450000, 'image' => 'sale_2.jpg', 'badge' => '-30%', 'rating' => 4.8, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Lẵng Hoa Sale 3', 'price' => 280000, 'old_price' => 400000, 'image' => 'sale_3.jpg', 'badge' => 'Hot', 'rating' => 4.6, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Bó Hoa Sale 4', 'price' => 290000, 'old_price' => 380000, 'image' => 'sale_4.jpg', 'badge' => 'Sale', 'rating' => 4.7, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Hộp Hoa Sale 5', 'price' => 350000, 'old_price' => 500000, 'image' => 'sale_5.jpg', 'badge' => '-25%', 'rating' => 4.4, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Bó Hoa Sale 6', 'price' => 270000, 'old_price' => 360000, 'image' => 'sale_6.jpg', 'badge' => 'Sale', 'rating' => 4.9, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Giỏ Hoa Sale 7', 'price' => 310000, 'old_price' => 420000, 'image' => 'sale_7.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Lẵng Hoa Sale 8', 'price' => 260000, 'old_price' => 340000, 'image' => 'sale_8.jpg', 'badge' => 'Sale', 'rating' => 4.8, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Bó Hoa Sale 9', 'price' => 330000, 'old_price' => 460000, 'image' => 'sale_9.jpg', 'badge' => '-28%', 'rating' => 4.6, 'category' => 'Hoa đang giảm giá'],
            ['name' => 'Hộp Hoa Sale 10', 'price' => 300000, 'old_price' => 410000, 'image' => 'sale_10.jpg', 'badge' => 'Sale', 'rating' => 4.7, 'category' => 'Hoa đang giảm giá'],

            // ================= 10 SẢN PHẨM: HOA CHÚC MỪNG =================
            ['name' => 'Bó Hoa Chúc Mừng 1', 'price' => 450000, 'old_price' => 0, 'image' => 'congrats_1.jpg', 'badge' => 'New', 'rating' => 4.8, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Giỏ Hoa Chúc Mừng 2', 'price' => 520000, 'old_price' => 0, 'image' => 'congrats_2.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Lẵng Hoa Chúc Mừng 3', 'price' => 680000, 'old_price' => 0, 'image' => 'congrats_3.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Bó Hoa Chúc Mừng 4', 'price' => 380000, 'old_price' => 0, 'image' => 'congrats_4.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Hộp Hoa Chúc Mừng 5', 'price' => 750000, 'old_price' => 0, 'image' => 'congrats_5.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Bó Hoa Chúc Mừng 6', 'price' => 420000, 'old_price' => 0, 'image' => 'congrats_6.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Giỏ Hoa Chúc Mừng 7', 'price' => 580000, 'old_price' => 0, 'image' => 'congrats_7.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Lẵng Hoa Chúc Mừng 8', 'price' => 490000, 'old_price' => 0, 'image' => 'congrats_8.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Bó Hoa Chúc Mừng 9', 'price' => 550000, 'old_price' => 0, 'image' => 'congrats_9.jpg', 'badge' => 'New', 'rating' => 4.8, 'category' => 'Hoa chúc mừng'],
            ['name' => 'Hộp Hoa Chúc Mừng 10', 'price' => 620000, 'old_price' => 0, 'image' => 'congrats_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa chúc mừng'],

            // ================= 10 SẢN PHẨM: HOA HỒNG TƯƠI =================
            ['name' => 'Bó Hồng Đỏ Tươi 1', 'price' => 380000, 'old_price' => 450000, 'image' => 'hoahongt_1.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa hồng'],
            ['name' => 'Giỏ Hồng Tươi 2', 'price' => 520000, 'old_price' => 0, 'image' => 'hoahongt_2.jpg', 'badge' => 'New', 'rating' => 4.9, 'category' => 'Hoa hồng'],
            ['name' => 'Lẵng Hồng Tươi 3', 'price' => 680000, 'old_price' => 750000, 'image' => 'hoahongt_3.jpg', 'badge' => 'Sale', 'rating' => 4.7, 'category' => 'Hoa hồng'],
            ['name' => 'Bó Hồng Tươi 4', 'price' => 420000, 'old_price' => 0, 'image' => 'hoahongt_4.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa hồng'],
            ['name' => 'Hộp Hồng Tươi 5', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoahongt_5.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa hồng'],
            ['name' => 'Bó Hồng Tươi 6', 'price' => 350000, 'old_price' => 400000, 'image' => 'hoahongt_6.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa hồng'],
            ['name' => 'Giỏ Hồng Tươi 7', 'price' => 580000, 'old_price' => 0, 'image' => 'hoahongt_7.jpg', 'badge' => 'New', 'rating' => 4.9, 'category' => 'Hoa hồng'],
            ['name' => 'Lẵng Hồng Tươi 8', 'price' => 490000, 'old_price' => 550000, 'image' => 'hoahongt_8.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa hồng'],
            ['name' => 'Bó Hồng Tươi 9', 'price' => 550000, 'old_price' => 0, 'image' => 'hoahongt_9.jpg', 'badge' => 'New', 'rating' => 4.8, 'category' => 'Hoa hồng'],
            ['name' => 'Hộp Hồng Tươi 10', 'price' => 620000, 'old_price' => 700000, 'image' => 'hoahongt_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa hồng'],

            // ================= 10 SẢN PHẨM: HOA CÚC =================
            ['name' => 'Bó Cúc Tươi 1', 'price' => 280000, 'old_price' => 320000, 'image' => 'hoacuc_1.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Hoa cúc'],
            ['name' => 'Giỏ Cúc Tươi 2', 'price' => 350000, 'old_price' => 0, 'image' => 'hoacuc_2.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa cúc'],
            ['name' => 'Lẵng Cúc Tươi 3', 'price' => 420000, 'old_price' => 480000, 'image' => 'hoacuc_3.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa cúc'],
            ['name' => 'Bó Cúc Tươi 4', 'price' => 290000, 'old_price' => 0, 'image' => 'hoacuc_4.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Hoa cúc'],
            ['name' => 'Hộp Cúc Tươi 5', 'price' => 380000, 'old_price' => 450000, 'image' => 'hoacuc_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa cúc'],
            ['name' => 'Bó Cúc Tươi 6', 'price' => 260000, 'old_price' => 300000, 'image' => 'hoacuc_6.jpg', 'badge' => 'Sale', 'rating' => 4.4, 'category' => 'Hoa cúc'],
            ['name' => 'Giỏ Cúc Tươi 7', 'price' => 320000, 'old_price' => 0, 'image' => 'hoacuc_7.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa cúc'],
            ['name' => 'Lẵng Cúc Tươi 8', 'price' => 370000, 'old_price' => 420000, 'image' => 'hoacuc_8.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa cúc'],
            ['name' => 'Bó Cúc Tươi 9', 'price' => 310000, 'old_price' => 0, 'image' => 'hoacuc_9.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa cúc'],
            ['name' => 'Hộp Cúc Tươi 10', 'price' => 410000, 'old_price' => 480000, 'image' => 'hoacuc_10.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa cúc'],

            // ================= 10 SẢN PHẨM: HOA LY =================
            ['name' => 'Bó Ly Tươi 1', 'price' => 450000, 'old_price' => 520000, 'image' => 'hoaly_1.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa ly'],
            ['name' => 'Giỏ Ly Tươi 2', 'price' => 580000, 'old_price' => 0, 'image' => 'hoaly_2.jpg', 'badge' => 'New', 'rating' => 4.8, 'category' => 'Hoa ly'],
            ['name' => 'Lẵng Ly Tươi 3', 'price' => 680000, 'old_price' => 750000, 'image' => 'hoaly_3.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa ly'],
            ['name' => 'Bó Ly Tươi 4', 'price' => 420000, 'old_price' => 0, 'image' => 'hoaly_4.jpg', 'badge' => 'Hot', 'rating' => 4.6, 'category' => 'Hoa ly'],
            ['name' => 'Hộp Ly Tươi 5', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoaly_5.jpg', 'badge' => 'Sale', 'rating' => 4.8, 'category' => 'Hoa ly'],
            ['name' => 'Bó Ly Tươi 6', 'price' => 380000, 'old_price' => 450000, 'image' => 'hoaly_6.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa ly'],
            ['name' => 'Giỏ Ly Tươi 7', 'price' => 520000, 'old_price' => 0, 'image' => 'hoaly_7.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa ly'],
            ['name' => 'Lẵng Ly Tươi 8', 'price' => 620000, 'old_price' => 700000, 'image' => 'hoaly_8.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa ly'],
            ['name' => 'Bó Ly Tươi 9', 'price' => 480000, 'old_price' => 0, 'image' => 'hoaly_9.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa ly'],
            ['name' => 'Hộp Ly Tươi 10', 'price' => 820000, 'old_price' => 920000, 'image' => 'hoaly_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa ly'],

            // ================= 10 SẢN PHẨM: HOA LAN =================
            ['name' => 'Bó Lan Tươi 1', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoalan_1.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa lan'],
            ['name' => 'Giỏ Lan Tươi 2', 'price' => 680000, 'old_price' => 0, 'image' => 'hoalan_2.jpg', 'badge' => 'New', 'rating' => 4.9, 'category' => 'Hoa lan'],
            ['name' => 'Lẵng Lan Tươi 3', 'price' => 850000, 'old_price' => 950000, 'image' => 'hoalan_3.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa lan'],
            ['name' => 'Bó Lan Tươi 4', 'price' => 480000, 'old_price' => 0, 'image' => 'hoalan_4.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa lan'],
            ['name' => 'Hộp Lan Tươi 5', 'price' => 920000, 'old_price' => 1050000, 'image' => 'hoalan_5.jpg', 'badge' => 'Sale', 'rating' => 4.9, 'category' => 'Hoa lan'],
            ['name' => 'Bó Lan Tươi 6', 'price' => 520000, 'old_price' => 600000, 'image' => 'hoalan_6.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa lan'],
            ['name' => 'Giỏ Lan Tươi 7', 'price' => 750000, 'old_price' => 0, 'image' => 'hoalan_7.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa lan'],
            ['name' => 'Lẵng Lan Tươi 8', 'price' => 880000, 'old_price' => 980000, 'image' => 'hoalan_8.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa lan'],
            ['name' => 'Bó Lan Tươi 9', 'price' => 620000, 'old_price' => 0, 'image' => 'hoalan_9.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa lan'],
            ['name' => 'Hộp Lan Tươi 10', 'price' => 1050000, 'old_price' => 1200000, 'image' => 'hoalan_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa lan'],

            // ================= 10 SẢN PHẨM: HOA ĐỒNG TIỀN =================
            ['name' => 'Bó Đồng Tiền 1', 'price' => 320000, 'old_price' => 380000, 'image' => 'hoadongtien_1.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Giỏ Đồng Tiền 2', 'price' => 420000, 'old_price' => 0, 'image' => 'hoadongtien_2.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Lẵng Đồng Tiền 3', 'price' => 550000, 'old_price' => 620000, 'image' => 'hoadongtien_3.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Bó Đồng Tiền 4', 'price' => 350000, 'old_price' => 0, 'image' => 'hoadongtien_4.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Hộp Đồng Tiền 5', 'price' => 680000, 'old_price' => 750000, 'image' => 'hoadongtien_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Bó Đồng Tiền 6', 'price' => 290000, 'old_price' => 340000, 'image' => 'hoadongtien_6.jpg', 'badge' => 'Sale', 'rating' => 4.4, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Giỏ Đồng Tiền 7', 'price' => 380000, 'old_price' => 0, 'image' => 'hoadongtien_7.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Lẵng Đồng Tiền 8', 'price' => 480000, 'old_price' => 550000, 'image' => 'hoadongtien_8.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Bó Đồng Tiền 9', 'price' => 410000, 'old_price' => 0, 'image' => 'hoadongtien_9.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa đồng tiền'],
            ['name' => 'Hộp Đồng Tiền 10', 'price' => 720000, 'old_price' => 820000, 'image' => 'hoadongtien_10.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa đồng tiền'],

            // ================= 10 SẢN PHẨM: HOA CẢM CHƯƠNG =================
            ['name' => 'Bó Cẩm Chướng 1', 'price' => 380000, 'old_price' => 450000, 'image' => 'hoacamchuong_1.jpg', 'badge' => 'Hot', 'rating' => 4.6, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Giỏ Cẩm Chướng 2', 'price' => 480000, 'old_price' => 0, 'image' => 'hoacamchuong_2.jpg', 'badge' => 'New', 'rating' => 4.8, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Lẵng Cẩm Chướng 3', 'price' => 620000, 'old_price' => 700000, 'image' => 'hoacamchuong_3.jpg', 'badge' => 'Sale', 'rating' => 4.7, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Bó Cẩm Chướng 4', 'price' => 350000, 'old_price' => 0, 'image' => 'hoacamchuong_4.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Hộp Cẩm Chướng 5', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoacamchuong_5.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Bó Cẩm Chướng 6', 'price' => 320000, 'old_price' => 380000, 'image' => 'hoacamchuong_6.jpg', 'badge' => 'Sale', 'rating' => 4.4, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Giỏ Cẩm Chướng 7', 'price' => 420000, 'old_price' => 0, 'image' => 'hoacamchuong_7.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Lẵng Cẩm Chướng 8', 'price' => 550000, 'old_price' => 620000, 'image' => 'hoacamchuong_8.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Bó Cẩm Chướng 9', 'price' => 450000, 'old_price' => 0, 'image' => 'hoacamchuong_9.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa cẩm chướng'],
            ['name' => 'Hộp Cẩm Chướng 10', 'price' => 820000, 'old_price' => 920000, 'image' => 'hoacamchuong_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cẩm chướng'],

            // ================= 10 SẢN PHẨM: HOA CẢM TÚ CẦU =================
            ['name' => 'Bó Cẩm Tú Cầu 1', 'price' => 420000, 'old_price' => 500000, 'image' => 'hoacamtucau_1.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Giỏ Cẩm Tú Cầu 2', 'price' => 550000, 'old_price' => 0, 'image' => 'hoacamtucau_2.jpg', 'badge' => 'New', 'rating' => 4.8, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Lẵng Cẩm Tú Cầu 3', 'price' => 680000, 'old_price' => 780000, 'image' => 'hoacamtucau_3.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Bó Cẩm Tú Cầu 4', 'price' => 380000, 'old_price' => 0, 'image' => 'hoacamtucau_4.jpg', 'badge' => 'Hot', 'rating' => 4.6, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Hộp Cẩm Tú Cầu 5', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoacamtucau_5.jpg', 'badge' => 'Sale', 'rating' => 4.8, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Bó Cẩm Tú Cầu 6', 'price' => 350000, 'old_price' => 420000, 'image' => 'hoacamtucau_6.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Giỏ Cẩm Tú Cầu 7', 'price' => 480000, 'old_price' => 0, 'image' => 'hoacamtucau_7.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Lẵng Cẩm Tú Cầu 8', 'price' => 620000, 'old_price' => 720000, 'image' => 'hoacamtucau_8.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Bó Cẩm Tú Cầu 9', 'price' => 520000, 'old_price' => 0, 'image' => 'hoacamtucau_9.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa cẩm tú cầu'],
            ['name' => 'Hộp Cẩm Tú Cầu 10', 'price' => 850000, 'old_price' => 950000, 'image' => 'hoacamtucau_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cẩm tú cầu'],

            // ================= 10 SẢN PHẨM: CÁC LOẠI HOA PHỔ BIẾN =================
            ['name' => 'Bó Hoa Phổ Biến 1', 'price' => 280000, 'old_price' => 350000, 'image' => 'hoaphobien_1.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Giỏ Hoa Phổ Biến 2', 'price' => 380000, 'old_price' => 0, 'image' => 'hoaphobien_2.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Lẵng Hoa Phổ Biến 3', 'price' => 480000, 'old_price' => 550000, 'image' => 'hoaphobien_3.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Bó Hoa Phổ Biến 4', 'price' => 320000, 'old_price' => 0, 'image' => 'hoaphobien_4.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Hộp Hoa Phổ Biến 5', 'price' => 580000, 'old_price' => 680000, 'image' => 'hoaphobien_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Bó Hoa Phổ Biến 6', 'price' => 260000, 'old_price' => 320000, 'image' => 'hoaphobien_6.jpg', 'badge' => 'Sale', 'rating' => 4.4, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Giỏ Hoa Phổ Biến 7', 'price' => 350000, 'old_price' => 0, 'image' => 'hoaphobien_7.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Lẵng Hoa Phổ Biến 8', 'price' => 450000, 'old_price' => 520000, 'image' => 'hoaphobien_8.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Bó Hoa Phổ Biến 9', 'price' => 380000, 'old_price' => 0, 'image' => 'hoaphobien_9.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Các loại hoa phổ biến khác'],
            ['name' => 'Hộp Hoa Phổ Biến 10', 'price' => 680000, 'old_price' => 780000, 'image' => 'hoaphobien_10.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Các loại hoa phổ biến khác'],

            // ================= 10 SẢN PHẨM: GIỎ HOA & QUÀ TẶG =================
            ['name' => 'Giỏ Hoa Tình Yêu 1', 'price' => 550000, 'old_price' => 650000, 'image' => 'giohoa_1.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Giỏ Hoa Sinh Nhật 2', 'price' => 650000, 'old_price' => 0, 'image' => 'giohoa_2.jpg', 'badge' => 'New', 'rating' => 4.9, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Hộp Quà Tặng 3', 'price' => 450000, 'old_price' => 520000, 'image' => 'quatang_3.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Giỏ Hoa Cảm Ơn 4', 'price' => 750000, 'old_price' => 850000, 'image' => 'giohoa_4.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Bó Hoa Chúc Mừng 5', 'price' => 350000, 'old_price' => 0, 'image' => 'bohoa_5.jpg', 'badge' => 'Hot', 'rating' => 4.5, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Giỏ Hoa Lãng Mạn 6', 'price' => 850000, 'old_price' => 950000, 'image' => 'giohoa_6.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Hộp Quà Tặng Socola 7', 'price' => 550000, 'old_price' => 0, 'image' => 'quatang_7.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Giỏ Hoa Mừng Khai Trương 8', 'price' => 950000, 'old_price' => 1100000, 'image' => 'giohoa_8.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Bộ Quà Tặng Hoa & Gấu 9', 'price' => 650000, 'old_price' => 750000, 'image' => 'quatang_9.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Giỏ hoa & Quà tặng'],
            ['name' => 'Giỏ Hoa Sang Trọng 10', 'price' => 1200000, 'old_price' => 0, 'image' => 'giohoa_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Giỏ hoa & Quà tặng'],

            // ================= 10 SẢN PHẨM: HOA MẪU ĐƠN (CƯỚI) =================
            ['name' => 'Bó Hoa Mẫu Đơn Cưới 1', 'price' => 850000, 'old_price' => 950000, 'image' => 'hoamaudon_1.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Lẵng Hoa Mẫu Đơn 2', 'price' => 1200000, 'old_price' => 0, 'image' => 'hoamaudon_2.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Hộp Hoa Mẫu Đơn 3', 'price' => 650000, 'old_price' => 750000, 'image' => 'hoamaudon_3.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Bó Hoa Mẫu Đơn Hồng 4', 'price' => 750000, 'old_price' => 0, 'image' => 'hoamaudon_4.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Lẵng Hoa Mẫu Đơn Trắng 5', 'price' => 950000, 'old_price' => 1100000, 'image' => 'hoamaudon_5.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Bó Hoa Mẫu Đơn Đỏ 6', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoamaudon_6.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Hộp Hoa Mẫu Đơn Sang 7', 'price' => 1350000, 'old_price' => 0, 'image' => 'hoamaudon_7.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Lẵng Hoa Mẫu Đơn Lớn 8', 'price' => 1800000, 'old_price' => 2000000, 'image' => 'hoamaudon_8.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Bó Hoa Mẫu Đơn Mix 9', 'price' => 680000, 'old_price' => 0, 'image' => 'hoamaudon_9.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa mẫu đơn'],
            ['name' => 'Hộp Hoa Mẫu Đơn Cao Cấp 10', 'price' => 2200000, 'old_price' => 2500000, 'image' => 'hoamaudon_10.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa mẫu đơn'],

            // ================= 10 SẢN PHẨM: HOA BABY (CƯỚI) =================
            ['name' => 'Bó Hoa Baby 1', 'price' => 450000, 'old_price' => 550000, 'image' => 'hoababy_1.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa baby'],
            ['name' => 'Lẵng Hoa Baby 2', 'price' => 650000, 'old_price' => 0, 'image' => 'hoababy_2.jpg', 'badge' => 'New', 'rating' => 4.9, 'category' => 'Hoa baby'],
            ['name' => 'Hộp Hoa Baby 3', 'price' => 350000, 'old_price' => 420000, 'image' => 'hoababy_3.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa baby'],
            ['name' => 'Bó Hoa Baby Hồng 4', 'price' => 380000, 'old_price' => 0, 'image' => 'hoababy_4.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa baby'],
            ['name' => 'Lẵng Hoa Baby Trắng 5', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoababy_5.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa baby'],
            ['name' => 'Bó Hoa Baby Mix 6', 'price' => 420000, 'old_price' => 0, 'image' => 'hoababy_6.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa baby'],
            ['name' => 'Hộp Hoa Baby Sang 7', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoababy_7.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa baby'],
            ['name' => 'Lẵng Hoa Baby Lớn 8', 'price' => 950000, 'old_price' => 0, 'image' => 'hoababy_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa baby'],
            ['name' => 'Bó Hoa Baby Xinh 9', 'price' => 320000, 'old_price' => 380000, 'image' => 'hoababy_9.jpg', 'badge' => 'Sale', 'rating' => 4.4, 'category' => 'Hoa baby'],
            ['name' => 'Hộp Hoa Baby Cao Cấp 10', 'price' => 1200000, 'old_price' => 0, 'image' => 'hoababy_10.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa baby'],

            // ================= 10 SẢN PHẨM: HOA TULIP (CƯỚI) =================
            ['name' => 'Bó Hoa Tulip 1', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoatulip_1.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa Tulip'],
            ['name' => 'Lẵng Hoa Tulip 2', 'price' => 850000, 'old_price' => 0, 'image' => 'hoatulip_2.jpg', 'badge' => 'New', 'rating' => 4.9, 'category' => 'Hoa Tulip'],
            ['name' => 'Hộp Hoa Tulip 3', 'price' => 450000, 'old_price' => 520000, 'image' => 'hoatulip_3.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa Tulip'],
            ['name' => 'Bó Hoa Tulip Đỏ 4', 'price' => 480000, 'old_price' => 0, 'image' => 'hoatulip_4.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa Tulip'],
            ['name' => 'Lẵng Hoa Tulip Trắng 5', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoatulip_5.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa Tulip'],
            ['name' => 'Bó Hoa Tulip Mix 6', 'price' => 520000, 'old_price' => 0, 'image' => 'hoatulip_6.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa Tulip'],
            ['name' => 'Hộp Hoa Tulip Sang 7', 'price' => 950000, 'old_price' => 1100000, 'image' => 'hoatulip_7.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa Tulip'],
            ['name' => 'Lẵng Hoa Tulip Lớn 8', 'price' => 1200000, 'old_price' => 0, 'image' => 'hoatulip_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa Tulip'],
            ['name' => 'Bó Hoa Tulip Xinh 9', 'price' => 420000, 'old_price' => 480000, 'image' => 'hoatulip_9.jpg', 'badge' => 'Sale', 'rating' => 4.4, 'category' => 'Hoa Tulip'],
            ['name' => 'Hộp Hoa Tulip Cao Cấp 10', 'price' => 1500000, 'old_price' => 0, 'image' => 'hoatulip_10.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa Tulip'],

            // ================= 10 SẢN PHẨM: HOA CẨM TÚ CẦU (TƯƠI) =================
            ['name' => 'Bó Hoa Cẩm Tú Cầu Tươi 1', 'price' => 450000, 'old_price' => 550000, 'image' => 'hoacamtucau_1.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu 2', 'price' => 650000, 'old_price' => 0, 'image' => 'hoacamtucau_2.jpg', 'badge' => 'New', 'rating' => 4.9, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Hộp Hoa Cẩm Tú Cầu 3', 'price' => 350000, 'old_price' => 420000, 'image' => 'hoacamtucau_3.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Bó Hoa Cẩm Tú Cầu Hồng 4', 'price' => 380000, 'old_price' => 0, 'image' => 'hoacamtucau_4.jpg', 'badge' => 'Hot', 'rating' => 4.7, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu Trắng 5', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoacamtucau_5.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Bó Hoa Cẩm Tú Cầu Mix 6', 'price' => 420000, 'old_price' => 0, 'image' => 'hoacamtucau_6.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Hộp Hoa Cẩm Tú Cầu Sang 7', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoacamtucau_7.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu Lớn 8', 'price' => 950000, 'old_price' => 0, 'image' => 'hoacamtucau_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Bó Hoa Cẩm Tú Cầu Xinh 9', 'price' => 320000, 'old_price' => 380000, 'image' => 'hoacamtucau_9.jpg', 'badge' => 'Sale', 'rating' => 4.4, 'category' => 'Hoa cẩm tú cầu (tươi)'],
            ['name' => 'Hộp Hoa Cẩm Tú Cầu Cao Cấp 10', 'price' => 1200000, 'old_price' => 0, 'image' => 'hoacamtucau_10.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa cẩm tú cầu (tươi)'],

            // ================= 20 SẢN PHẨM: HOA CƯỚI (CHÍNH) =================
            ['name' => 'Bó Hoa Cưới Trắng 1', 'price' => 850000, 'old_price' => 950000, 'image' => 'hoacuoi_1.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Hồng 2', 'price' => 1200000, 'old_price' => 0, 'image' => 'hoacuoi_2.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Đỏ 3', 'price' => 650000, 'old_price' => 750000, 'image' => 'hoacuoi_3.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Mix 4', 'price' => 950000, 'old_price' => 0, 'image' => 'hoacuoi_4.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Sang 5', 'price' => 1500000, 'old_price' => 1700000, 'image' => 'hoacuoi_5.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Lớn 6', 'price' => 2200000, 'old_price' => 0, 'image' => 'hoacuoi_6.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Baby 7', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoacuoi_7.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Tulip 8', 'price' => 1800000, 'old_price' => 2000000, 'image' => 'hoacuoi_8.jpg', 'badge' => 'Sale', 'rating' => 4.7, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Mẫu Đơn 9', 'price' => 1300000, 'old_price' => 0, 'image' => 'hoacuoi_9.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Cao Cấp 10', 'price' => 2800000, 'old_price' => 3200000, 'image' => 'hoacuoi_10.jpg', 'badge' => 'Hot', 'rating' => 5.0, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Hồng Đỏ 11', 'price' => 950000, 'old_price' => 0, 'image' => 'hoacuoi_11.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Trắng Hồng 12', 'price' => 1600000, 'old_price' => 1800000, 'image' => 'hoacuoi_12.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Baby Trắng 13', 'price' => 800000, 'old_price' => 900000, 'image' => 'hoacuoi_13.jpg', 'badge' => 'Sale', 'rating' => 4.5, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Mix Sang 14', 'price' => 2500000, 'old_price' => 0, 'image' => 'hoacuoi_14.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Nhỏ 15', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoacuoi_15.jpg', 'badge' => 'New', 'rating' => 4.4, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Vip 16', 'price' => 3500000, 'old_price' => 0, 'image' => 'hoacuoi_16.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Đặc Biệt 17', 'price' => 1900000, 'old_price' => 2100000, 'image' => 'hoacuoi_17.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Xinh 18', 'price' => 1100000, 'old_price' => 0, 'image' => 'hoacuoi_18.jpg', 'badge' => 'New', 'rating' => 4.6, 'category' => 'Hoa cưới'],
            ['name' => 'Bó Hoa Cưới Cao Cấp 19', 'price' => 3200000, 'old_price' => 3500000, 'image' => 'hoacuoi_19.jpg', 'badge' => 'VIP', 'rating' => 4.9, 'category' => 'Hoa cưới'],
            ['name' => 'Lẵng Hoa Cưới Lớn Xanh 20', 'price' => 4200000, 'old_price' => 0, 'image' => 'hoacuoi_20.jpg', 'badge' => 'Hot', 'rating' => 5.0, 'category' => 'Hoa cưới'],

            // ================= 10 SẢN PHẨM: HOA HỒNG CƯỚI (CON) =================
            ['name' => 'Bó Hoa Hồng Cưới Đỏ 1', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoahongcuoi_1.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Lẵng Hoa Hồng Cưới Trắng 2', 'price' => 1200000, 'old_price' => 0, 'image' => 'hoahongcuoi_2.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Bó Hoa Hồng Cưới Hồng 3', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoahongcuoi_3.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Lẵng Hoa Hồng Cưới Mix 4', 'price' => 950000, 'old_price' => 1100000, 'image' => 'hoahongcuoi_4.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Bó Hoa Hồng Cưới Sang 5', 'price' => 1800000, 'old_price' => 0, 'image' => 'hoahongcuoi_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Lẵng Hoa Hồng Cưới Lớn 6', 'price' => 2500000, 'old_price' => 2800000, 'image' => 'hoahongcuoi_6.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Bó Hoa Hồng Cưới Nhỏ 7', 'price' => 450000, 'old_price' => 520000, 'image' => 'hoahongcuoi_7.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Lẵng Hoa Hồng Cưới Vip 8', 'price' => 3200000, 'old_price' => 0, 'image' => 'hoahongcuoi_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Bó Hoa Hồng Cưới Đặc Biệt 9', 'price' => 1500000, 'old_price' => 1700000, 'image' => 'hoahongcuoi_9.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa hồng cưới'],
            ['name' => 'Lẵng Hoa Hồng Cưới Xinh 10', 'price' => 850000, 'old_price' => 0, 'image' => 'hoahongcuoi_10.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa hồng cưới'],

            // ================= 10 SẢN PHẨM: HOA MẪU ĐƠN CƯỚI (CON) =================
            ['name' => 'Bó Hoa Mẫu Đơn Cưới Đỏ 1', 'price' => 950000, 'old_price' => 1100000, 'image' => 'hoamaudoncuoi_1.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Lẵng Hoa Mẫu Đơn Cưới Trắng 2', 'price' => 1500000, 'old_price' => 0, 'image' => 'hoamaudoncuoi_2.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Bó Hoa Mẫu Đơn Cưới Hồng 3', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoamaudoncuoi_3.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Lẵng Hoa Mẫu Đơn Cưới Mix 4', 'price' => 1200000, 'old_price' => 1400000, 'image' => 'hoamaudoncuoi_4.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Bó Hoa Mẫu Đơn Cưới Sang 5', 'price' => 2200000, 'old_price' => 0, 'image' => 'hoamaudoncuoi_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Lẵng Hoa Mẫu Đơn Cưới Lớn 6', 'price' => 3500000, 'old_price' => 3800000, 'image' => 'hoamaudoncuoi_6.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Bó Hoa Mẫu Đơn Cưới Nhỏ 7', 'price' => 650000, 'old_price' => 750000, 'image' => 'hoamaudoncuoi_7.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Lẵng Hoa Mẫu Đơn Cưới Vip 8', 'price' => 4500000, 'old_price' => 0, 'image' => 'hoamaudoncuoi_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Bó Hoa Mẫu Đơn Cưới Đặc Biệt 9', 'price' => 1800000, 'old_price' => 2000000, 'image' => 'hoamaudoncuoi_9.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa mẫu đơn cưới'],
            ['name' => 'Lẵng Hoa Mẫu Đơn Cưới Xinh 10', 'price' => 1100000, 'old_price' => 0, 'image' => 'hoamaudoncuoi_10.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa mẫu đơn cưới'],

            // ================= 10 SẢN PHẨM: HOA CẨM TÚ CẦU CƯỚI (CON) =================
            ['name' => 'Bó Hoa Cẩm Tú Cầu Cưới Đỏ 1', 'price' => 850000, 'old_price' => 950000, 'image' => 'hoacamtucaucuoi_1.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu Cưới Trắng 2', 'price' => 1300000, 'old_price' => 0, 'image' => 'hoacamtucaucuoi_2.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Bó Hoa Cẩm Tú Cầu Cưới Hồng 3', 'price' => 650000, 'old_price' => 750000, 'image' => 'hoacamtucaucuoi_3.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu Cưới Mix 4', 'price' => 1100000, 'old_price' => 1200000, 'image' => 'hoacamtucaucuoi_4.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Bó Hoa Cẩm Tú Cầu Cưới Sang 5', 'price' => 2000000, 'old_price' => 0, 'image' => 'hoacamtucaucuoi_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu Cưới Lớn 6', 'price' => 3200000, 'old_price' => 3500000, 'image' => 'hoacamtucaucuoi_6.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Bó Hoa Cẩm Tú Cầu Cưới Nhỏ 7', 'price' => 550000, 'old_price' => 620000, 'image' => 'hoacamtucaucuoi_7.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu Cưới Vip 8', 'price' => 4200000, 'old_price' => 0, 'image' => 'hoacamtucaucuoi_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Bó Hoa Cẩm Tú Cầu Cưới Đặc Biệt 9', 'price' => 1700000, 'old_price' => 1900000, 'image' => 'hoacamtucaucuoi_9.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa cẩm tú cầu cưới'],
            ['name' => 'Lẵng Hoa Cẩm Tú Cầu Cưới Xinh 10', 'price' => 950000, 'old_price' => 0, 'image' => 'hoacamtucaucuoi_10.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa cẩm tú cầu cưới'],

            // ================= 10 SẢN PHẨM: HOA BABY CƯỚI (CON) =================
            ['name' => 'Bó Hoa Baby Cưới Trắng 1', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoababy_cuoi_1.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa baby cưới'],
            ['name' => 'Lẵng Hoa Baby Cưới Hồng 2', 'price' => 850000, 'old_price' => 0, 'image' => 'hoababy_cuoi_2.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa baby cưới'],
            ['name' => 'Bó Hoa Baby Cưới Đỏ 3', 'price' => 450000, 'old_price' => 520000, 'image' => 'hoababy_cuoi_3.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa baby cưới'],
            ['name' => 'Lẵng Hoa Baby Cưới Mix 4', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoababy_cuoi_4.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa baby cưới'],
            ['name' => 'Bó Hoa Baby Cưới Sang 5', 'price' => 1500000, 'old_price' => 0, 'image' => 'hoababy_cuoi_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa baby cưới'],
            ['name' => 'Lẵng Hoa Baby Cưới Lớn 6', 'price' => 2200000, 'old_price' => 2500000, 'image' => 'hoababy_cuoi_6.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa baby cưới'],
            ['name' => 'Bó Hoa Baby Cưới Nhỏ 7', 'price' => 350000, 'old_price' => 420000, 'image' => 'hoababy_cuoi_7.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa baby cưới'],
            ['name' => 'Lẵng Hoa Baby Cưới Vip 8', 'price' => 3200000, 'old_price' => 0, 'image' => 'hoababy_cuoi_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa baby cưới'],
            ['name' => 'Bó Hoa Baby Cưới Đặc Biệt 9', 'price' => 1200000, 'old_price' => 1400000, 'image' => 'hoababy_cuoi_9.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa baby cưới'],
            ['name' => 'Lẵng Hoa Baby Cưới Xinh 10', 'price' => 650000, 'old_price' => 0, 'image' => 'hoababy_cuoi_10.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa baby cưới'],

            // ================= 10 SẢN PHẨM: HOA TULIP CƯỚI (CON) =================
            ['name' => 'Bó Hoa Tulip Cưới Đỏ 1', 'price' => 750000, 'old_price' => 850000, 'image' => 'hoatulip_cuoi_1.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Lẵng Hoa Tulip Cưới Trắng 2', 'price' => 1100000, 'old_price' => 0, 'image' => 'hoatulip_cuoi_2.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Bó Hoa Tulip Cưới Hồng 3', 'price' => 550000, 'old_price' => 650000, 'image' => 'hoatulip_cuoi_3.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Lẵng Hoa Tulip Cưới Mix 4', 'price' => 950000, 'old_price' => 1100000, 'image' => 'hoatulip_cuoi_4.jpg', 'badge' => 'Sale', 'rating' => 4.6, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Bó Hoa Tulip Cưới Sang 5', 'price' => 1800000, 'old_price' => 0, 'image' => 'hoatulip_cuoi_5.jpg', 'badge' => 'VIP', 'rating' => 4.8, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Lẵng Hoa Tulip Cưới Lớn 6', 'price' => 2800000, 'old_price' => 3000000, 'image' => 'hoatulip_cuoi_6.jpg', 'badge' => 'Hot', 'rating' => 4.9, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Bó Hoa Tulip Cưới Nhỏ 7', 'price' => 450000, 'old_price' => 520000, 'image' => 'hoatulip_cuoi_7.jpg', 'badge' => 'New', 'rating' => 4.5, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Lẵng Hoa Tulip Cưới Vip 8', 'price' => 3800000, 'old_price' => 0, 'image' => 'hoatulip_cuoi_8.jpg', 'badge' => 'VIP', 'rating' => 5.0, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Bó Hoa Tulip Cưới Đặc Biệt 9', 'price' => 1500000, 'old_price' => 1700000, 'image' => 'hoatulip_cuoi_9.jpg', 'badge' => 'Hot', 'rating' => 4.8, 'category' => 'Hoa tulip cưới'],
            ['name' => 'Lẵng Hoa Tulip Cưới Xinh 10', 'price' => 850000, 'old_price' => 0, 'image' => 'hoatulip_cuoi_10.jpg', 'badge' => 'New', 'rating' => 4.7, 'category' => 'Hoa tulip cưới'],
        ];

        // Sử dụng Model để tạo sản phẩm, tránh lỗi thứ tự cột
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate(); // Xóa sạch dữ liệu cũ

        $allProducts = [];
        
        // 1. Hàm hỗ trợ sinh dữ liệu nhanh
        $generateProducts = function($category, $count, $namePrefix, $priceRange, $imgPrefix) use (&$allProducts) {
            for ($i = 1; $i <= $count; $i++) {
                $price = rand($priceRange[0], $priceRange[1]) * 10000;
                $allProducts[] = [
                    'name' => $namePrefix . ' Cao Cấp ' . $i,
                    'price' => $price,
                    'old_price' => rand(0, 1) ? $price + rand(50000, 200000) : null,
                    'image' => $imgPrefix . '_' . rand(1, 5) . '.jpg', // Tên ảnh ngẫu nhiên từ 1->5 để tái sử dụng ảnh
                    'badge' => $i <= 2 ? 'Mới' : null,
                    'rating' => rand(45, 50) / 10,
                    'category' => $category,
                ];
            }
        };

        // 2. Bơm 3 mục Bán chạy (Mỗi mục 10)
        $generateProducts('Bán chạy', 10, 'Bó Hoa', [25, 60], 'banchay');
        $generateProducts('Đang hot', 10, 'Giỏ Hoa', [30, 80], 'hot');
        $generateProducts('Gói tiết kiệm', 10, 'Hoa Mix', [10, 20], 'tietkiem');

        // 3. Bơm 4 mục Hoa Cao Cấp (Mỗi mục 10)
        $generateProducts('Hoa hồng Juliet', 10, 'Juliet', [80, 150], 'juliet');
        $generateProducts('Tulip Hà Lan', 10, 'Tulip', [60, 120], 'tulip');
        $generateProducts('Hoa mẫu đơn nhập khẩu', 10, 'Mẫu Đơn', [90, 200], 'maudon');
        $generateProducts('Hoa baby Nhật bản', 10, 'Baby', [40, 70], 'baby');

        // 4. Bơm Hoa giảm giá & Chúc mừng (Mỗi mục 10)
        $generateProducts('Hoa đang giảm giá', 10, 'Hoa Sale', [15, 30], 'sale');
        $generateProducts('Hoa chúc mừng', 10, 'Lẵng Khai Trương', [100, 300], 'chucmung');

        // 5. Bơm Hoa Cưới (Mỗi mục 20)
        $generateProducts('Hoa hồng cưới', 20, 'Hồng Cưới', [50, 100], 'hongcuoi');
        $generateProducts('Hoa mẫu đơn cưới', 20, 'Mẫu Đơn Cưới', [100, 250], 'maudoncuoi');
        $generateProducts('Hoa cẩm tú cầu cưới', 20, 'Cẩm Tú Cầu Cưới', [40, 80], 'camtucaucuoi');
        $generateProducts('Hoa baby cưới', 20, 'Baby Cưới', [30, 60], 'babycuoi');
        $generateProducts('Hoa tulip cưới', 20, 'Tulip Cưới', [70, 150], 'tulipcuoi');

        // Chèn toàn bộ vào Database
        foreach(array_chunk($allProducts, 50) as $chunk) {
            DB::table('products')->insert($chunk);
        }
    }
}
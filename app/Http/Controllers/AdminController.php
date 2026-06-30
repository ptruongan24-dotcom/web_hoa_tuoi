<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    /**
     * Hiển thị trang dashboard admin
     */
    public function dashboard()
    {
        // Lấy thống kê
        $stats = [
            'total_revenue' => 125678000, // Dữ liệu mẫu
            'total_orders' => 1234,
            'total_customers' => User::count(),
            'total_products' => Product::count(),
        ];
        
        // Lấy đơn hàng gần đây (dữ liệu mẫu)
        $recentOrders = [
            [
                'id' => '#DH001234',
                'customer' => 'Nguyễn Văn A',
                'amount' => 1250000,
                'status' => 'delivered',
                'status_text' => 'Đã giao'
            ],
            [
                'id' => '#DH001233',
                'customer' => 'Trần Thị B',
                'amount' => 890000,
                'status' => 'shipping',
                'status_text' => 'Đang giao'
            ],
            [
                'id' => '#DH001232',
                'customer' => 'Lê Văn C',
                'amount' => 2450000,
                'status' => 'processing',
                'status_text' => 'Đang xử lý'
            ],
        ];
        
        // Lấy sản phẩm bán chạy (dữ liệu mẫu)
        $topProducts = [
            [
                'name' => 'Hoa hồng Ecuador',
                'icon' => 'fa-rose',
                'color' => 'pink',
                'orders' => 245,
                'revenue' => 45200000,
                'growth' => 12
            ],
            [
                'name' => 'Hoa tulip Hà Lan',
                'icon' => 'fa-spa',
                'color' => 'purple',
                'orders' => 189,
                'revenue' => 32800000,
                'growth' => 8
            ],
            [
                'name' => 'Hoa baby Nhật Bản',
                'icon' => 'fa-snowflake',
                'color' => 'blue',
                'orders' => 156,
                'revenue' => 28500000,
                'growth' => 15
            ],
        ];
        
        return view('admin.dashboard', compact('stats', 'recentOrders', 'topProducts'));
    }
    
    /**
     * Hiển thị trang danh sách sản phẩm
     */
    public function products()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }
    
    /**
     * Hiển thị trang danh sách đơn hàng
     */
    public function orders()
    {
        return view('admin.orders.index');
    }
    
    /**
     * Hiển thị trang danh sách khách hàng
     */
    public function customers()
    {
        $customers = User::where('role', 'user')->paginate(10);
        return view('admin.customers.index', compact('customers'));
    }
}

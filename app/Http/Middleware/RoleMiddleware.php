<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect('/dang-nhap')->with('error', 'Bạn cần đăng nhập để truy cập trang này.');
        }

        if (Auth::user()->role !== $role) {
            // Nếu là user bình thường, chuyển về trang chính
            if (Auth::user()->role === 'user') {
                return redirect('/')->with('error', 'Bạn không có quyền truy cập trang quản trị.');
            }
            
            // Nếu không phải admin, chuyển về trang đăng nhập
            return redirect('/dang-nhap')->with('error', 'Bạn không có quyền truy cập trang này.');
        }

        return $next($request);
    }
}

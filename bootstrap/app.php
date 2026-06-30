<?php

/*
|--------------------------------------------------------------------------
| Tạo Ứng Dụng
|--------------------------------------------------------------------------
|
| Việc đầu tiên chúng tôi sẽ làm là tạo một instance ứng dụng Laravel mới
| đóng vai trò là "keo" cho tất cả các thành phần của Laravel, và là
| IoC container cho hệ thống liên kết tất cả các phần khác nhau.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Liên Kết Các Interface Quan Trọng
|--------------------------------------------------------------------------
|
| Tiếp theo, chúng ta cần liên kết một số interface quan trọng vào container
| để chúng ta có thể giải quyết chúng khi cần. Các kernels phục vụ
| các yêu cầu đến ứng dụng này từ cả web và CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Trả Về Ứng Dụng
|--------------------------------------------------------------------------
|
| Script này trả về instance ứng dụng. Instance được đưa đến
| script gọi để chúng ta có thể tách biệt việc xây dựng các instance
| khỏi việc chạy thực tế ứng dụng và gửi phản hồi.
|
*/

return $app;

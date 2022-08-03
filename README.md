# Task D : Tạo chức năng đăng ký, đăng nhập đăng xuất:

- Thực hiện bởi QUẢN TRỌNG HIỆP

## Task D.1:

#### Khởi tạo database bảng user với 2 loại: 100 user thường và 1 admin (Sử dụng migration và seeder, faker)

- thêm trường role kiểu boolean trong bảng users tại migrations
- php artisan make:seeder CreateUser : tạo seeder
- php artisan db:seed --class=CreateUser : run seeder để tạo 1 admin
- php artisan db:seed : tạo 100 user  (//User::factory(100)->create();)

#### Tạo trang admin với chức năng CRUD user (chỉ user là admin, chưa yêu cầu phần quyền), có thể sử dụng package nếu biết


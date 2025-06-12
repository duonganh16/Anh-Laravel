## Pet Food Ordering System - Laravel Web App

# Thông tin sinh viên
# Họ và tên: Nguyễn Dương Ngọc Ánh

# Mã sinh viên: 23011500

# Lớp: [Điền tên lớp nếu cần]

# Giới thiệu Project
Đây là một ứng dụng web xây dựng bằng Laravel, phục vụ cho việc quản lý bán đồ ăn thú cưng.
Hệ thống bao gồm các chức năng chính như: quản lý món ăn, khách hàng, và đơn đặt hàng.
Người dùng có thể đăng nhập, thêm món ăn mới, tạo đơn hàng, và xem danh sách đơn hàng.

# Các thành phần chính
Đối tượng	Chức năng
Food	Món ăn cho thú cưng
Customer	Thông tin khách hàng
Order	Đơn hàng giữa khách hàng và món ăn

# Bảo mật (Security)
Dự án đã triển khai các biện pháp bảo mật:

CSRF: Tự động bảo vệ các biểu mẫu qua token (@csrf)

XSS Prevention: Dữ liệu đầu vào được escape qua Blade

Validation: Sử dụng Laravel Request validation

Authentication & Authorization: Dùng Laravel Breeze

Session/Cookies: Quản lý thông qua Laravel core

SQL Injection: Ngăn chặn qua Eloquent ORM

# Migrations và Eloquent
Tất cả các bảng (foods, customers, orders) đều được tạo bằng migrations.
Mối quan hệ được xây dựng bằng Eloquent:

Customer hasMany Orders

Food hasMany Orders

Order belongsTo Customer và Food

# Các chức năng chính
Tính năng	Mô tả
Đăng ký / Đăng nhập	Sử dụng Laravel Breeze
CRUD Món ăn (Food)	Tạo, sửa, xóa, xem danh sách món ăn
Quản lý đơn hàng	Tạo đơn hàng gồm chọn khách hàng, món ăn và số lượng
Upload ảnh món ăn	Upload ảnh khi tạo hoặc sửa món ăn (sử dụng Storage public)
Xem danh sách Orders	Hiển thị bảng danh sách đơn hàng theo từng khách hàng/món ăn

# Link GitHub Repo: 
 https://github.com/duonganh16/Anh-Laravel

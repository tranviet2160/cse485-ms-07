# CSE485 - MiniShop Laravel (Phiếu 06)

## Giới thiệu

Đây là bài thực hành **Phiếu 06** 

Mục tiêu của bài:

- Làm quen với Laravel Framework.
- Hiểu cấu trúc thư mục của Laravel.
- Tạo Route và Controller.
- Sử dụng Named Route để điều hướng.
- Hiểu Request Lifecycle trong Laravel.

---

## Công nghệ sử dụng

- PHP 8.2
- Laravel 12
- Composer
- Blade Template Engine

---

## Cài đặt

### 1. Clone project

```bash
git clone https://github.com/tranviet2160/cse485-ms-06.git
```

### 2. Di chuyển vào thư mục project

```bash
cd cse485-ms-06
```

### 3. Cài đặt thư viện

```bash
composer install
```

### 4. Tạo file môi trường

```bash
cp .env.example .env
```

> Trên Windows nếu lệnh `cp` không hoạt động:

```bash
copy .env.example .env
```

### 5. Tạo Application Key

```bash
php artisan key:generate
```

### 6. Khởi động server

```bash
php artisan serve
```

Mở trình duyệt:

```
http://127.0.0.1:8000
```

---

## Các Route

| Method | URL | Route Name | Chức năng |
|---------|-----|------------|-----------|
| GET | /admin | admin.dashboard | Dashboard |
| GET | /admin/categories | admin.categories.index | Categories |
| GET | /admin/products | admin.products.index | Products |
| GET | /admin/about | admin.about | About |

---

## Dashboard

Dashboard hiển thị dữ liệu thống kê giả theo yêu cầu của Phiếu 06:

- Categories: **3**
- Products: **8**
- Inventory Value: **41,380,000 VND**

---

## Cấu trúc thư mục

```
app/
├── Http/
│   └── Controllers/
│       └── Admin/
│           ├── DashboardController.php
│           ├── CategoryController.php
│           └── ProductController.php

resources/
└── views/
    └── admin/
        ├── dashboard.blade.php
        ├── categories.blade.php
        ├── products.blade.php
        └── about.blade.php

routes/
└── web.php

docs/
└── request-lifecycle.md
```

---

## Tiến độ MiniShop

- [x] Cài đặt Laravel
- [x] Tạo Controller
- [x] Tạo Named Route
- [x] Dashboard
- [x] Blade View
- [ ] Blade Layout (Phiếu 07)
- [ ] Migration (Phiếu 08)
- [ ] Eloquent Model
- [ ] CRUD Categories
- [ ] CRUD Products

---

## Kiểm tra Route

Hiển thị danh sách Route:

```bash
php artisan route:list
```

---

## Ghi chú

- Sử dụng **Named Route** thay vì hardcode URL.
- Không commit thư mục `vendor`.
- Không commit file `.env`.
- Request Lifecycle được mô tả trong:

```
docs/request-lifecycle.md
```

---

## Tác giả

**Họ và tên:** Trần Đức Việt

**Môn học:** CSE485 

**Repository:** https://github.com/tranviet2160/cse485-ms-06
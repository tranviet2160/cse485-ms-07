# CSE485-MS-07 — Blade Layout Admin MiniShop

## Cai dat

* PHP version >= 8.2
* composer install
* cp .env.example .env
* php artisan key:generate
* php artisan serve

## Truy cap

```
http://127.0.0.1:8000/admin
```

## Noi dung da thuc hien

* Xay dung Master Layout bang Blade:

  * `@extends`
  * `@section`
  * `@yield`
  * `@include`
* Tao giao dien Admin MiniShop voi:

  * Sidebar menu
  * Topbar
  * Khu vuc content dung chung
* Cac trang con ke thua layout:

  * Dashboard
  * Categories
  * Products
  * About
* Truyen du lieu tu Controller sang Blade
* Them Flash message demo
* Active menu theo route hien tai

## Cau truc View chinh

```
resources/views/
├── layouts/
│   └── admin.blade.php
├── admin/
│   ├── dashboard.blade.php
│   ├── about.blade.php
│   ├── categories/
│   │   └── index.blade.php
│   └── products/
│       └── index.blade.php
└── partials/
    └── flash.blade.php
```

## Tien do MiniShop

* [x] Route admin
* [x] Blade layout (P07)
* [x] 4 trang Admin ke thua layout
* [x] Active menu + Flash demo
* [ ] Migration 2 bang `categories` / `products` (P08)
* [ ] Seeder + Model Eloquent (P09-P10)
* [ ] CRUD 2 bang (P11-P12)

## Ghi chu

* Phiếu 07 hoàn thành phần giao diện Admin.
* Layout này sẽ được sử dụng tiếp cho Migration và CRUD ở các phiếu sau.

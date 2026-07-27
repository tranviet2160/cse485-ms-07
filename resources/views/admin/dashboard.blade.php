<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h1>MiniShop Admin — Dashboard</h1>

<nav>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
    <a href="{{ route('admin.categories.index') }}">Categories</a> |
    <a href="{{ route('admin.products.index') }}">Products</a> |
    <a href="{{ route('admin.about') }}">About</a>
</nav>

<hr>

<h2>Thống kê MiniShop</h2>

<ul>
    <li>Categories: {{ $stats['categories'] }}</li>
    <li>Products: {{ $stats['products'] }}</li>
    <li>Inventory Value: {{ number_format($stats['inventory_value']) }} VND</li>
</ul>

</body>
</html>
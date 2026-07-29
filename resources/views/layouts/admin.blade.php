<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - MiniShop</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Segoe UI;
        }

        body{
            background:#f5f5f5;
        }

        .wrapper{
            display:flex;
            min-height:100vh;
        }

        .sidebar{
            width:240px;
            background:#1f2937;
            color:white;
            padding:20px;
        }

        .sidebar h2{
            margin-bottom:25px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:10px;
            margin-bottom:5px;
            border-radius:6px;
        }

        .sidebar a.active{
            background:#2563eb;
        }

        .sidebar a:hover{
            background:#374151;
        }

        .content{
            flex:1;
        }

        .topbar{
            background:white;
            padding:20px;
            border-bottom:1px solid #ddd;
            font-size:22px;
            font-weight:bold;
        }

        .main{
            padding:25px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:8px;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th,
        table td{
            border:1px solid #ddd;
            padding:10px;
        }

        .btn{
            display:inline-block;
            padding:8px 15px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:5px;
            margin-bottom:15px;
        }

    </style>

</head>
<body>

<div class="wrapper">

<div class="sidebar">

<h2>MiniShop</h2>

<a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
href="{{ route('admin.dashboard') }}">
Dashboard
</a>

<a class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}"
href="{{ route('admin.categories.index') }}">
Categories
</a>

<a class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}"
href="{{ route('admin.products.index') }}">
Products
</a>

<a class="{{ request()->routeIs('admin.about') ? 'active' : '' }}"
href="{{ route('admin.about') }}">
About
</a>

</div>

<div class="content">

<div class="topbar">

@yield('page_heading')

</div>

<div class="main">

@include('partials.flash')

@yield('content')

</div>

</div>

</div>

</body>
</html>
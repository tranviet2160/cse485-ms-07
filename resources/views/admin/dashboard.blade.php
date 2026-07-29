@extends('layouts.admin')

@section('title','Dashboard')

@section('page_heading','Dashboard')

@section('content')

<div class="card">

<h2>MiniShop Admin Dashboard</h2>

<br>

<p>Categories : {{ $stats['categories'] }}</p>

<p>Products : {{ $stats['products'] }}</p>

<p>Inventory Value : {{ number_format($stats['inventory_value']) }} VND</p>

<br>

<a href="{{ route('admin.flash') }}" class="btn">
Flash Demo
</a>

</div>

@endsection
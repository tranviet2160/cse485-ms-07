@extends('layouts.admin')

@section('title','Products')

@section('page_heading','Products')

@section('content')

<div class="card">

<a href="#" class="btn">
Them moi
</a>

<table>

<tr>

<th>ID</th>

<th>Name</th>

<th>Category</th>

<th>Price</th>

<th>Actions</th>

</tr>

<tr>

<td>1</td>

<td>MacBook</td>

<td>Laptop</td>

<td>25000000</td>

<td>Edit Delete</td>

</tr>

<tr>

<td>2</td>

<td>iPhone</td>

<td>Phone</td>

<td>18000000</td>

<td>Edit Delete</td>

</tr>

<tr>

<td>3</td>

<td>iPad</td>

<td>Tablet</td>

<td>12000000</td>

<td>Edit Delete</td>

</tr>

</table>

<!-- fake data P07; thay Eloquent P09–11 -->

</div>

@endsection
@extends('layouts.admin')

@section('title','Categories')

@section('page_heading','Categories')

@section('content')

<div class="card">

<a href="#" class="btn">
Them moi
</a>

<table>

<tr>

<th>ID</th>

<th>Name</th>

<th>Description</th>

<th>Actions</th>

</tr>

<tr>

<td>1</td>

<td>Laptop</td>

<td>Gaming</td>

<td>Edit Delete</td>

</tr>

<tr>

<td>2</td>

<td>Phone</td>

<td>Android</td>

<td>Edit Delete</td>

</tr>

<tr>

<td>3</td>

<td>Tablet</td>

<td>Apple</td>

<td>Edit Delete</td>

</tr>

</table>

<!-- fake data P07; thay Eloquent P09–11 -->

</div>

@endsection
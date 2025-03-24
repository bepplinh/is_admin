{{-- <h1>đây là trang admin</h1>
<a href={{ route('logout') }}>Đăng xuất</a>
<a href={{ route('products.create') }}>Thêm sản phẩm</a> --}}

@extends('layout.adminDashboard')

@section('content')
<a>{{ Auth::user()->username }}</a>
@endsection
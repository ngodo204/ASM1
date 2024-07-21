<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('lib')}}/bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('lib')}}/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib')}}/font-fontawesome-ae333ffef2.js"></script>
    <title>@yield('title')</title>
</head>
<style>
    .size{
        border: 1px solid rgb(170, 170, 170);
        width: 40px;
    }
    .size:focus{
        background-color: red;
    }
</style>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-sm bg-body-secondary shadow">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item m-2">
                    <a class="nav-link text-dark" href="{{ route('clothes.index') }}">
                        <h5><b>Trang chủ</b></h5>
                    </a>
                </li>
                
            </ul>
            <ul class="navbar-nav">
                @foreach ($categories as $category)
                <li class="nav-item m-2">
                    <a class="nav-link text-dark" href="{{ route('category.clothes', $category->id) }}">
                        <h5><b>{{ $category->name }}</b></h5>
                    </a>
                </li>
                @endforeach
            </ul>
            <ul class="navbar-nav me">
                <li class="nav-item">
                    <div class="d-flex ">
                        <input class="rounded" type="search" style="border: 1px solid rgb(14, 12, 12);">
                        <a class="nav-link text-dark" href="">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="giohang.blade.php" class="btn position-relative">
                        <i class="fa-solid fa-cart-shopping fa-bounce"></i>
                        <span class="badge bg-danger rounded-pill position-absolute"
                            style="top: 0px; right: -15px ;">99</span>
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a class="btn position-relative" href="dangnhap.blade.php"><b>Đăng Nhập</b></a>
                    <a class="btn btn-danger" href="dangky.blade.php"><b>Đăng Ký</b></a>
                </li>
            </ul>
        </div>
        
    </nav>

    <article>
        @yield('content')
    </article>

    <!-- footter -->
<div class="bg-dark d-flex border-top pt-3 pb-3">
    <div class="text-light ms-5 mb-5">
      <h5>CỬA HÀNG</h5>
      <a class="text-light " href="#">TÌM CỬA HÀNG</a><br>
      <a class="text-light " href="#">DỊCH VỤ TRANG ĐIỂM</a>
    </div>
    <div class="text-light ms-5 mb-5" >
      <h5>DỊCH VỤ KHÁCH HÀNG</h5>
      <a class="text-light " href="#">LIÊN HỆ VỚI CHÚNG TÔI</a><br>
      <a class="text-light " href="#">HƯỚNG DẪN PHÂN BIỆT HÀNG GIẢ</a><br>
      <a class="text-light " href="#">ANIMEL TESTING</a>
    </div>
  </div>

  
</body>

</html>
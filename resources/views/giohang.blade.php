@extends('layouts')

@section('content')
    <div class="container mt-4" style="min-height: calc(100vh - 290px); max-width: 1000px;">
        <div class="container mt-3">
            <!-- Khu vực tiêu đề trang -->
            <h3 class="text-center">GIỎ HÀNG</h3>

            <!-- Khu vực button điều hướng -->
            <div class="d-flex justify-content-end">
                <a href="thanhtoan.html" class=" btn btn-success">Thanh toán</a>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>                        
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>
                            <!-- Sử lý ảnh -->
                            <div style="height: 60px; width: 60px;" class="border rounded bg-light overflow-hidden 
                             d-flex justify-content-center align-items-center">
                                <img class="mh-100 mw-100" src="/img/aophong5.jpeg" alt="">
                            </div>
                        </td>
                        <td>Áo Phông</td>
                        <td><input type="number" value="1" min="1" max="10" class="border-1" style="width: 40px;"></td>
                        <td>299,000</td>
                        <td style="width: 1px;" class="text-nowrap">
                            <button class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>

    @endsection
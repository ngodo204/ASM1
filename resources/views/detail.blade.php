@extends('layouts')

@section('content')

    <div class="container mt-4" style="min-height: calc(100vh - 123px);">
        <!-- Product -->
        <div>
    <div class="container">
            <div class="d-flex justify-content-around  overflow-hidden mt-3 mb-3">
                <div>
                    <div class=" border-bottom d-flex align-items-center justify-content-center" style="height: 460px;">
                        <img class="mh-100 mw-100" src="{{ $clothing->thumbnail }}" alt="{{ $clothing->title }}">
                    </div>
                    <div style="width: 400px; margin-top: 20px">
                        <b >{{ $clothing->describe }}</b>
                    </div>
                    
                </div>
                

                <div >
                    <h1 class="h5 border-bottom" style="height: 48px;"><b>{{ $clothing->title }}</b></h1>
                    <div class="d-flex justify-content-between">
                        <!-- Giá niêm yết -->
                    {{-- <div class="text-decoration-line-through text-danger">500,000đ</div> --}}
                    <!-- giá bán -->
                    <div>{{ $clothing->price }}đ</div>
                    </div> 
                    <div class="mt-3">
                        <button class="size">2XL</button>
                        <button class="size">XL</button>
                        <button class="size">L</button>
                        <button class="size">M</button>
                    </div>
                    <div class="mt-3 d-flex justify-content-between"> 
                        <input type="number" value="1" min="1" max="10" class=" border-3 m-2 rounded" style="width: 50px; height: 50px; background-color: rgb(184, 184, 184);">                   
                        <a class="btn btn-dark rounded-0 m-2" style="width: 100px; height: 50px;" href="thanhtoan.html">Mua Ngay</a>
                        <a class="btn btn-dark rounded-0 m-2" style="width: 200px; height: 50px;" href="{{ route('cart.add',$clothing->id) }}">Thêm Vào Giỏ hàng</a>
                    </div>
                    <div class=" mt-5 border-bottom d-flex align-items-center justify-content-center" style="height: 460px;">
                        <img class="mh-100 mw-100" src="https://pos.nvncdn.com/f4d87e-8901/ps/content/20240607_WZVWGPSa.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

</div>

@endsection
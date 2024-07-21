@extends('layouts')

@section('content')
    <div class="container mt-4" style="min-height: calc(100vh - 123px);">
        
        <!-- Product -->
        <div >
            <h1 class="text-center">SẢN PHẨM MỚI</h1>
            <div style="display: flex">
    
    <div class="row m-9"> 
        @foreach($highestPricedClothes as $clothes)
        <div class="col-3 shadow">
            <div class="border-top overflow-hidden mt-3 mb-3">
                <div class=" border-bottom d-flex align-items-center justify-content-center" style="height: 460px;">
                    <img class="mh-100 mw-100" src="{{ $clothes->thumbnail }}" alt="">
                </div>

                <div class="m">
                    <h1 class="h5" style="height: 48px;"><b>{{ $clothes->title }}</b></h1>
                    <div class="d-flex justify-content-around">
                        <!-- Giá niêm yết -->
                    {{-- <div class="text-decoration-line-through text-danger">500,000đ</div> --}}
                    <!-- giá bán -->
                    <div>{{ $clothes->price }} VND</div>
                    </div>
                    <div class="mt-5 d-flex justify-content-between"> 
                        <a class="btn btn-dark w-80 rounded-0" href="{{ url('/detail', ['id' => $clothes->id]) }}">Xem Chi Tiết</a>                   
                        <button class="btn btn-dark w-80 rounded-0"><a class="btn btn-dark" href="{{ url('/thanh', ['id' => $clothes->id]) }}">Mua Ngay</a></button>
                    </div>
                </div>
                
            </div>
            
        </div>
        @endforeach
    </div>
    
            </div>
    
</div>

</div>
@endsection
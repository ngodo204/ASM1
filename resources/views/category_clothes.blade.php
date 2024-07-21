@extends('layouts')

@section('content')
<div class="container mt-4" style="min-height: calc(100vh - 123px);">
    <!-- Product -->
    

    <div class="container d-flex">
        <h3 class="m-3">BỘ LỌC</h3>
        <select class="m-3" name="" id="">
            <option value="0" >size</option>
            <option value="1" >XL</option>
            <option value="2" >L</option>
            <option value="3" >M</option>
            <option value="4" >S</option>
        </select>
        <select class="m-3" name="" id="">
            <option value="0" >Khoảng giá</option>
            <option value="1" >Trên 100,000</option>
            <option value="2">Trên 200,000</option>
        </select>
    </div>
    <div style="display: flex; width: 1440px;">
    
    <div class="row m-4"> 
        @foreach ($clothes as $clothing)
    <div class="col-3 shadow">

        <div class="border-top overflow-hidden mt-3 mb-3">
            <div class=" border-bottom d-flex align-items-center justify-content-center" style="height: 460px;">
                <img class="mh-100 mw-100" src="{{ $clothing->thumbnail }}" alt="{{ $clothing->title }}">
            </div>

            <div class="m">
                <h1 class="h5" style="height: 48px;"><b>{{ $clothing->title }}</b></h1>
                <div class="d-flex justify-content-around">
                    <!-- Giá niêm yết -->
                {{-- <div class="text-decoration-line-through text-danger">500,000đ</div> --}}
                <!-- giá bán -->
                <div>{{ $clothing->price }}đ</div>
                </div>
                <div class="mt-5 d-flex justify-content-between"> 
                    <a class="btn btn-dark w-80 rounded-0" href="{{ route('clothing.show', $clothing->id) }}">Xem Chi Tiết</a>                   
                    <button class="btn btn-dark w-80 rounded-0"><a class="btn btn-dark" href="{{ url('/thanhToan', ['id' => $clothing->id]) }}">Mua Ngay</a></button>
                </div>
            </div>
            
        </div>
    </div>
    @endforeach
</div>

</div>

</div>
@endsection
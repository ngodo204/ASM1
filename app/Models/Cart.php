<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items =[];
    public $total_price =0;
    public $total_quantity =0;

    
    public function __construct(){
        $this->total_price = 5000;
    }

    //thêm mới sản phẩm vào giỏ hàng
    public function add($product){
        $cart_item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'quantity' => 1
        ];
        dd($cart_item);
    }
}

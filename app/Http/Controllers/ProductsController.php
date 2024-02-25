<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public  $products = [
        'Apple'=>['iphone X','iphone 11', 'iphone 12','iphone 13','iphone 14','iphone 15'],
        'Samsung'=>['galaxy s23','galaxy s24','galaxy z flip'],
        'Xiaomi'=>['mi 9t','13','redmi note 9'],
        'Honor'=>['8','9','6 plus']
    ];
    public function index()
    {
        return view('products.index');
    }
    public function showManufacturers()
    {
        return view('products.manufacturers',['products'=>$this->products]);
    }
    public function showProducts($id)
    {
        return view('products.products',['products'=>[$id,$this->products[$id]]]);
    }
}

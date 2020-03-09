<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        //sản phẩm mới
        $productsNew = Product::where('pro_active', 1)
            ->orderByDesc('id')
            ->limit(4)
            ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale')
            ->get();

        //sản phẩm hot
        $productsHot = Product::where([
            'pro_active' => 1,
            'pro_hot' => 1
        ])
            ->orderByDesc('id')
            ->limit(4)
            ->select('id','pro_name','pro_slug','pro_avatar','pro_price','pro_sale')
            ->get();

        $viewData = [
            'productsNew' => $productsNew,
            'productsHot' => $productsHot
        ];
        return view('frontend.pages.home.index', $viewData);
    }
}

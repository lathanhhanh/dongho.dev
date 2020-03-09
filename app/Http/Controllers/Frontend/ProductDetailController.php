<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function getProductDetail(Request $request, $slug)
    {
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);

        if($id)
        {
            $product = Product::findOrFail($id);

            $viewData = [
                'product' => $product
            ];
        }
        return view('frontend.pages.product_detail.index', $viewData);
    }
}

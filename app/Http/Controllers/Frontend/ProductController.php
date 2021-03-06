<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $attributes = $this->syncAttributeGroup();
        $products = Product::where('pro_active', 1)
            ->orderByDesc('id')
            ->get();
        $viewData = [
           'attributes' => $attributes,
            'products' => $products
        ];
        return view('frontend.pages.product.index', $viewData);
    }

    public function syncAttributeGroup()
    {
        $attributes = Attribute::get();
        $groupAttribute = [];
        foreach ($attributes as $key => $attribute)
        {
            $key = $attribute->gettype($attribute->atb_type)['name'];
            $groupAttribute[$key][] = $attribute->toArray();
        }
        return $groupAttribute;
    }
}

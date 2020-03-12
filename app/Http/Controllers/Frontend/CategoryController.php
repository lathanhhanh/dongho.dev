<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(Request $request, $slug)
    {
        $attributes = $this->syncAttributeGroup();
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);

        if($id)
        {
            $products = Product::where([
                'pro_active' => 1,
                'pro_category_id' => $id
            ])->orderByDesc('id')
                ->get();


            $viewData = [
                'products' => $products,
                'attributes' => $attributes
            ];
        }
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestProduct;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category:id,c_name')->paginate(10);
        $viewData = [
          'products' => $products
        ];
        return view('admin.product.index', $viewData);
    }

    public function create()
    {
        $categories = Category::all();
        $attributes = $this->syncAttributeGroup();
        $attributeOld = [];
        return view('admin.product.create', compact('categories', 'attributes', 'attributeOld'));
    }

    public function store(AdminRequestProduct $request)
    {
        $data = $request->except('_token','pro_avatar', 'attribute');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        $data['pro_active'] = 1;

        if ($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if ($image['code'] == 1)
                $data['pro_avatar'] = $image['name'];
        }

        $id = Product::insertGetId($data);

        if($id){
            $this->syncAttributes($request->attribute, $id);
        }

        return redirect()->route('admin.product.index');
    }

    public function active($id){
        $product           = Product::find($id);
        $product->pro_active = ! $product->pro_active;
        $product->save();

        return redirect()->back();
    }

    public function hot($id){
        $product           = Product::find($id);
        $product->pro_hot    = ! $product->pro_hot;
        $product->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $attributes = $this->syncAttributeGroup();

        $attributeOld = \DB::table('products_attributes')
            ->where('pa_product_id', $id)
            ->pluck('pa_attribute_id')
            ->toArray();

        if(!$attributeOld) $attributeOld = [];

        $viewData = [
            'product' => $product,
            'categories' => $categories,
            'attributes' => $attributes,
            'attributeOld' => $attributeOld
        ];

        return view('admin.product.update', $viewData);
    }

    public function update(AdminRequestProduct $request, $id)
    {
        $product = Product::find($id);
        $data = $request->except('_token', 'pro_avatar', 'attribute');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        if ($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if ($image['code'] == 1)
                $data['pro_avatar'] = $image['name'];
        }

        $update  = $product->update($data);
        if($update){
            $this->syncAttributes($request->attribute, $id);
        }

        return redirect()->route('admin.product.index');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if($product) $product->delete();

        return redirect()->back();
    }

    protected  function syncAttributes($attributes, $idProduct){
        if(!empty($attributes)){
            $datas = [];
            \DB::table('products_attributes')->where('pa_product_id',$idProduct)->delete();
            foreach ($attributes as $key => $val)
            {
                $datas = [
                    'pa_product_id' => $idProduct,
                    'pa_attribute_id' => $val
                ];
                if(!empty($datas)){
                    \DB::table('products_attributes')->insert($datas);
                }
            }
        }
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

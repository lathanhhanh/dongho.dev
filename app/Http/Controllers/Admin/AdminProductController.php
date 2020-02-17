<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestProduct;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        $viewData = [
          'products' => $products
        ];
        return view('admin.product.index', $viewData);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(AdminRequestProduct $request)
    {
        $data = $request->except('_token');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        $data['pro_active'] = 1;

        if ($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if ($image['code'] == 1)
                $data['pro_avatar'] = $image['name'];
        }

        $id = Product::insertGetId($data);

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

        $viewData = [
          'product' => $product,
          'categories' => $categories
        ];
        return view('admin.product.update', $viewData);
    }

    public function update(AdminRequestProduct $request, $id)
    {
        $product = Product::find($id);
        $data = $request->except('_token');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();

        if ($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if ($image['code'] == 1)
                $data['pro_avatar'] = $image['name'];
        }

        $product->update($data);

        return redirect()->route('admin.product.index');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if($product) $product->delete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestAttribute;
use App\Models\Attribute;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminAttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::orderByDesc('id')->get();
        $viewData = [
            'attributes' => $attributes
        ];
        return view('admin.attribute.index', $viewData);
    }

    public function create()
    {
        $categories = Category::select('id','c_name')->get();

        return view('admin.attribute.create', compact('categories'));
    }

    public function store(AdminRequestAttribute $request)
    {
        $data               = $request->except('_token');
        $data['atb_slug']     = Str::slug($request->atb_name);
        $data['created_at'] = Carbon::now();
        $id                 = Attribute::insertGetId($data);

        return redirect()->route('admin.attribute.index');
    }
    public function edit($id)
    {
        $attribute = Attribute::find($id);
        return view('admin.attribute.update', compact('attribute'));
    }

    public function update(AdminRequestAttribute $request, $id)
    {
        $attribute = Attribute::find($id);
        $data               = $request->except('_token');
        $data['atb_slug']     = Str::slug($request->atb_name);
        $data['updated_at'] = Carbon::now();

        $attribute->update($data);
        return redirect()->route('admin.attribute.index');
    }
}

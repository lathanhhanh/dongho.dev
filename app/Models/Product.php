<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [''];

    protected $country = [
        '1' => "Việt Nam",
        '2' => "Mỹ",
        '3' => "Anh",
        '4' => "Thuỵ Sỹ",
        '5' => "Trung Quốc",
        '6' => "Pháp"
    ];

    public function getConutry()
    {
        return Arr::get($this->country, $this->pro_country, "[N\A]");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'pro_category_id');
    }
}

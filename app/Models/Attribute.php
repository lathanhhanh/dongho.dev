<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Attribute extends Model
{
    protected $guarded = [''];

    protected  $type = [
        1 => [
            'name' => 'Đôi',
            'class' => 'badge badge-info'
        ],
        2 => [
            'name' => 'Năng lượng',
            'class' => 'badge badge-default'
        ],
        3 => [
            'name' => 'Loại dây',
            'class' => 'badge badge-danger'
        ],
        4 => [
            'name' => 'Loại vỏ',
            'class' => 'badge badge-success'
        ]
    ];

    public function getType()
    {
        return Arr::get($this->type, $this->atb_type, "[N\A]");
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'atb_category_id');
    }
}

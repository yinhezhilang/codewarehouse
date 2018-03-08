<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    /**
     * 允许批量赋值白名单
     */
    protected $fillable = ['title', 'description', 'code', 'catalog'];

    /**
     * 一对多，关联到 Category 模型
     */
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}

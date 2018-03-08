<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * 允许批量赋值白名单
     */
    protected $fillable = ['name'];

    /**
     * 一对多关联到 code 模型
     */
    public function codes()
    {
        return $this->hasMany('App\Model\Code');
    }
}

<?php

namespace App\Http\Controllers\Code;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class CategoryController extends Controller
{
    protected $data = array();
    /**
     * 初始化数据
     */
    public function __construct()
    {
        $this->data['categories'] = Category::all()->toArray();
        $this->data['blade_title'] = '代码仓库';
    }
    /**
     * 创建代码表单页
     */
    public function create()
    {
        return view('categories.create', $this->data);
    }

    /**
     * 创建代码提交页
     */
    public function save(Request $request)
    {

        $category = Category::create(['name' => $request->input('category')]);

        return redirect()->route('code.success', 1);
    }
}

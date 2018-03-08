<?php

namespace App\Http\Controllers\Code;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Code;

class CodeController extends Controller
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
     * 代码仓库首页
     */
    public function index()
    {
        return view('codes.index', $this->data);
    }

    /**
     * 代码仓库展示页
     */
    public function show($category_id, $code_id = null)
    {
        if($category_id) {
            $codes = Category::find($category_id)->codes()->get();
            if (!$code_id) {
                $code = null;
            } else {
                $code = Category::find($category_id)
                    ->codes()
                    ->where('id', $code_id)
                    ->first();
            }

            $this->data['codes'] = $codes;
            $this->data['code'] = $code;
            return view('codes.show', $this->data);
        } else {
            return redirect()->route('code.error', 1);
        }
    }

    /**
     * 创建代码表单页
     */
    public function create()
    {
        return view('codes.create', $this->data);
    }

    /**
     * 创建代码提交页
     */
    public function save(Request $request)
    {
        $category = Category::find($request->input('category'));
        $code_data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'code' => $request->input('code'),
            'catalog' => $request->input('catalog'),
        ];
        $code = $category->codes()->create($code_data);

        return redirect()->route('code.success', 1);
    }

    /**
     * 修改输入
     */
    public function modify($code_id)
    {
        $this->data['code'] = Code::find($code_id);
        return view('codes.modify', $this->data);
    }

    /**
     * 修改提交
     */
    public function update(Request $request, $code_id)
    {
        $code_id = (int) $code_id;
        $updated = [
            'catalog' => $request->input('catalog'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'code' => $request->input('code'),
        ];
        Code::find($code_id)->update($updated);

        return redirect()->route('code.success', 2);
    }
}

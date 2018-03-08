<?php

namespace App\Http\Controllers\Code;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class ResultController extends Controller
{
    protected $data = array();
    protected $success = [
        1 => '创建成功！',
        2 => '修改成功！',
    ];
    protected $error = [
        1 => '参数错误。',
    ];

    /**
     * 初始化数据
     */
    public function __construct()
    {
        $this->data['categories'] = Category::all()->toArray();
        $this->data['blade_title'] = '代码仓库';
    }

    /**
     * 操作成功
     */
    public function success($msg_id)
    {
        $this->data['message'] = $this->success[$msg_id];
        return view('success', $this->data);
    }

    /**
     * 操作失败
     */
    public function error($msg_id)
    {
        $this->data['message'] = $this->error[$msg_id];
        return view('error', $this->data);
    }
}

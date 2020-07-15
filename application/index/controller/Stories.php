<?php

namespace app\index\controller;

use app\admin\model\Store as StoreModel;

/**
 * 前台成功案例控制器
 * @package app\index\controller
 */
class Stories extends Home
{
    //实体店
    public function index(){
        $data = StoreModel::where(['status'=>1])
            ->field(['id','title','desc','img'])
            ->order(['id','sort'])
            ->paginate(6);
        $render = $data->render();
        return view('',[
            'data'      => $data,
            'render'    => $render,
        ]);
    }
}

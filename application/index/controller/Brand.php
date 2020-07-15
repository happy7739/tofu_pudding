<?php

namespace app\index\controller;

use app\admin\model\News as NewsModel;


/**
 * 前台公司文化控制器
 * @package app\index\controller
 */
class Brand extends Home
{
    //品牌简介
    public function index(){
        return view();
    }
    //品牌文化
    public function culture(){
        return view();
    }
    //品牌风采
    public function style(){
        return view();
    }

}

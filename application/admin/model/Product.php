<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\admin\model;

use think\Model;

/**
 * 产品中心模型
 * @package app\admin\model
 */
class Product extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $name = 'home_product';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    //关联分类
    public function sort()
    {
        return $this->belongsTo('ProductSort','pid','id');
    }
}

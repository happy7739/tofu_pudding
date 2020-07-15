<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Validate;

/**
 * 导航栏验证器
 * @package app\admin\validate
 * @author 蔡伟明 <314013107@qq.com>
 */
class Navigation extends Validate
{
    //定义验证规则
    protected $rule = [
        'pid|所属节点'    => 'require',
        'title|节点标题'  => 'require',
        'alt|页眉标题'    => 'require',
    ];

    //定义验证提示
    protected $message = [
        'pid.require'       => '请选择所属节点',
        'title.require'     => '节点标题不能为空',
        'alt.require'       => '页眉标题不能为空',
    ];
}

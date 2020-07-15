<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\admin\controller;

use app\common\builder\ZBuilder;
use app\admin\model\PageImg as PageImgModel;
use app\admin\model\Navigation as NavigationModel;
use app\admin\model\Attachment as AttachmentModel;

/**
 * PageImg图控制器
 * @package app\admin\controller
 */
class Pageimg extends Admin
{
    /**
     * 相册列表页
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 数据列表
        $data_list = PageImgModel::order('sort')->paginate();
        foreach ($data_list as $key => &$value) {
            $bg = AttachmentModel::where(['id'=>$value['img']])->field('path')->find();
            $value['type'] = '<div class="js-gallery"><img class="image" title="点击查看大图" data-original="'. PUBLIC_PATH . $bg['path'].'" src="'. PUBLIC_PATH . $bg['path'].'"></div>';
        }

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setTableName('home_page_img')
            ->addColumns([ // 批量添加数据列
                ['id', 'ID'],
                ['type', '图片'],
                ['title', '描述' ,'text.edit'],
                ['sort', '排序', 'text.edit'],
                ['status', '状态', 'switch'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('add,enable,disable,delete') // 批量添加顶部按钮
            ->addRightButtons('edit,delete') // 批量添加右侧按钮
            ->addValidate('Common.title_sort')
            ->setRowList($data_list) // 设置表格数据
            ->fetch(); // 渲染模板
    }

    /**
     * 新增
     * @return mixed
     */
    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'PageImg');
            // 验证失败 输出错误信息
            if(true !== $result) $this->error($result);
            $data['pid'] = implode(',', $data['pid']);
            // 添加数据
            if ($role = PageImgModel::create($data)) {
                // 记录行为
                action_log('PageImg_add', 'admin_PageImg', $role['id'], UID, "添加图片");
                $this->success('新增成功', url('index'));
            } else {
                $this->error('新增失败');
            }
        }
        //导航栏数据
        $nav = NavigationModel::where(['pid'=>0])
            ->field(['id','pid','title'])
            ->order('sort')
            ->select();
        $arr = [];
        foreach ($nav as $key => $val) {
            $arr[$val['id']] = $val['title'];
            $temp = NavigationModel::where(['pid'=>$val['id']])
                ->field(['id','pid','title'])
                ->order('sort')
                ->select();
            foreach ($temp as $k => $v) {
                $arr[$v['id']] = $v['title'];
            }
        }
        // 使用ZBuilder快速创建表单
        return ZBuilder::make('form')
            ->setPageTitle('新增') // 设置页面标题
            ->addFormItems([ // 批量添加表单项
                ['image', 'img', '图片'],
                ['Checkbox', 'pid', '选择所属分页', '', $arr],
                ['text', 'title', '提示文本'],
                ['text', 'alt', '替代文本'],
                ['text', 'sort', '排序', '', 100],
                ['radio', 'status', '状态', '', ['禁用', '启用'], 1]
            ])
            ->fetch();
    }

    /**
     * 编辑
     * @param null $id
     * @return mixed
     */
    public function edit($id = null)
    {
        if ($id === null) $this->error('缺少参数');

        // 保存数据
        if ($this->request->isPost()) {
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'PageImg');
            // 验证失败 输出错误信息
            if(true !== $result) $this->error($result);
            $data['pid'] = implode(',', $data['pid']);
            if (PageImgModel::update($data)) {
                // 记录行为
                action_log('PageImg_edit', 'admin_PageImg', $id, UID, "编辑图片");
                $this->success('编辑成功', url('index'));
            } else {
                $this->error('编辑失败');
            }
        }

        // 获取数据
        $info = PageImgModel::where('id', $id)->find();
        //导航栏数据
        //导航栏数据
        $nav = NavigationModel::where(['pid'=>0])
            ->field(['id','pid','title'])
            ->order('sort')
            ->select();
        $arr = [];
        foreach ($nav as $key => $val) {
            $arr[$val['id']] = $val['title'];
            $temp = NavigationModel::where(['pid'=>$val['id']])
                ->field(['id','pid','title'])
                ->order('sort')
                ->select();
            foreach ($temp as $k => $v) {
                $arr[$v['id']] = $v['title'];
            }
        }
        // 使用ZBuilder快速创建表单
        return ZBuilder::make('form')
            ->setPageTitle('编辑') // 设置页面标题
            ->addFormItems([ // 批量添加表单项
                ['hidden', 'id'],
                ['image', 'img', '图片'],
                ['Checkbox', 'pid', '选择所属分页', '', $arr],
                ['text', 'title', '提示文本'],
                ['text', 'alt', '替代文本'],
                ['text', 'sort', '排序'],
                ['radio', 'status', '状态', '', ['禁用', '启用']]
            ])
            ->setFormData($info) // 设置表单数据
            ->fetch();
    }

    /**
     * 删除角色
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function delete($record = [])
    {
        return $this->setStatus('delete');
    }

    /**
     * 启用
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function enable($record = [])
    {
        return $this->setStatus('enable');
    }

    /**
     * 禁用
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function disable($record = [])
    {
        return $this->setStatus('disable');
    }

    /**
     * 设置状态：删除、禁用、启用
     * @param string $type 类型：delete/enable/disable
     * @param array $record
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function setStatus($type = '', $record = [])
    {
        $ids = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $ids = (array)$ids;

        foreach ($ids as $id) {
            switch ($type) {
                case 'enable':
                    if (false === PageImgModel::where('id', $id)->setField('status', 1)) {
                        $this->error('启用失败，ID：'.$id);
                    }
                    break;
                case 'disable':
                    if (false === PageImgModel::where('id', $id)->setField('status', 0)) {
                        $this->error('禁用失败，ID：'.$id);
                    }
                    break;
                case 'delete':
                    if (false === PageImgModel::where('id', $id)->delete()) {
                        $this->error('删除失败，ID：'.$id);
                    }
                    break;
                default:
                    $this->error('非法操作');
            }

            action_log('PageImg_'.$type, 'admin_PageImg', $id, UID);
        }

        $this->success('操作成功');
    }
}

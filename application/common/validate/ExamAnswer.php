<?php
// +----------------------------------------------------------------
// | LeisoonCMF V5.0
// +----------------------------------------------------------------
// | Copyright (c) 2016 http://www.leisoon.com All rights reserved.
// +----------------------------------------------------------------
// | Author: websky <web88@qq.com>
// +----------------------------------------------------------------

namespace app\common\validate;

/**
 * 在线考试，考试题库，答案选项
 */
class ExamAnswer extends Base{

    protected $rule = array(
        'name'   => 'require',
        'title'   => 'require',
    );

    protected $message = array(
        'name.require'   => '名称不能为空',
        'title.require'   => '标题不能为空',
    );

    protected $scene = array(
        'add'   => 'title',
        'edit'   => 'title'
    );
}
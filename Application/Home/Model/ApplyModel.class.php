<?php
namespace Home\Model;

use Think\Model;
class ApplyModel extends Model {
    // 自动验证设置
    protected $_validate = array(
        array('name', 'require', '姓名必须存在！', 1),//1为必须验证
        array('name', '', '您已报名', 0, 'unique', 1),
        array('college', 'require', '请输入您的学院', 1),
        array('number', 'number', '学号必须为数字'),
        array('number', 8, '学号长度有误', 1, 'length'),
        array('tel', 'number', '手机号必须为数字', 1, ),
        array('tel', 11, '手机号格式错误', 1, 'length'),
    );
    protected $insertFields = array(
        'name',
        'sex',
        'college',
        'number',
        'tel',
        'intro',
        'department',
        'time',
        'ip'
    );
}
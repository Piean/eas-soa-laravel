<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/27
 * Time: 15:41
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class TeacherInfoModel extends Model {
    protected $table = 'teacherinfo';  //指定该Model对应数据库的表
//    protected $primaryKey = 'userid';
    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $teacherid;     //教师ID 32UUID
    private $code;          //教工号
    private $name;          //姓名
    private $sex;           //性别
    private $birthday;      //生日
    private $protitle;      //职位
    private $position;      //职称
    private $mobile;        //手机号码
}
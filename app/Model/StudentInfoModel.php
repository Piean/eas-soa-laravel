<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/27
 * Time: 15:39
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentInfoModel extends Model {
    protected $table = 'studentinfo';  //指定该Model对应数据库的表
//    protected $primaryKey = 'userid';
    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $studentid;             //学生ID
    private $code;                  //学号
    private $name;                  //姓名
    private $sex;                   //性别
    private $nation;                //民族
    private $birthday;              //生日
    private $address;               //家庭地址
    private $picture;               //照片URL
    private $nativeplace;           //籍贯
    private $origin;                //生源地
    private $politicalstatus;       //政治面貌
    private $enterdate;             //入学日期
    private $major;                 //主修专业
    private $schoollength;          //学制
    private $learnmode;             //学习形式
    private $trainmode;             //培养方式
    private $mobile;                //手机号码
}
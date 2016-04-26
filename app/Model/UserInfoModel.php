<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/26
 * Time: 11:49
 */
class UserInfoModel extends Model {
    protected $table = 'userinfo';  //指定该Model对应数据库的表
//    protected $primaryKey = 'userid';
    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段
}
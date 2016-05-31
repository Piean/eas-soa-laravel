<?php

/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/26
 * Time: 11:49
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserInfoModel extends Model {
    protected $table = 'userinfo';  //指定该Model对应数据库的表

    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $userid;
    private $username;
    private $userpass;
    private $level;

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUserpass()
    {
        return $this->userpass;
    }

    /**
     * @param mixed $userpass
     */
    public function setUserpass($userpass)
    {
        $this->userpass = $userpass;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

}
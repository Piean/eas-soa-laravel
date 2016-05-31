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

    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $teacherid;     //教师ID 32UUID
    private $code;          //教工号
    private $name;          //姓名
    private $sex;           //性别
    private $birthday;      //生日
    private $idcard;        //身份证号
    private $protitle;      //职位
    private $position;      //职称
    private $mobile;        //手机号码

    /**
     * @return mixed
     */
    public function getTeacherid()
    {
        return $this->teacherid;
    }

    /**
     * @param mixed $teacherid
     */
    public function setTeacherid($teacherid)
    {
        $this->teacherid = $teacherid;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getIdcard()
    {
        return $this->idcard;
    }

    /**
     * @param mixed $idcard
     */
    public function setIdcard($idcard)
    {
        $this->idcard = $idcard;
    }

    /**
     * @return mixed
     */
    public function getProtitle()
    {
        return $this->protitle;
    }

    /**
     * @param mixed $protitle
     */
    public function setProtitle($protitle)
    {
        $this->protitle = $protitle;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

}
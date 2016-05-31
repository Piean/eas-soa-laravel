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
    
    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $studentid;             //学生ID
    private $code;                  //学号
    private $name;                  //姓名
    private $sex;                   //性别
    private $nation;                //民族
    private $birthday;              //生日
    private $idcard;                //身份证号
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

    /**
     * @return mixed
     */
    public function getStudentid()
    {
        return $this->studentid;
    }

    /**
     * @param mixed $studentid
     */
    public function setStudentid($studentid)
    {
        $this->studentid = $studentid;
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
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * @param mixed $nation
     */
    public function setNation($nation)
    {
        $this->nation = $nation;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getNativeplace()
    {
        return $this->nativeplace;
    }

    /**
     * @param mixed $nativeplace
     */
    public function setNativeplace($nativeplace)
    {
        $this->nativeplace = $nativeplace;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getPoliticalstatus()
    {
        return $this->politicalstatus;
    }

    /**
     * @param mixed $politicalstatus
     */
    public function setPoliticalstatus($politicalstatus)
    {
        $this->politicalstatus = $politicalstatus;
    }

    /**
     * @return mixed
     */
    public function getEnterdate()
    {
        return $this->enterdate;
    }

    /**
     * @param mixed $enterdate
     */
    public function setEnterdate($enterdate)
    {
        $this->enterdate = $enterdate;
    }

    /**
     * @return mixed
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * @param mixed $major
     */
    public function setMajor($major)
    {
        $this->major = $major;
    }

    /**
     * @return mixed
     */
    public function getSchoollength()
    {
        return $this->schoollength;
    }

    /**
     * @param mixed $schoollength
     */
    public function setSchoollength($schoollength)
    {
        $this->schoollength = $schoollength;
    }

    /**
     * @return mixed
     */
    public function getLearnmode()
    {
        return $this->learnmode;
    }

    /**
     * @param mixed $learnmode
     */
    public function setLearnmode($learnmode)
    {
        $this->learnmode = $learnmode;
    }

    /**
     * @return mixed
     */
    public function getTrainmode()
    {
        return $this->trainmode;
    }

    /**
     * @param mixed $trainmode
     */
    public function setTrainmode($trainmode)
    {
        $this->trainmode = $trainmode;
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
<?php

/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/26
 * Time: 11:49
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AssessResultModel extends Model {
    protected $table = 'assessresult';  //指定该Model对应数据库的表

    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $assessresultid;    //uuid
    private $courselectid;      //课程选择id
    private $assessinfoid;      //评教信息id
    private $select1;           //选项1
    private $select2;           //选项2
    private $select3;           //选项3
    private $select4;           //选项4
    private $select5;           //选项5
    private $select6;           //选项6
    private $select7;           //选项7
    private $select8;           //选项8
    private $select9;           //选项9
    private $select10;          //选项10
    private $suggest;           //建议内容

    /**
     * @return mixed
     */
    public function getAssessresultid()
    {
        return $this->assessresultid;
    }

    /**
     * @param mixed $assessresultid
     */
    public function setAssessresultid($assessresultid)
    {
        $this->assessresultid = $assessresultid;
    }

    /**
     * @return mixed
     */
    public function getCourselectid()
    {
        return $this->courselectid;
    }

    /**
     * @param mixed $courselectid
     */
    public function setCourselectid($courselectid)
    {
        $this->courselectid = $courselectid;
    }

    /**
     * @return mixed
     */
    public function getAssessinfoid()
    {
        return $this->assessinfoid;
    }

    /**
     * @param mixed $assessinfoid
     */
    public function setAssessinfoid($assessinfoid)
    {
        $this->assessinfoid = $assessinfoid;
    }

    /**
     * @return mixed
     */
    public function getSelect1()
    {
        return $this->select1;
    }

    /**
     * @param mixed $select1
     */
    public function setSelect1($select1)
    {
        $this->select1 = $select1;
    }

    /**
     * @return mixed
     */
    public function getSelect2()
    {
        return $this->select2;
    }

    /**
     * @param mixed $select2
     */
    public function setSelect2($select2)
    {
        $this->select2 = $select2;
    }

    /**
     * @return mixed
     */
    public function getSelect3()
    {
        return $this->select3;
    }

    /**
     * @param mixed $select3
     */
    public function setSelect3($select3)
    {
        $this->select3 = $select3;
    }

    /**
     * @return mixed
     */
    public function getSelect4()
    {
        return $this->select4;
    }

    /**
     * @param mixed $select4
     */
    public function setSelect4($select4)
    {
        $this->select4 = $select4;
    }

    /**
     * @return mixed
     */
    public function getSelect5()
    {
        return $this->select5;
    }

    /**
     * @param mixed $select5
     */
    public function setSelect5($select5)
    {
        $this->select5 = $select5;
    }

    /**
     * @return mixed
     */
    public function getSelect6()
    {
        return $this->select6;
    }

    /**
     * @param mixed $select6
     */
    public function setSelect6($select6)
    {
        $this->select6 = $select6;
    }

    /**
     * @return mixed
     */
    public function getSelect7()
    {
        return $this->select7;
    }

    /**
     * @param mixed $select7
     */
    public function setSelect7($select7)
    {
        $this->select7 = $select7;
    }

    /**
     * @return mixed
     */
    public function getSelect8()
    {
        return $this->select8;
    }

    /**
     * @param mixed $select8
     */
    public function setSelect8($select8)
    {
        $this->select8 = $select8;
    }

    /**
     * @return mixed
     */
    public function getSelect9()
    {
        return $this->select9;
    }

    /**
     * @param mixed $select9
     */
    public function setSelect9($select9)
    {
        $this->select9 = $select9;
    }

    /**
     * @return mixed
     */
    public function getSelect10()
    {
        return $this->select10;
    }

    /**
     * @param mixed $select10
     */
    public function setSelect10($select10)
    {
        $this->select10 = $select10;
    }

    /**
     * @return mixed
     */
    public function getSuggest()
    {
        return $this->suggest;
    }

    /**
     * @param mixed $suggest
     */
    public function setSuggest($suggest)
    {
        $this->suggest = $suggest;
    }

}
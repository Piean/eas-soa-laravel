<?php

/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/26
 * Time: 11:49
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CurriculumModel extends Model {
    protected $table = 'curriculum';  //指定该Model对应数据库的表

    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $curriculumid;      //uuid
    private $courseid;          //课程id
    private $teacherid;         //教师id
    private $classid;           //教室id
    private $limitnumber;       //限选人数
    private $selectnum;         //已选人数
    private $startweek;         //上课起始周
    private $endweek;           //上课结束周
    private $week;              //上课星期
    private $starttime;         //开始时间
    private $endtime;           //结束时间
    private $semester;          //学期
    private $selectnature;      //选课性质

    /**
     * @return mixed
     */
    public function getCurriculumid()
    {
        return $this->curriculumid;
    }

    /**
     * @param mixed $curriculumid
     */
    public function setCurriculumid($curriculumid)
    {
        $this->curriculumid = $curriculumid;
    }

    /**
     * @return mixed
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * @param mixed $courseid
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;
    }

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
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * @param mixed $classid
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;
    }

    /**
     * @return mixed
     */
    public function getLimitnumber()
    {
        return $this->limitnumber;
    }

    /**
     * @param mixed $limitnumber
     */
    public function setLimitnumber($limitnumber)
    {
        $this->limitnumber = $limitnumber;
    }

    /**
     * @return mixed
     */
    public function getSelectnum()
    {
        return $this->selectnum;
    }

    /**
     * @param mixed $selectnum
     */
    public function setSelectnum($selectnum)
    {
        $this->selectnum = $selectnum;
    }

    /**
     * @return mixed
     */
    public function getStartweek()
    {
        return $this->startweek;
    }

    /**
     * @param mixed $startweek
     */
    public function setStartweek($startweek)
    {
        $this->startweek = $startweek;
    }

    /**
     * @return mixed
     */
    public function getEndweek()
    {
        return $this->endweek;
    }

    /**
     * @param mixed $endweek
     */
    public function setEndweek($endweek)
    {
        $this->endweek = $endweek;
    }

    /**
     * @return mixed
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * @param mixed $week
     */
    public function setWeek($week)
    {
        $this->week = $week;
    }

    /**
     * @return mixed
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * @param mixed $starttime
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
    }

    /**
     * @return mixed
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * @param mixed $endtime
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;
    }

    /**
     * @return mixed
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * @param mixed $semester
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    /**
     * @return mixed
     */
    public function getSelectnature()
    {
        return $this->selectnature;
    }

    /**
     * @param mixed $selectnature
     */
    public function setSelectnature($selectnature)
    {
        $this->selectnature = $selectnature;
    }

}
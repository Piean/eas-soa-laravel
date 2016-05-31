<?php

/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/26
 * Time: 11:49
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ScoreSelectModel extends Model {
    protected $table = 'scoreinfo';  //指定该Model对应数据库的表
    
    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $scoreid;       //uuid
    private $studentid;     //学生id
    private $courseid;      //课程id
    private $usualscore;    //平时成绩
    private $examscore;     //考试成绩
    private $finalscore;    //综合成绩

    /**
     * @return mixed
     */
    public function getScoreid()
    {
        return $this->scoreid;
    }

    /**
     * @param mixed $scoreid
     */
    public function setScoreid($scoreid)
    {
        $this->scoreid = $scoreid;
    }

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
    public function getUsualscore()
    {
        return $this->usualscore;
    }

    /**
     * @param mixed $usualscore
     */
    public function setUsualscore($usualscore)
    {
        $this->usualscore = $usualscore;
    }

    /**
     * @return mixed
     */
    public function getExamscore()
    {
        return $this->examscore;
    }

    /**
     * @param mixed $examscore
     */
    public function setExamscore($examscore)
    {
        $this->examscore = $examscore;
    }

    /**
     * @return mixed
     */
    public function getFinalscore()
    {
        return $this->finalscore;
    }

    /**
     * @param mixed $finalscore
     */
    public function setFinalscore($finalscore)
    {
        $this->finalscore = $finalscore;
    }

}
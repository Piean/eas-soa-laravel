<?php

/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/26
 * Time: 11:49
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseSelectModel extends Model {
    protected $table = 'courseselect';  //指定该Model对应数据库的表

    public $timestamps = false;  //设置表不需要 updated_at 和 created_at 字段

    private $courseselectid;
    private $studentid;
    private $curriculumid;

    /**
     * @return mixed
     */
    public function getCourseselectid()
    {
        return $this->courseselectid;
    }

    /**
     * @param mixed $courseselectid
     */
    public function setCourseselectid($courseselectid)
    {
        $this->courseselectid = $courseselectid;
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


}
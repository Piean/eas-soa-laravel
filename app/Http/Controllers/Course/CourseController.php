<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/25
 * Time: 17:17
 */

namespace App\Http\Controllers\Course;

use App\Model\CourseSelectModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Utils\UuidUtil;
use App\Utils\StringUtil;

class CourseController extends Controller {

    public function getSchedule(Request $request) {
        $result = array(
            'status' => false,
            'message' => '',
        );

        $studentId = $request->input('studentId');
        $curriculumId = $request->input('curriculumId');

        if (!StringUtil::isNotEmpty($studentId)) {
            $result['message'] = '用户ID为空';
        }else if (!StringUtil::isNotEmpty($curriculumId)) {
            $result['message'] = '没有选择课程';
        }else {
            $course = new CourseSelectModel();
            $course -> setCourseselectid(UuidUtil::getUUID());
            $course -> setStudentid($studentId);
            $course -> setCurriculumid($curriculumId);
            $course -> save();

            if ($course >= 1) {
                $result['status'] = true;
                $result['message'] = '选课成功';
            }else {
                $result['message'] = '选课失败';
            }
        }

        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }

}
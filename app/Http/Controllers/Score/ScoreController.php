<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/25
 * Time: 17:17
 */

namespace App\Http\Controllers\Score;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Utils\StringUtil;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller {
    
    public function queryScoreInfoUserId(Request $request) {
        $result = array(
            'status' => false,
            'message' => '',
            'result' => (object)null
        );

        $userId = $request->input('userId');
        $term = $request->input('term');
        $scoreType = $request->input('scoreType');

        if (StringUtil::isNotEmpty($userId)) {
            if ($scoreType == 1) {
                $teacher = DB::table('scoreinfo')
                    ->join('courseselect', 'courseselect.studentid', '=', $userId)
                    ->join('curriculum','curriculum.semester', '=', $term, function($join) {
                        $join->on('curriculum.curriculumid', '=', 'courseselect.curriculumid');
                    })
                    ->join('courseinfo', 'courseinfo.courseid', '=', 'curriculum.courseidid')
                    ->select('courseinfo.name', 'scoreinfo.usualscore', 'scoreinfo.examscore', 'scoreinfo.finalscore')
                    ->get();
            }elseif ($scoreType == 2) {
                $teacher = DB::table('scoreinfo')
                    ->join('courseselect', 'courseselect.studentid', '=', $userId)
                    ->join('curriculum','curriculum.semester', '=', $term, function($join) {
                        $join->on('curriculum.curriculumid', '=', 'courseselect.curriculumid');
                    })
                    ->join('courseinfo', 'courseinfo.courseid', '=', 'curriculum.courseidid')
                    ->select('courseinfo.name', 'scoreinfo.finalscore')
                    ->get();
            }else{
                $result['message'] = '请选择正确的查询成绩类型';
            }
            if ($teacher != null) {
                $result['status'] = true;
                $result['message'] = '查询成功';
                $result['result'] = $teacher;
            }else {
                $result['message'] = '查询失败';
            }
        }else {
            $result['message'] = '用户ID为空';
        }

        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }

}
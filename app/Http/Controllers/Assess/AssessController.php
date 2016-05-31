<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/25
 * Time: 17:17
 */

namespace App\Http\Controllers\Assess;

use App\Model\AssessResultModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Utils\UuidUtil;
use App\Utils\StringUtil;
use Illuminate\Support\Facades\DB;

class AssessController extends Controller {

    public function setAssessResult(Request $request) {
        $result = array(
            'status' => false,
            'message' => '',
        );

        $courseselectid = $request->input('courseSelectId');
        $select1 = $request->input('select1');
        $select2 = $request->input('select2');
        $select3 = $request->input('select3');
        $select4 = $request->input('select4');
        $select5 = $request->input('select5');
        $select6 = $request->input('select6');
        $select7 = $request->input('select7');
        $select8 = $request->input('select8');
        $select9 = $request->input('select9');
        $select10 = $request->input('select10');
        $suggest = $request->input('suggest');

        if (!StringUtil::isNotEmpty($courseselectid)) {
            $result['message'] = '课程ID为空';
        }elseif (!StringUtil::isNotEmpty($select1) || !StringUtil::isNotEmpty($select2) || !StringUtil::isNotEmpty($select3) || !StringUtil::isNotEmpty($select4) || !StringUtil::isNotEmpty($select5) || !StringUtil::isNotEmpty($select6) || !StringUtil::isNotEmpty($select7) || !StringUtil::isNotEmpty($select8) || !StringUtil::isNotEmpty($select9) || !StringUtil::isNotEmpty($select10)) {
            $result['message'] = '有问题没有选择';
        }else {
            $assess = new AssessResultModel();
            $assess -> assessresultid = UuidUtil::getUUID();
            $assess -> courseselectid = $courseselectid;
            $assess -> assessinfoid = DB::table('assessinfo') -> first() -> assessinfoid;
            $assess -> select1 = $select1;
            $assess -> select2 = $select2;
            $assess -> select3 = $select3;
            $assess -> select4 = $select4;
            $assess -> select5 = $select5;
            $assess -> select6 = $select6;
            $assess -> select7 = $select7;
            $assess -> select8 = $select8;
            $assess -> select9 = $select9;
            $assess -> select10 = $select10;
            $assess -> suggest = $suggest;
            $assess -> save();

            if ($assess >= 1) {
                $result['status'] = true;
                $result['message'] = '评教成功';
            }else {
                $result['message'] = '评教失败';
            }
        }

        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }

}
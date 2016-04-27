<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/25
 * Time: 17:17
 */

namespace App\Http\Controllers\User;

use App\Http\Response\Result;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Model\UserInfoModel;
use App\Utils\UuidUtil;
use App\Utils\StringUtil;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    public function login(Request $request) {
        $result = array(
            'status' => false,
            'message' => '',
            'result' => (object)null
        );

        $name = $request->input('name');
        $pass = $request->input('pass');

        if (StringUtil::isNotEmpty($name) && StringUtil::isNotEmpty($pass)) {
            $user = UserInfoModel
                ::where('username', '=', $name)
                ->where('userpass', '=', $pass)
                ->first();
            if ($user != null) {
                $result['status'] = true;
                $result['message'] = '登录成功';
                $result['result'] = $user;
            }else {
                $result['message'] = '用户名或密码错误';
            }
        }else {
            $result['message'] = '用户名或密码为空';
        }

        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }

    public function changePass(Request $request) {
        $result = array(
            'status' => false,
            'message' => '',
            'result' => (object)null
        );

        $userId = $request->input('userId');
        $oldPass = $request->input('oldPass');
        $newPass = $request->input('newPass');
        $confirmPass = $request->input('confirmPass');

        if (!StringUtil::isNotEmpty($userId)) {
            $result['message'] = '用户ID为空';
        }else if (!StringUtil::isNotEmpty($oldPass)) {
            $result['message'] = '原密码为空';
        }else if (!StringUtil::isNotEmpty($newPass) || !StringUtil::isNotEmpty($confirmPass)) {
            $result['message'] = '新密码为空';
        }else if ($oldPass != $confirmPass) {
            $result['message'] = '新密码与确认密码不相同';
        }else {
            $userNo = DB::table('userinfo')
                ->where('userid', '=', $userId)->first();
            if ($userNo != null) {
                $passUpdate = DB::table('userinfo')
                    ->where('userid', '=', $userId)
                    ->where('userpass', '=', $oldPass)
                    ->update(['userpass' => $newPass]);
                if ($passUpdate >= 1) {
                    $result['status'] = true;
                    $result['message'] = '密码修改成功';
                }else {
                    $result['message'] = '原密码错误';
                }
            }else {
                $result['message'] = '用户不存在';
            }
        }
        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }

    public function getUUID() {
        echo UuidUtil::getUUID();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/25
 * Time: 17:17
 */

namespace App\Http\Controllers\User;

use App\Model\UserInfoModel;
use App\Utils\UuidUtil;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller {

    public function login(Request $request) {
        $name = $request->input('name');
        $pass = $request->input('pass');
        $user = UserInfoModel
            ::where('username', '=', $name)
            ->where('userpass', '=', $pass)
            ->first();
        return json_encode($user,JSON_UNESCAPED_UNICODE);
    }

    public function getUUID() {
        echo UuidUtil::getUUID();
    }
}
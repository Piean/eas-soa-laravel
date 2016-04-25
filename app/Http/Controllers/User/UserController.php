<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/25
 * Time: 17:17
 */

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    public function login(Request $request) {
        $name = 'admin';
        $pass = 'admin';
        $result = DB::table('userinfo')
            ->where('username', '=', $name)
            ->where('userpass', '=', $pass)
            ->first();
        var_dump($result->userid);
    }
}
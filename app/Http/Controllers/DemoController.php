<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    public function index(Request $request)
    {
//        $a = 1;
//        if ($a) {
//            return 1;
//        }
        Log::info('1');
        $a = DB::table('demo_user')->get();
        dd($a->toArray());

        return 2;
    }

    public function test(Request $request)
    {
        $user = User::find(1);
        $hash = md5($user->email);
        $avatar = "http://www.gravatar.com/avatar/$hash?s=100";
        return $avatar;
    }

    public function getAvatar(Request $request)
    {
        $user = User::find(1);
        $hash = md5($user->email);
        $avatar = "http://www.gravatar.com/avatar/$hash?s=100";
        return $avatar;
    }
}

<?php

namespace App\Http\Controllers;

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
}

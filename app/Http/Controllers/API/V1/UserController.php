<?php

namespace App\Http\Controllers\API\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function eloquentUser(Request $request)
    {
        $items = User::all();
        return $items;
    }

    public function eloquentUserRelation(Request $request)
    {
        $items = User::with('chirp')->get();
        return $items;
    }
    
    public function queryBulderUser(Request $request)
    {
        $items = DB::table('users')->get();
        return $items;
    }
    
    public function queryBulderUserRelation(Request $request)
    {
        $items = DB::table('users')
                    ->join('chirps', 'users.id', '=', 'chirps.user_id')
                    ->select('users.id', 'users.name', 'chirps.user_id', 'chirps.message')
                    ->get();
        return $items;
    }
    
    public function redisUser(Request $request)
    {
        $items = Cache::remember("users", 10 * 60, function () {
            return DB::table('users')->get();
        });
        return $items;
    }
}

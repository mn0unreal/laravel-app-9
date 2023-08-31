<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUsersJob;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){

        $user_ids = User::where('status',0)->pluck('id');
        ActiveUsersJob::dispatch($user_ids)->delay(now()->second(5));

        return 'users status updating...';
    }
}

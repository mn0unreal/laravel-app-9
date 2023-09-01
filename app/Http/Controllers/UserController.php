<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUsersJob;
use App\Jobs\SendMailJob;
use App\Mail\SendMailUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index (){

        $user_ids = User::where('status',0)->pluck('id');
        ActiveUsersJob::dispatch($user_ids)->delay(now()->second(5));

        return 'users status updating...';
    }

    public function sendMail(){

        $data = [
            'huntereyes93@gmail.com', 'huntereyes93@gmail.com', 'huntereyes93@gmail.com'
        ];

        SendMailJob::dispatch($data);

        return 'users status updating...';
    }
}

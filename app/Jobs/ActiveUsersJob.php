<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ActiveUsersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $users_ids;
    public function __construct($users_ids)
    {
        $this->users_ids = $users_ids;
    }

    public function handle()
    {
//        $user_ids = User::where('status',0)->pluck('id');
        $users = $this->users_ids;

        foreach ($users as $user_id) {
            User::where('id',$user_id)->update([
                'status'=>1
            ]);
        }
    }
}

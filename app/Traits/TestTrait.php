<?php

namespace App\Traits;

use App\Models\User;

trait TestTrait
{
    public function getData($model){
        return $model::all();
    }

}

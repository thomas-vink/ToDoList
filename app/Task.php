<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function TaskList(){
        return $this->belongsTo('App\TaskList');

    }


}

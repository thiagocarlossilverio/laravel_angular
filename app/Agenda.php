<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['name_event', 'description', 'date_time_start', 'date_time_end', 'user_id'];

}


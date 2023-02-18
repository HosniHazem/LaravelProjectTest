<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekdays extends Model
{
    use HasFactory;
    protected $table='weekdays';
    public function WeekDayRow()
    {
        return $this->hasMany('App\WeekDayRow');
    }


}

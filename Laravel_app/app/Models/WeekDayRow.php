<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekDayRow extends Model
{
    use HasFactory;
    protected $table='week_day_row';
    public function Weekdays() //*
    {
        return $this->belongsTo(Weekdays::class,'weekdays_id','id');
    }
}

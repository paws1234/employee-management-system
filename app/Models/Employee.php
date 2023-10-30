<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address','password'];


    

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function cashAdvances()
    {
        return $this->hasMany(CashAdvance::class);
    }

    public function overtimes()
    {
        return $this->hasMany(Overtime::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }
}

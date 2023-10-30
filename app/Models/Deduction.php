<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'description', 'amount'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function deductions()
{
    return $this->hasMany(Deduction::class);
}
}

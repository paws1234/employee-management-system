<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    protected $table = 'payslip'; // Set the table name if it's different from the default naming convention

    protected $fillable = [
        'employee_id',
        'pay',
        // Add other columns here as needed
    ];

    // Define relationships with other models if necessary

    // Example of a relationship with the User model (assuming an "employee" relationship exists in the User model)
    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
}

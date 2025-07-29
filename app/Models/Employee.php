<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    // تحديد أسماء الأعمدة المسموح بالـ Mass Assignment ليها
    protected $fillable = ['name', 'salary', 'role'];  // =>it's the safe way to connect with db

    // the second simple way to define the table name
    // protected $table = 'employees';

    public function employeeDetail()
    {
        return $this->belongsTo(EmployeeDetail::class);
    }


}

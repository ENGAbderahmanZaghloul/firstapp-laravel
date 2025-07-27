<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    // تحديد أسماء الأعمدة المسموح بالـ Mass Assignment ليها
    protected $fillable = ['name', 'salary'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_info';
    protected $fillable = ['id','employee_name', 'email','password', 'designation', 'phone_number', 'salary', 'age', 'dob','image'];
}

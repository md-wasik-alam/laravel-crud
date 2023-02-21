<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp_records extends Model
{
    use HasFactory;
    protected $fillable = ["fullname","contact","email","salary","address"];
}

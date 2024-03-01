<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollment';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'batch_id', 'student_id', 'join_date', 'fee'];
    use HasFactory;
}

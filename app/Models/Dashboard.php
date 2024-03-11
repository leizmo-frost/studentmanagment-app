<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table = 'dashboards';
    protected $primaryKey = 'id';
    protected $fillable = ['admin', 'parents', 'students', 'teachers'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password', 'password_confirmation'];
    use HasFactory;
}

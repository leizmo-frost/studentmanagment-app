<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    protected $table = 'welcome';
    protected $primaryKey = 'id';
    protected $fillable = ['logins', 'registrations'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLoginModel extends Model
{
    use HasFactory;
    protected $table="admin_login_models";
    protected $fillable=['email','password'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRegModel extends Model
{
    use HasFactory;
    protected $table="customer_reg_models";
    protected $fillable=['fullname','username','gender','dob','mobilenumber','email','password','status'];
}

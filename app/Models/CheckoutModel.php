<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutModel extends Model
{
    use HasFactory;
    protected $table="checkout_models";
    protected $fillable=['custname','address1','mobileno','custemail','pincode','billno','custid','shippingtype','gst','total','orderdate'];
}

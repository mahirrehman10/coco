<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntryModel extends Model
{
    use HasFactory;
    protected $table="product_entry_models";
    protected $fillable=['category','pnameid','company','flavours','size','description','image','image1','image2','productstatus','price'];

    public function product_entry()
    {
        return $this->belongsTo(ProductModel::class,'pnameid','id');
    }


}

<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['color','status'];
    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
    // public function product_attribute(){
    //     return $this->belongsTo(Product_attributes::class);
    // }
    public function product_attribute()
    {
        return $this->hasMany(Product_attribute::class);
    }
}

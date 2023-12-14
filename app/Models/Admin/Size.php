<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['size','status'];
    protected $casts = [
        // 'quantity'  =>  'integer',
        // 'brand_id'  =>  'integer',
        // 'subcategory_id'  =>  'integer',
        // 'status'    =>  'boolean',
        // 'featured'  =>  'boolean',
        // 'status'=> Status::class,
        // 'size'=> EnumsProductSize::class,
    ];
    // public function product_attribute(){
    //     return $this->belongsTo(Product_attributes::class);
    // }
    public function product_attribute()
    {
        return $this->hasMany(Product_attribute::class);
    }
}

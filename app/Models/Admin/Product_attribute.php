<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_attribute extends Model
{
    use HasFactory;
    protected $table = 'product_attributes';

    /**
     * @var array
     */
    protected $fillable = ['sku','attribute_image','mrp','product_id', 'quantity', 'price','color_id','size_id'];

    protected $casts = [
        'quantity'  =>  'integer',
        'status'=> 'integer',
        // 'status'=> Status::class,
        // 'size'=> ProductSize::class,
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
//     public function attributesValues()
// {
//     return $this->belongsToMany(AttributeValue::class);
// }
}

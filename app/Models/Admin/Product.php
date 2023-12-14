<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'brand_id', 'category_id', 'name', 'slug', 'description','short_description', 'warranty',
        'keywords', 'technical_specification', 'uses', 'specification', 'status',
        'featured','show_in_menu','lead_time','is_promotional','is_discounted','is_trending',
        'tax_id'
    ];
    protected $casts = [
        'quantity'  =>  'integer',
        'brand_id'  =>  'integer',
        'category_id'  =>  'integer',
        'status'    =>  'integer',
        'featured'  =>  'integer',
        'tax_id'    =>  'integer',
        'show_in_menu'  =>  'integer',
        'is_promotional'  =>  'string',
        'is_discounted'  =>  'string',
        'is_trending'  =>  'string',
        'warranty'  =>  'string',
        // 'status'=> TableStatus::class,
        // 'size'=> ProductSize::class,
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this -> belongsTo(Category::class);
    }

    public function product_images()
    {
        return $this->hasMany(product_images::class);
    }
    // public function sizes()
    // {
    //     return $this->belongsTo(Size::class);
    // }
    public function product_attributes()
    {
        return $this->hasMany(Product_attribute::class);
    }
    // public function colors()
    // {
    //     return $this->belongsTo(Color::class);
    // }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories', 'product_id', 'category_id');
    }
}

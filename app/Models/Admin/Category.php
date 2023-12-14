<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Rfc4122\UuidV1;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'show_in_menu', 'parent_id', 'featured', 'category_image'
    ];
    protected $casts = [
        'parent_id' =>  'integer',
        'featured'  =>  'integer',
        'menu'      =>  'integer'
        // 'featured'  =>  'boolean',
        // 'menu'      =>  'boolean'
    ];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    // public function setParentId($value)
    // {
    //     if ($value != 0) {
    //         $this->parent_id['parent_id'] = $value;
            // $this->attributes['slug'] = Str::slug($value);
    //     } else {
    //         $uuid = Uuid::uuid1();
    //         $this->parent_id['parent_id'] = $uuid;
    //     }


    // }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}

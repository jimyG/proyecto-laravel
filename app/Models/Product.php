<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at']; 

    //relacion uno a muchos
    public function sizes(){ 
        return $this->hasMany(Size::class); 
    } 

    //relacion inversa uno a muchos
    public function brand(){ 
        return $this->belongsTo(Brand::class); 
    }

    public function subcategory(){ 
        return $this->belongsTo(Subcategory::class); 
    } 

    //relacion muchos uno a muchos
    public function colors(){ 
        return $this->hasMany(Color::class); 
    }

    //relacion uno a muchos polimofica
    public function images(){ 
        return $this->morphMany(Image::class, "imageable"); 
    }
}

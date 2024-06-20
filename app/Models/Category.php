<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['category'];
    use HasFactory;


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}



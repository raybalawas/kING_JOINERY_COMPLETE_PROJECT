<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'BlogTitle',
        // 'singleBlogImage',
        'AuthorName',
        'Blog',
        'Image',
        'status',
    ];

    // protected $guarded = [

    // ];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

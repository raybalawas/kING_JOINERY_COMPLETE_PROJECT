<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'project_title',
        'project_details',
        'project_image',
        'project_multiple_image', // Adjust this field name to match the migration
    ];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}



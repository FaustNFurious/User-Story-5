<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id'
    ];

    // Define relationships
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Category
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

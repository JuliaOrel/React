<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categories() {
        return $this->belongsToMany(Category::class,
            'pivot_posts_categories','post_id', 'category_id');
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

}

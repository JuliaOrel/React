<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Uuids;
    protected $table = 'posts';
    protected $guarded=false;

    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }
}

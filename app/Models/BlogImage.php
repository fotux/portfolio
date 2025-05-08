<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogImage extends Model
{
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}

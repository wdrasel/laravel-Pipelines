<?php

namespace App;

use App\QueryFilters\Active;
use App\QueryFilters\MaxCount;
use App\QueryFilters\Sort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
        public static function allPosts()
        {
           return $posts = app(Pipeline::class)
                ->send(Post::query())
                ->through([
                    Active::class,
                    Sort::class,
                    MaxCount::class
                ])
                ->thenReturn()
                ->paginate(5);
        }
}

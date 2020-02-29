<?php

namespace App\Http\Controllers;

use App\Post;
use App\QueryFilters\Active;
use App\QueryFilters\MaxCount;
use App\QueryFilters\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {
       //$posts = Post::query();

        $posts = Post::allPosts();

        return view('post.index' , compact('posts'));
    }
}

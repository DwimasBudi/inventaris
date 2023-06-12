<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post){
        $title ='';
        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $author = $author->name;
            $title = 'All Post by '. $author;
        }
        return view('home', [
            'title' => $title,
            'active' => 'post',
            'posts' => $post::latest()->filter(request(['search','author','category']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            'title'=> $post->title,
            'active' => 'post',
            'post'=>$post
        ]);
    }
}

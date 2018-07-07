<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
      $posts = Post::paginate(10);
      return view('layouts.index', compact('posts'));
    }

    // Show About Page
    public function about()
    {
      // Get content of the about page from the model, feed Page::find with page id
      $about = Page::find(1);
     // Return view with the data
      return view ('about')->with('about', $about);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;

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
      return view ('layouts.page')->with('about', $about);
    }

    public function page()
    {
      // Get content of the about page from the model, feed Page::find with page id
      $page = Page::find(1);
     // Return view with the data
      //return view ('layouts.page');
      return view ('layouts.page')->with('page', $page);
    }
}

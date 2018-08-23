<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
  // Pokaż stronę startową
  public function index()
  {
    $posts = Post::paginate(10);
    return view('layouts.index', compact('posts'));
  }

  public function poznajmySie()
  {
    // Pobieram content z Voyager'a. Strona Poznajmy się id = 2
    $page = Page::find(2);
   // Return view with the data
    return view ('layouts.page')->with('page', $page);
  }

  public function dlaczegoWarto()
  {
    // Pobieram content z Voyager'a. Strona Poznajmy się id = 2
    $page = Page::find(3);
   // Return view with the data
    return view ('layouts.page')->with('page', $page);
  }

  public function oferta()
  {
    // Pobieram content z Voyager'a. Strona Poznajmy się id = 2
    $page = Page::find(4);
   // Return view with the data
    return view ('layouts.page')->with('page', $page);
  }
}

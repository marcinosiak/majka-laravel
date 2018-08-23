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

  public function aktualnosci()
  {
    $posts = Post::all()->sortByDesc("created_at");
    return view ('layouts.posts')->with('posts', $posts);
  }

  public function poznajmySie()
  {
    $page = Page::find(2);
    return view ('layouts.page')->with('page', $page);
  }

  public function dlaczegoWarto()
  {
    $page = Page::find(3);
    return view ('layouts.page')->with('page', $page);
  }

  public function oferta()
  {
    $page = Page::find(4);
    return view ('layouts.page')->with('page', $page);
  }

  public function programSzkolyRodzenia()
  {
    $page = Page::find(5);
    return view ('layouts.page')->with('page', $page);
  }

  public function kontakt()
  {
    $page = Page::find(6);
    return view ('layouts.page')->with('page', $page);
  }

}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function news_class(Request $request, $class)
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->where('isNews', true)
            ->where('class', $class)
            ->get();

        return view('pages.news')->with('posts', $posts);
    }

    public function parents_class(Request $request, $class)
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->where('isNews', true)
            ->where('class', $class)
            ->get();

        return view('pages.index')->with('posts', $posts)->with('title', 'parents');
    }

    public function students_class(Request $request, $class)
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->where('isNews', true)
            ->where('class', $class)
            ->get();

        return view('pages.index')->with('posts', $posts)->with('title', 'students');
    }

    public function sort_by_class(Request $request, $class)
    {
        $posts = Post::latest()->where('class', $class)->get();

        return view('pages.index')->with('posts', $posts)->with('class', $class);
    }
}

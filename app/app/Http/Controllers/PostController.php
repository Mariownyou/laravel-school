<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::orderBy('created_at', 'desc')
//            ->get();
        $posts = $this->getPosts();

        return view('test.index')->with('posts', $posts);
    }

    public function news()
    {
        $posts = $this->getPosts(true);

        return view('pages.news')->with('posts', $posts);
    }

    public function parents()
    {
        $posts = Post::where('isParents', true)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.index')->with('posts', $posts)->with('title', 'parents');
    }

    public function class() {
        $posts = Post::latest()->get();

        return view('pages.index')->with('posts', $posts)->with('title', 'class');
    }

    public function students()
    {
        $posts = Post::where('isParents', false)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.index')->with('posts', $posts)->with('title', 'students');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|min:4|max:200',
            'text' => 'required',
            'class' => 'required',
            'category' => 'required',
            'news' => 'required',
            'parents' => 'required'
        ]);

        $post = new Post();
        $this->fillPost($post, $request);
        $post->save();

        if ($post->isNews) {
            return redirect()->route('news');
        }
        if ($post->isParents) {
            return redirect()->route('parents');
        }
        return redirect()->route('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $post->views += 1;
        $post->save();

        return view('pages.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title' => 'required|min:4|max:200',
            'text' => 'required',
            'class' => 'required',
            'category' => 'required',
            'news' => 'required',
            'parents' => 'required'
        ]);

        $post = Post::find($id);
        $this->fillPost($post, $request);
        $post->save();

        if ($post->isNews) {
            return redirect()->route('news');
        }
        if ($post->isParents) {
            return redirect()->route('parents');
        }
        return redirect()->route('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('news');
    }

    // fill post with data
    private function fillPost($post, $request) {
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->isNews = $request->input('news');
        $post->type = $request->input('category');
        $post->class = $request->input('class');
        $post->isParents = $request->input('parents');
    }

    // get ordered Posts
    private function getPosts($news = false) {
        if ($news) {
            $posts = Post::latest()->where('isNews', true)->get()->groupBy(function($item)
            {
                $date = $item->created_at;
                if ($date->isToday()) {
                    return 'Today';
                }
                if ($date == Carbon::yesterday()) {
                    return 'Yesterday';
                }

                return $date->format('d M Y');
            });;

            return $posts;
        }

        $posts = Post::latest()->get()->groupBy(function($item)
        {
            $date = $item->created_at;
            if ($date == Carbon::now()) {
                return 'Today';
            }

            return $date->format('d M Y');
        });

        return $posts;
    }
}

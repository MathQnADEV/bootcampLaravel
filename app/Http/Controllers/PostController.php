<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Cast\Array_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        // ddd($posts);

        $views_data = [
            'posts' => $posts
        ];

        // $views_data = [
        //     'posts' => "ini laravel",
        //     'content' => "ini content laravel"
        // ];

        return view('posts.index', $views_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "create post";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Storage::get('posts.txt');

        $posts = explode("\n", $posts);
        $selected_post = Array();

        foreach($posts as $post){
            $post = explode(",", $post);
            if($post[0] == $id){
                $selected_post = $post;
            }
        }

        $views_data = [
            'post' => $selected_post
        ];
        // ddd($views_data);
        return view('posts.show', $views_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

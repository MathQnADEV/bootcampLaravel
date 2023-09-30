<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $views_data = [
            'posts' => [
                // title = 0                 content = 1
                [
                    'title' => "Mengenal Laravel",
                    'content' => "ini adalah blog pertama kita"
                ],
                [
                    'title' => "Mengenal program",
                    'content' => "ini adalah blog kedua kita"
                ]
            ]
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
        echo "ini posts data: $id";
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

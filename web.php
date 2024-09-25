<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Anis Talib',
        'title' => 'About'
    ]);
}); 

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog', 
        'posts' => [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'author'=> 'Anis Talib', 
                'body' => 'Pahang is a large state in Peninsular Malaysia...'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'author'=> 'Anis Talib', 
                'body' => 'Kuantan 188 was completed on 3 September 2019...'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => "Judul Artikel 1",
            'author'=> 'Anis Talib', 
            'body' => 'Pahang is the largest state in Peninsular Malaysia...'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => "Judul Artikel 2",
            'author'=> 'Anis Talib', 
            'body' => 'Kuantan 188 is the tallest iconic tower...'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] === $slug;
    });


dd($post);
    
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});



<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Rey']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug'=> 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Reynaldi Neo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cum illo adipisci, aliquam esse aliquid ipsam quod laboriosam distinctio voluptate! Iste ad animi itaque eaque id explicabo, esse quidem porro.'
        ],
        [   
            'id'=> '2',
            'slug'=> 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Reynaldi Neo',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid deleniti recusandae quos fugiat error labore at maiores consequatur, earum reiciendis alias sequi ipsum, ad inventore esse minus vel qui! Nulla.'
        ]
    ]]);
}); 

Route::get('/posts/{slug}', function ($slug){
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Reynaldi Neo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cum illo adipisci, aliquam esse aliquid ipsam quod laboriosam distinctio voluptate! Iste ad animi itaque eaque id explicabo, esse quidem porro.'
        ],
        [   
            'id'=> '2',
            'slug'=> 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Reynaldi Neo',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid deleniti recusandae quos fugiat error labore at maiores consequatur, earum reiciendis alias sequi ipsum, ad inventore esse minus vel qui! Nulla.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Post 
{
    public static function all(){
        return [
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
        ];
    }
    public static function find($slug): array
    {
        $findPost = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        
        if(! $findPost){
            abort(404);
        }
        return $findPost;
    } 
}
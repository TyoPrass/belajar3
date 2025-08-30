<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function (){
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog', 'posts' => [
        [   'id' => 1,
            'slug' => 'artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Sigma Guntur',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, iure, animi
            facilis incidunt, corporis
            accusantium quam delectus ab nam autem est possimus alias qui! Odio nisi dolor et voluptas molestias.'
    ],
        [ 
            'id' => 2,
            'slug' => 'artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Liem Kwan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet adipisci nam
            quibusdam at cupiditate ipsa accusamus enim commodi, earum corporis facere molestiae, tempore eaque
            necessitatibus vero id temporibus. Esse, nisi!'
    ],
    ]]);
});

Route::get('/posts/{id}', function($slug){
    $posts = [
        [   'id' => 1,
            'slug' => 'artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Sigma Guntur',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, iure, animi
            facilis incidunt, corporis
            accusantium quam delectus ab nam autem est possimus alias qui! Odio nisi dolor et voluptas molestias.'
    ],
        [ 
            'id' => 2,
            'slug' => 'artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Liem Kwan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet adipisci nam
            quibusdam at cupiditate ipsa accusamus enim commodi, earum corporis facere molestiae, tempore eaque
            necessitatibus vero id temporibus. Esse, nisi!'
    ],
];
    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);

});




Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact']);
});






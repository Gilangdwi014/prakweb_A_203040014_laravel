<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Gilang Dwi",
        "email" => "203040014@mail.unpas.ac.id",
        "image" => "gilang.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Gilang Dwi",
            "body"      => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Est aut atque dignissimos explicabo asperiores distinctio minus facilis id beatae magnam 
            exercitationem illum recusandae laudantium consequatur, dolorem quod qui sunt culpa harum voluptatum 
            quaerat doloremque! Commodi nemo tenetur, quas veritatis qui facilis sapiente quod eaque, ex quisquam fugiat, quam laudantium! 
            Illo impedit, quam doloribus blanditiis at hic deleniti aliquid cum quidem cupiditate, harum sapiente, reiciendis repellendus.
            Numquam perspiciatis nobis assumenda enim sit rerum ab ipsa nemo, dicta distinctio, suscipit accusantium eligendi?"
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Gilang Adira",
            "body"      => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium quam tempora eius, vitae optio ducimus deserunt aliquam sapiente sequi 
            explicabo sed rem vero! Exercitationem, beatae praesentium delectus excepturi facilis a autem veniam odit explicabo numquam suscipit 
            distinctio sit dignissimos. Ab impedit perspiciatis rerum sit, deserunt nam vitae eos praesentium maiores? Maxime perspiciatis minima itaque
            incidunt quis delectus placeat cum quidem libero nobis harum possimus tempora numquam explicabo, ratione non, vel corrupti doloribus commodi
            laboriosam vero culpa dolor a assumenda. Delectus odit harum earum consequatur ipsam! 
            Ab hic quisquam iure et? Optio quas odit a neque veniam dolorem voluptatem fugiat autem."
        ],
    ];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Gilang Dwi",
            "body"      => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Est aut atque dignissimos explicabo asperiores distinctio minus facilis id beatae magnam 
            exercitationem illum recusandae laudantium consequatur, dolorem quod qui sunt culpa harum voluptatum 
            quaerat doloremque! Commodi nemo tenetur, quas veritatis qui facilis sapiente quod eaque, ex quisquam fugiat, quam laudantium! 
            Illo impedit, quam doloribus blanditiis at hic deleniti aliquid cum quidem cupiditate, harum sapiente, reiciendis repellendus.
            Numquam perspiciatis nobis assumenda enim sit rerum ab ipsa nemo, dicta distinctio, suscipit accusantium eligendi?"
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Gilang Adira",
            "body"      => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium quam tempora eius, vitae optio ducimus deserunt aliquam sapiente sequi 
            explicabo sed rem vero! Exercitationem, beatae praesentium delectus excepturi facilis a autem veniam odit explicabo numquam suscipit 
            distinctio sit dignissimos. Ab impedit perspiciatis rerum sit, deserunt nam vitae eos praesentium maiores? Maxime perspiciatis minima itaque
            incidunt quis delectus placeat cum quidem libero nobis harum possimus tempora numquam explicabo, ratione non, vel corrupti doloribus commodi
            laboriosam vero culpa dolor a assumenda. Delectus odit harum earum consequatur ipsam! 
            Ab hic quisquam iure et? Optio quas odit a neque veniam dolorem voluptatem fugiat autem."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
        "name" => "Chandra Arcychan Azfar",
        "email" => "chandraarcychan@gmail.com",
        "image" => "1.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Chandra Arcychan Azfar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolorum necessitatibus cum, quas quod fugiat. Eum, quisquam assumenda quae voluptatem laboriosam placeat fugiat saepe pariatur officiis id in amet aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Salsabila Febrianty Nurul Putri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod quo ut aliquam obcaecati officia illum. Dolores doloremque modi magnam voluptates ullam quasi perspiciatis unde aliquam? Doloribus hic enim fuga deleniti, mollitia eligendi magnam nostrum. Eius quos dolorem nam a exercitationem aspernatur repellat vero asperiores! Mollitia ducimus, aspernatur voluptates ipsa pariatur veniam ipsam quidem eius, aperiam quos aliquid enim, a commodi placeat iste. Error nulla, odit eius quia possimus fugit natus voluptas quasi impedit officia recusandae qui reprehenderit. Vero id exercitationem a iusto. Obcaecati consectetur commodi aut sed assumenda reiciendis unde, doloremque doloribus ducimus laudantium eveniet autem ut dignissimos? Aliquam."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman Single Post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Chandra Arcychan Azfar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolorum necessitatibus cum, quas quod fugiat. Eum, quisquam assumenda quae voluptatem laboriosam placeat fugiat saepe pariatur officiis id in amet aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Salsabila Febrianty Nurul Putri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod quo ut aliquam obcaecati officia illum. Dolores doloremque modi magnam voluptates ullam quasi perspiciatis unde aliquam? Doloribus hic enim fuga deleniti, mollitia eligendi magnam nostrum. Eius quos dolorem nam a exercitationem aspernatur repellat vero asperiores! Mollitia ducimus, aspernatur voluptates ipsa pariatur veniam ipsam quidem eius, aperiam quos aliquid enim, a commodi placeat iste. Error nulla, odit eius quia possimus fugit natus voluptas quasi impedit officia recusandae qui reprehenderit. Vero id exercitationem a iusto. Obcaecati consectetur commodi aut sed assumenda reiciendis unde, doloremque doloribus ducimus laudantium eveniet autem ut dignissimos? Aliquam."
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
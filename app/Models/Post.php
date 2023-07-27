<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M.Tegar Nurul Fuad Rosmali",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolorum necessitatibus cum, quas quod fugiat. Eum, quisquam assumenda quae voluptatem laboriosam placeat fugiat saepe pariatur officiis id in amet aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Akbar Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quod quo ut aliquam obcaecati officia illum. Dolores doloremque modi magnam voluptates ullam quasi perspiciatis unde aliquam? Doloribus hic enim fuga deleniti, mollitia eligendi magnam nostrum. Eius quos dolorem nam a exercitationem aspernatur repellat vero asperiores! Mollitia ducimus, aspernatur voluptates ipsa pariatur veniam ipsam quidem eius, aperiam quos aliquid enim, a commodi placeat iste. Error nulla, odit eius quia possimus fugit natus voluptas quasi impedit officia recusandae qui reprehenderit. Vero id exercitationem a iusto. Obcaecati consectetur commodi aut sed assumenda reiciendis unde, doloremque doloribus ducimus laudantium eveniet autem ut dignissimos? Aliquam."
        ],
  ];

  public static function all() {
    return collect(self::$blog_posts);
  }

  public static function find($slug) {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }
}
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
    return view(
        'about',
        [
            "title" => "About",
            "name" => "Aji Nuansa Sengarie",
            "email" => "ansengarie@gmail.com",
            "image" => "profile-pic.png"
        ]
    );
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aji Nuansa Sengarie",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi commodi expedita unde sit doloribus. Perspiciatis numquam architecto voluptates hic repellendus nulla quasi voluptatum quos, sunt, dolor doloribus inventore ea officiis aliquid dolorum impedit omnis cumque nobis, illo fugit modi. Rerum deserunt eaque eveniet vero, blanditiis aut necessitatibus a, deleniti accusantium sint aspernatur atque explicabo voluptas sequi iusto iure hic! Maiores quo, omnis architecto amet error dignissimos hic impedit laboriosam aliquam fugit ad blanditiis rem odio, quaerat doloribus ipsam tempore deserunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fauzan Nur Salma",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti ea fuga aperiam natus dignissimos, quis expedita laudantium eligendi nisi odit, aspernatur necessitatibus porro, magnam dolorem quidem est consequuntur dolores vitae repellat quod. Deleniti earum amet facere quidem explicabo incidunt dolores dolor quibusdam suscipit architecto similique alias quas vitae iusto veniam quasi enim nisi iste harum unde, iure nostrum ex blanditiis? Repellendus et quae deleniti fugiat libero nulla modi qui esse?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aji Nuansa Sengarie",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi commodi expedita unde sit doloribus. Perspiciatis numquam architecto voluptates hic repellendus nulla quasi voluptatum quos, sunt, dolor doloribus inventore ea officiis aliquid dolorum impedit omnis cumque nobis, illo fugit modi. Rerum deserunt eaque eveniet vero, blanditiis aut necessitatibus a, deleniti accusantium sint aspernatur atque explicabo voluptas sequi iusto iure hic! Maiores quo, omnis architecto amet error dignissimos hic impedit laboriosam aliquam fugit ad blanditiis rem odio, quaerat doloribus ipsam tempore deserunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fauzan Nur Salma",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti ea fuga aperiam natus dignissimos, quis expedita laudantium eligendi nisi odit, aspernatur necessitatibus porro, magnam dolorem quidem est consequuntur dolores vitae repellat quod. Deleniti earum amet facere quidem explicabo incidunt dolores dolor quibusdam suscipit architecto similique alias quas vitae iusto veniam quasi enim nisi iste harum unde, iure nostrum ex blanditiis? Repellendus et quae deleniti fugiat libero nulla modi qui esse?"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

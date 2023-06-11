<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Andi Alfian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam itaque consectetur cum nam ipsum, similique minus ipsam consequuntur placeat, unde impedit eos, dolores rem nihil beatae tenetur repellendus aliquid! Tempore minus, sunt totam numquam vitae voluptatem quasi minima et fuga ex at ipsam ratione fugiat esse! Facilis ipsam, inventore expedita ut quisquam omnis laborum, quod quaerat ipsa unde modi fugit repellat ad quo blanditiis suscipit consectetur accusantium praesentium voluptatem enim ipsum, atque quas! Impedit, maxime non blanditiis eveniet quisquam delectus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Haris Sakurudin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate saepe architecto eveniet quisquam non perspiciatis tempora! Aliquam tempore ab deleniti, illum nisi ratione, eveniet voluptatibus autem deserunt doloribus veritatis? Temporibus eum tempora modi dolorem, earum sapiente sunt, aut, necessitatibus adipisci nobis ipsam nostrum vero. Iste cupiditate porro, earum pariatur, delectus harum maxime sunt, vel odio cum dolores vero officiis cumque fuga dolorem laborum consequuntur praesentium quia? Tempore possimus odit ipsum accusantium officiis cumque cum nesciunt iure exercitationem, ratione repellat inventore. Magni repellendus praesentium quod! Sint, maxime quod fugit ut accusamus quia repellat minima numquam repellendus cumque pariatur ipsa. Quos, nobis!"
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts =  static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

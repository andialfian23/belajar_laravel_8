<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Andi Alfian',
        //     'email' => 'andialfi90@gmail.com',
        //     'password' => bcrypt('18.14.1.0001')
        // ]);
        // User::create([
        //     'name' => 'Haris Sakurudin',
        //     'email' => 'haris2@gmail.com',
        //     'password' => bcrypt('18.14.1.0002')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam. Laborum, quae perferendis non voluptatibus ab deleniti minus quasi illum labore esse, voluptates consequuntur porro quam id in accusantium fuga minima ut ipsam cum mollitia dolorum ratione? Recusandae nihil iusto cum animi quae distinctio dignissimos, natus alias illo corporis corrupti dolore aspernatur? Sapiente voluptas explicabo ipsum pariatur maxime, eaque tempore eius consequatur voluptatibus harum dicta qui aperiam perspiciatis iusto distinctio praesentium possimus deserunt nam est dolore aliquid repudiandae. Fuga, quo? Voluptatem?',
        // ]);
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam. Laborum, quae perferendis non voluptatibus ab deleniti minus quasi illum labore esse, voluptates consequuntur porro quam id in accusantium fuga minima ut ipsam cum mollitia dolorum ratione? Recusandae nihil iusto cum animi quae distinctio dignissimos, natus alias illo corporis corrupti dolore aspernatur? Sapiente voluptas explicabo ipsum pariatur maxime, eaque tempore eius consequatur voluptatibus harum dicta qui aperiam perspiciatis iusto distinctio praesentium possimus deserunt nam est dolore aliquid repudiandae. Fuga, quo? Voluptatem?',
        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam. Laborum, quae perferendis non voluptatibus ab deleniti minus quasi illum labore esse, voluptates consequuntur porro quam id in accusantium fuga minima ut ipsam cum mollitia dolorum ratione? Recusandae nihil iusto cum animi quae distinctio dignissimos, natus alias illo corporis corrupti dolore aspernatur? Sapiente voluptas explicabo ipsum pariatur maxime, eaque tempore eius consequatur voluptatibus harum dicta qui aperiam perspiciatis iusto distinctio praesentium possimus deserunt nam est dolore aliquid repudiandae. Fuga, quo? Voluptatem?',
        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nulla quaerat, sed voluptatem laboriosam assumenda optio enim illum, ipsum dolorem corporis magnam! Unde rerum reprehenderit animi in enim aperiam. Laborum, quae perferendis non voluptatibus ab deleniti minus quasi illum labore esse, voluptates consequuntur porro quam id in accusantium fuga minima ut ipsam cum mollitia dolorum ratione? Recusandae nihil iusto cum animi quae distinctio dignissimos, natus alias illo corporis corrupti dolore aspernatur? Sapiente voluptas explicabo ipsum pariatur maxime, eaque tempore eius consequatur voluptatibus harum dicta qui aperiam perspiciatis iusto distinctio praesentium possimus deserunt nam est dolore aliquid repudiandae. Fuga, quo? Voluptatem?',
        // ]);
    }
}

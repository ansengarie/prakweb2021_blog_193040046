<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Aji Nuansa Sengarie',
            'username' => 'ansengarie',
            'email' => 'ansengarie@gmail.com',
            'password' => bcrypt('sengarie9')
        ]);

        // User::create([
        //     'name' => 'Fauzan Nur Salma',
        //     'email' => 'fauzanns@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos praesentium, reprehenderit dolorum a magni doloremque fugiat vel assumenda animi, dicta consequuntur exercitationem delectus. Debitis molestiae aut magnam accusamus, quisquam, animi nostrum totam perspiciatis amet ullam itaque nisi vel assumenda, natus suscipit nesciunt autem excepturi non vitae quis. Reprehenderit corporis sint minima dolor similique hic officiis, voluptas dolores incidunt rem ipsam voluptates odit quod ut rerum vel, in laborum placeat! Quia, nihil! Hic corporis tempore esse sapiente debitis eum atque sequi aspernatur aperiam, odio consequatur rem saepe, magni soluta ad laborum. Id a atque qui obcaecati nihil adipisci consequatur. Nobis, accusantium?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos praesentium, reprehenderit dolorum a magni doloremque fugiat vel assumenda animi, dicta consequuntur exercitationem delectus. Debitis molestiae aut magnam accusamus, quisquam, animi nostrum totam perspiciatis amet ullam itaque nisi vel assumenda, natus suscipit nesciunt autem excepturi non vitae quis. Reprehenderit corporis sint minima dolor similique hic officiis, voluptas dolores incidunt rem ipsam voluptates odit quod ut rerum vel, in laborum placeat! Quia, nihil! Hic corporis tempore esse sapiente debitis eum atque sequi aspernatur aperiam, odio consequatur rem saepe, magni soluta ad laborum. Id a atque qui obcaecati nihil adipisci consequatur. Nobis, accusantium?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos praesentium, reprehenderit dolorum a magni doloremque fugiat vel assumenda animi, dicta consequuntur exercitationem delectus. Debitis molestiae aut magnam accusamus, quisquam, animi nostrum totam perspiciatis amet ullam itaque nisi vel assumenda, natus suscipit nesciunt autem excepturi non vitae quis. Reprehenderit corporis sint minima dolor similique hic officiis, voluptas dolores incidunt rem ipsam voluptates odit quod ut rerum vel, in laborum placeat! Quia, nihil! Hic corporis tempore esse sapiente debitis eum atque sequi aspernatur aperiam, odio consequatur rem saepe, magni soluta ad laborum. Id a atque qui obcaecati nihil adipisci consequatur. Nobis, accusantium?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos praesentium, reprehenderit dolorum a magni doloremque fugiat vel assumenda animi, dicta consequuntur exercitationem delectus. Debitis molestiae aut magnam accusamus, quisquam, animi nostrum totam perspiciatis amet ullam itaque nisi vel assumenda, natus suscipit nesciunt autem excepturi non vitae quis. Reprehenderit corporis sint minima dolor similique hic officiis, voluptas dolores incidunt rem ipsam voluptates odit quod ut rerum vel, in laborum placeat! Quia, nihil! Hic corporis tempore esse sapiente debitis eum atque sequi aspernatur aperiam, odio consequatur rem saepe, magni soluta ad laborum. Id a atque qui obcaecati nihil adipisci consequatur. Nobis, accusantium?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

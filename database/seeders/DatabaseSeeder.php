<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Moch Falih Fauzan',
        //     'email' => 'falihfauzan2002@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Putri Carolina Yusuf',
        //     'email' => 'putricarolina@gmail.com',
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
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe expedita rem
        //     ducimus optio omnis nostrum quidem atque sint voluptatibus! Aperiam quod veniam
        //     ipsa alias ab nemo tenetur necessitatibus atque asperiores officiis unde
        //     corrupti, molestiae, possimus.reprehenderit vero nesciunt quibusdam aliquam
        //     voluptatem nostrum ducimus quia ad repellendus maxime impedit? Eaque in commodi
        //     soluta quasi eos earum asperiores cupiditate quaerat suscipit. Ratione fugit
        //     aspernatur id accusantium minus enim rem necessitatibus reprehenderit, eaque
        //     numquam.molestias laudantium perferendis totam dolore vero, doloribus aut et
        //     officiis optio? Est magnam hic ab deleniti debitis perspiciatis corporis numquam
        //     sed? Quibusdam nam non, possimus magni eaque et est consequatur quaerat eius
        //     tempora dicta sapiente aperiam pariatur ipsa id! Quisquam, quos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe expedita rem
        //     ducimus optio omnis nostrum quidem atque sint voluptatibus! Aperiam quod veniam
        //     ipsa alias ab nemo tenetur necessitatibus atque asperiores officiis unde
        //     corrupti, molestiae, possimus.reprehenderit vero nesciunt quibusdam aliquam
        //     voluptatem nostrum ducimus quia ad repellendus maxime impedit? Eaque in commodi
        //     soluta quasi eos earum asperiores cupiditate quaerat suscipit. Ratione fugit
        //     aspernatur id accusantium minus enim rem necessitatibus reprehenderit, eaque
        //     numquam.molestias laudantium perferendis totam dolore vero, doloribus aut et
        //     officiis optio? Est magnam hic ab deleniti debitis perspiciatis corporis numquam
        //     sed? Quibusdam nam non, possimus magni eaque et est consequatur quaerat eius
        //     tempora dicta sapiente aperiam pariatur ipsa id! Quisquam, quos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe expedita rem
        //     ducimus optio omnis nostrum quidem atque sint voluptatibus! Aperiam quod veniam
        //     ipsa alias ab nemo tenetur necessitatibus atque asperiores officiis unde
        //     corrupti, molestiae, possimus.reprehenderit vero nesciunt quibusdam aliquam
        //     voluptatem nostrum ducimus quia ad repellendus maxime impedit? Eaque in commodi
        //     soluta quasi eos earum asperiores cupiditate quaerat suscipit. Ratione fugit
        //     aspernatur id accusantium minus enim rem necessitatibus reprehenderit, eaque
        //     numquam.molestias laudantium perferendis totam dolore vero, doloribus aut et
        //     officiis optio? Est magnam hic ab deleniti debitis perspiciatis corporis numquam
        //     sed? Quibusdam nam non, possimus magni eaque et est consequatur quaerat eius
        //     tempora dicta sapiente aperiam pariatur ipsa id! Quisquam, quos.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe expedita rem
        //     ducimus optio omnis nostrum quidem atque sint voluptatibus! Aperiam quod veniam
        //     ipsa alias ab nemo tenetur necessitatibus atque asperiores officiis unde
        //     corrupti, molestiae, possimus.reprehenderit vero nesciunt quibusdam aliquam
        //     voluptatem nostrum ducimus quia ad repellendus maxime impedit? Eaque in commodi
        //     soluta quasi eos earum asperiores cupiditate quaerat suscipit. Ratione fugit
        //     aspernatur id accusantium minus enim rem necessitatibus reprehenderit, eaque
        //     numquam.molestias laudantium perferendis totam dolore vero, doloribus aut et
        //     officiis optio? Est magnam hic ab deleniti debitis perspiciatis corporis numquam
        //     sed? Quibusdam nam non, possimus magni eaque et est consequatur quaerat eius
        //     tempora dicta sapiente aperiam pariatur ipsa id! Quisquam, quos.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

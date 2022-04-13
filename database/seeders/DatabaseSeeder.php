<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Deo Subarno',
            'email' => 'aprodeosubarno@gmail.com',
            'password' => Hash::make(12345)
        ]);

        User::create([
            'name' => 'Inuyama Aoi',
            'email' => 'aoichan@gmail.com',
            'password' => Hash::make(12345)
        ]);

        User::create([
            'name' => 'Kotobuki Tsumugi',
            'email' => 'mugichan@gmail.com',
            'password' => Hash::make(12345)
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'uiux-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsa minima quidem praesentium a, placeat quo accusantium obcaecati ad odio',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sunt veritatis iste harum, sint maiores accusamus ut, illum impedit numquam voluptates. Quis neque aspernatur laudantium vel iure perspiciatis tempore nesciunt tempora hic nemo ipsa consequuntur molestiae odit quam laborum eveniet, temporibus culpa, fugiat nobis incidunt officiis. Ullam quibusdam velit recusandae repudiandae, esse amet illum magnam facilis accusantium quas dicta ratione dolorem cumque rerum, quisquam ipsam laborum, hic dolore quis sapiente nobis rem in! Explicabo, labore facilis est id tempore corporis?'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 2,
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsa minima quidem praesentium a, placeat quo accusantium obcaecati ad odio',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sunt veritatis iste harum, sint maiores accusamus ut, illum impedit numquam voluptates. Quis neque aspernatur laudantium vel iure perspiciatis tempore nesciunt tempora hic nemo ipsa consequuntur molestiae odit quam laborum eveniet, temporibus culpa, fugiat nobis incidunt officiis. Ullam quibusdam velit recusandae repudiandae, esse amet illum magnam facilis accusantium quas dicta ratione dolorem cumque rerum, quisquam ipsam laborum, hic dolore quis sapiente nobis rem in! Explicabo, labore facilis est id tempore corporis?'
        ]);

        Post::create([
            'category_id' => 3,
            'user_id' => 1,
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsa minima quidem praesentium a, placeat quo accusantium obcaecati ad odio',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sunt veritatis iste harum, sint maiores accusamus ut, illum impedit numquam voluptates. Quis neque aspernatur laudantium vel iure perspiciatis tempore nesciunt tempora hic nemo ipsa consequuntur molestiae odit quam laborum eveniet, temporibus culpa, fugiat nobis incidunt officiis. Ullam quibusdam velit recusandae repudiandae, esse amet illum magnam facilis accusantium quas dicta ratione dolorem cumque rerum, quisquam ipsam laborum, hic dolore quis sapiente nobis rem in! Explicabo, labore facilis est id tempore corporis?'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 3,
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsa minima quidem praesentium a, placeat quo accusantium obcaecati ad odio',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sunt veritatis iste harum, sint maiores accusamus ut, illum impedit numquam voluptates. Quis neque aspernatur laudantium vel iure perspiciatis tempore nesciunt tempora hic nemo ipsa consequuntur molestiae odit quam laborum eveniet, temporibus culpa, fugiat nobis incidunt officiis. Ullam quibusdam velit recusandae repudiandae, esse amet illum magnam facilis accusantium quas dicta ratione dolorem cumque rerum, quisquam ipsam laborum, hic dolore quis sapiente nobis rem in! Explicabo, labore facilis est id tempore corporis?'
        ]);
    }
}

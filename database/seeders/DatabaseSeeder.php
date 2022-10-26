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
        

        // User::create([
        //     'name' => 'Gilang Dwi',
        //     'email' => '203040014@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Adira Karsoma',
        //     'email' => 'adira@mail.unpas.ac.id',
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

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur tempore nobis ullam sit laborum dolorum eaque maxime quos suscipit! Nihil corporis quo qui tenetur labore aspernatur necessitatibus nostrum, molestias architecto quibusdam rerum soluta quis fugiat assumenda facilis voluptatum cumque voluptatem saepe error blanditiis ab a facere.</p> <p>Magnam cum delectus aut fuga corporis quas labore minus eveniet quisquam fugit facilis harum modi cumque eaque, officiis, expedita eius magni voluptatibus alias sunt animi ducimus voluptates sit.</p><p>Vel ipsum vitae consequuntur perspiciatis nihil cupiditate sapiente obcaecati expedita, velit magni eveniet iste eum unde debitis nesciunt quibusdam labore maiores pariatur, praesentium omnis explicabo? Quia error nobis ipsum, dicta at facilis ut architecto voluptatum iusto, corrupti natus autem aperiam. Sapiente sunt fugiat laudantium iure alias quibusdam facilis, aliquid perferendis nisi, facere mollitia qui enim in error praesentium autem corporis voluptatem ad deserunt cum provident esse distinctio.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur tempore nobis ullam sit laborum dolorum eaque maxime quos suscipit! Nihil corporis quo qui tenetur labore aspernatur necessitatibus nostrum, molestias architecto quibusdam rerum soluta quis fugiat assumenda facilis voluptatum cumque voluptatem saepe error blanditiis ab a facere.</p> <p>Magnam cum delectus aut fuga corporis quas labore minus eveniet quisquam fugit facilis harum modi cumque eaque, officiis, expedita eius magni voluptatibus alias sunt animi ducimus voluptates sit.</p><p>Vel ipsum vitae consequuntur perspiciatis nihil cupiditate sapiente obcaecati expedita, velit magni eveniet iste eum unde debitis nesciunt quibusdam labore maiores pariatur, praesentium omnis explicabo? Quia error nobis ipsum, dicta at facilis ut architecto voluptatum iusto, corrupti natus autem aperiam. Sapiente sunt fugiat laudantium iure alias quibusdam facilis, aliquid perferendis nisi, facere mollitia qui enim in error praesentium autem corporis voluptatem ad deserunt cum provident esse distinctio.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur tempore nobis ullam sit laborum dolorum eaque maxime quos suscipit! Nihil corporis quo qui tenetur labore aspernatur necessitatibus nostrum, molestias architecto quibusdam rerum soluta quis fugiat assumenda facilis voluptatum cumque voluptatem saepe error blanditiis ab a facere.</p> <p>Magnam cum delectus aut fuga corporis quas labore minus eveniet quisquam fugit facilis harum modi cumque eaque, officiis, expedita eius magni voluptatibus alias sunt animi ducimus voluptates sit.</p><p>Vel ipsum vitae consequuntur perspiciatis nihil cupiditate sapiente obcaecati expedita, velit magni eveniet iste eum unde debitis nesciunt quibusdam labore maiores pariatur, praesentium omnis explicabo? Quia error nobis ipsum, dicta at facilis ut architecto voluptatum iusto, corrupti natus autem aperiam. Sapiente sunt fugiat laudantium iure alias quibusdam facilis, aliquid perferendis nisi, facere mollitia qui enim in error praesentium autem corporis voluptatem ad deserunt cum provident esse distinctio.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem deserunt, eveniet voluptate nisi praesentium vero, illum tenetur tempore nobis ullam sit laborum dolorum eaque maxime quos suscipit! Nihil corporis quo qui tenetur labore aspernatur necessitatibus nostrum, molestias architecto quibusdam rerum soluta quis fugiat assumenda facilis voluptatum cumque voluptatem saepe error blanditiis ab a facere.</p> <p>Magnam cum delectus aut fuga corporis quas labore minus eveniet quisquam fugit facilis harum modi cumque eaque, officiis, expedita eius magni voluptatibus alias sunt animi ducimus voluptates sit.</p><p>Vel ipsum vitae consequuntur perspiciatis nihil cupiditate sapiente obcaecati expedita, velit magni eveniet iste eum unde debitis nesciunt quibusdam labore maiores pariatur, praesentium omnis explicabo? Quia error nobis ipsum, dicta at facilis ut architecto voluptatum iusto, corrupti natus autem aperiam. Sapiente sunt fugiat laudantium iure alias quibusdam facilis, aliquid perferendis nisi, facere mollitia qui enim in error praesentium autem corporis voluptatem ad deserunt cum provident esse distinctio.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

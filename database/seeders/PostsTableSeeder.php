<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'tips cepat nikah','content'=> 'lorem ipsum'],
            ['title' => 'haruskah menunda nikah?','content'=> 'lorem ipsum'],
            ['title' => 'membangun visi misi keluarga','content'=> 'lorem ipsum'],
        ];

        DB::table('posts')->insert($posts);
    }
}

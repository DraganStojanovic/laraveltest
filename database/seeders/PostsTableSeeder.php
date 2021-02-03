<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new Post();
        $post1->title = "Main title";
        $post1->body = "Loreim Ipsum Sit emet ...";
        $post1->autor = "Dragan";
        $post1->save();
//        \DB::table("posts")->insert([
//            [
//                'title'=>'Prvi Post',
//                'body'=>'Lorem Ipsum Sit emet ...',
//                'autor'=>'Dragan'
//            ],
//            [
//                'title'=>'Drugi Post',
//                'body'=>'Lorem Ipsum Sit emet ...',
//                'autor'=>'Marija'
//            ]
//        ]);
    }
}

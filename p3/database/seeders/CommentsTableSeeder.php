<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use App\Models\Comment;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # https://fakerphp.github.io
    $this->faker = Factory::create();

    foreach ($comments as $commentData) {
        

        $comment = new Comment();
        $comment->user_id = $request->user()->id;
        $comment->user_id_recipient = $request->user_id_recipient;
        $comment->comment = $request->comment;
        $comment->save();

    }
    }
}

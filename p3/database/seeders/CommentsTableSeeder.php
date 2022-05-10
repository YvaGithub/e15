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

    # Array of author data to add
    $comments = [
        ['Jill', 'Harvard'],
        ['Jamal', 'Harvard'],
        
    ];

    $count = count($comments);

    # Loop through each comment, adding them to the database
    foreach ($comments as $commentData) {
        $comment = new Comment();
        
        $comment->created_at = $this->faker->dateTimeThisMonth();
        $comment->updated_at = $this->faker->dateTimeThisMonth();
        $comment->first_name = $commentData[0];
        $comment->attendance_year = $commentData[1];
        $comment->email = $commentData[0];
        $comment->phone_number= $commentData[1];
        $comment->profile = $commentData[0];
        
        
        
        $comment->save();
        
        $count--;
    }
    }
}

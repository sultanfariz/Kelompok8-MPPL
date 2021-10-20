<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'story_id' => '1',
                'user_id' => '2',
                'body' =>  'lorem ipsum dolor sit amet',
            ],
            [
                'story_id' => '1',
                'user_id' => '1',
                'body' =>  'admin juga pen komen',
            ],
        ];

        foreach ($comments as $key => $val) {
            Comment::create($val);
        }
    }
}

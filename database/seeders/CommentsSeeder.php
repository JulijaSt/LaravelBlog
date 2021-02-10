<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cm1 = new \App\Models\Comment();
        $cm1->name = 'Ramunė';
        $cm1->comment = 'Our first trip was also to Rhode. How amazing to read about your adventures.';
        $cm1->blogpost_id = 1;
        $cm1->save();

        $cm1 = new \App\Models\Comment();
        $cm1->name = 'Arvydas';
        $cm1->comment = 'I really want to read more descriptions of your travels.';
        $cm1->blogpost_id = 1;
        $cm1->save();
    }
}

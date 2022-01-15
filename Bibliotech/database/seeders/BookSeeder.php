<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'publisher' => 'Random House',
            'release' => '2018-10-18',
            'price' => 55000,
            'description' => 'People think that when you want to change your life, you need to think big. But world-renowned habits expert James Clear has discovered another way. He knows that real change comes from the compound effect of hundreds of small decisions - doing two push-ups a day, waking up five minutes early, or holding a single short phone call.',
            'image' => 'Atomic Habits.jpg'
        ]);
    }
}

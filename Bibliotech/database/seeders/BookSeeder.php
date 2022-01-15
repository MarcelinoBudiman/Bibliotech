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
            'description' => 'People think that when you want to change your life.',
            'image' => 'Atomic Habits.jpg'
        ]);
    }
}

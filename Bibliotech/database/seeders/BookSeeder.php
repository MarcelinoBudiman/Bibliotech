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

        DB::table('books')->insert([
            'title' => 'Code: The Hidden Language of Computer Hardware and Software',
            'author' => 'Charles Petzold',
            'publisher' => 'Microsoft Press',
            'release' => '1999-09-29',
            'price' => 40000,
            'description' => 'Learn how personal computers work at a hardware and software level.',
            'image' => 'Code.jpg'
        ]);

        DB::table('books')->insert([
            'title' => 'Algorithms to Live By: The Computer Science of Human Decisions',
            'author' => 'Brian Christian, Griffiths',
            'publisher' => 'Harper Collins',
            'release' => '2016-04-19',
            'price' => 60000,
            'description' => 'A fascinating exploration of how computer algorithms can be applied to our everyday lives.',
            'image' => 'Algorithms.jpg'
        ]);

        DB::table('books')->insert([
            'title' => 'Artificial Intelligence: A Modern Approach',
            'author' => 'Peter Norvig, Stuart J. Russell',
            'publisher' => 'Prentice Hall',
            'release' => '1995-01-01',
            'price' => 35000,
            'description' => "This book focuses on machine learning, deep learning, probabilistic programming, multiagent systems, and includes sections where the AI's utility function is uncertain, rather than certain.",
            'image' => 'Artificial Intelligence.jpg'
        ]);

        DB::table('books')->insert([
            'title' => 'The C Programming Language',
            'author' => 'Dennis Ritchie, Brian Kernighan',
            'publisher' => 'Prentice Hall',
            'release' => '1978-01-01',
            'price' => 35000,
            'description' => 'The first C tutorial written by the designer of the language itself.',
            'image' => 'C.jpg'
        ]);
    }
}

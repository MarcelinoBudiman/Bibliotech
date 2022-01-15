<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Book;
use App\Models\User;
=======
>>>>>>> a85712c65f676135aa86ed2913b543f1a2e30d9d
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
<<<<<<< HEAD
            Book::class,
            User::class
=======
            BookSeeder::class,
            UserSeeder::class
>>>>>>> a85712c65f676135aa86ed2913b543f1a2e30d9d
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('library')->insert([
            'name'=>'Toko buku Boy',
            'address'=>'JL. Tolong Banyak Tugas',
            'capacity' => '10'

        ]); 
    }
}

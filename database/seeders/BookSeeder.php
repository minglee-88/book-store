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
        DB::table('ebooks')->insert([
            [
                'title' => 'Title 1',
                'author' => 'Author 1',
                'desc'=>'Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1 Ini adalah book 1'
            ],
            [
                'title' => 'Title 2',
                'author' => 'Author 2',
                'desc'=>'Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2Ini adalah book 2 Ini adalah book 2Ini adalah book 2 Ini adalah book 2Ini adalah book 2'
            ],
            [
                'title' => 'Title 3',
                'author' => 'Author 3',
                'desc'=>'Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 Ini adalah book 3 '
            ],
            [
                'title' => 'Title 4',
                'author' => 'Author 4',
                'desc'=>'Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 Ini adalah book 4 '
            ],

        ]);

    }
}

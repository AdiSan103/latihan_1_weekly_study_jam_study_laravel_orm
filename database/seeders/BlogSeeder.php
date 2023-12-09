<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
            'judul' => 'Buku Laravel',
            'image' => 'default.jpg',
            'description' => 'ini buku laravel mantap',
            'id_category' => 1,
        ]);
    }
}

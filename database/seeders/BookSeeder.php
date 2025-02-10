<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         for ($i = 1; $i <= 100; $i++) {
            DB::table('books')->insert([
                'title' => 'Sách số ' . $i,
                'thumbnail' => 'https://via.placeholder.com/150',
                'author' => 'Tác giả ' . $i,
                'publisher' => 'Nhà xuất bản ' . $i,
                'publication_date' => now(),
                'price' => rand(50000, 500000),
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 5),
            ]);
    }
}}

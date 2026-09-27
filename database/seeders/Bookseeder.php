<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP untuk Pemula',
            'author' => 'Budi Santoso',
            'year' => 2021,
            'stock' => 10,
        ]);
        Book::create([
            'title' => 'Panduan Master Web Development',
            'author' => 'Siti Aminah',
            'year' => 2022,
            'stock' => 5,
        ]);
        Book::create([
            'title' => 'Tutorial Menjadi Orang Sukses',
            'author' => 'Andi Pratama',
            'year' => 2019,
            'stock' => 8,
        ]);
        Book::create([
            'title' => 'Panduan Hidup Sehat & Berkah',
            'author' => 'Rahmat Hidayat',
            'year' => 2020,
            'stock' => 12,
        ]);
        Book::create([
            'title' => 'Strategi Manajemen Keuangan',
            'author' => 'Dewi Lestari',
            'year' => 2023,
            'stock' => 6,
        ]);
    }
}
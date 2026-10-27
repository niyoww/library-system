<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $names = ['Pemrograman', 'Basis Data', 'Jaringan'];

        foreach ($names as $name) {
            Category::firstOrCreate(['name' => $name]);
        }
    }
}
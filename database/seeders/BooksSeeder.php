<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();

        Book::insert([
            [
                'title' => 'Pani Twardowska',
                'author' => 'Adam Mickiewicz',
                'pdf' => 'pani_twardowska.pdf',
                'image' => 'pani-twardowska.jpg',
            ],
            [
                'title' => 'Pan Tadeusz',
                'author' => 'Adam Mickiewicz',
                'pdf' => 'pan-tadeusz.pdf',
                'image' => 'pan-tadeusz.jpg',
            ]
        ]);
    }
}

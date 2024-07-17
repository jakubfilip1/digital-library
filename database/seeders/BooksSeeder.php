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
            ],
            [
                'title' => 'Anhelli',
                'author' => 'Juliusz Słowacki',
                'pdf' => 'anhelli.pdf',
                'image' => 'anhelli.jpg',
            ],
            [
                'title' => 'Córka Cerery',
                'author' => 'Juliusz Słowacki',
                'pdf' => 'corka-cerery.pdf',
                'image' => 'corka-cerery.jpg',
            ],
            [
                'title' => 'Do Zygmunta',
                'author' => 'Juliusz Słowacki',
                'pdf' => 'do-zygmunta.pdf',
                'image' => 'do-zygmunta.jpg',
            ],
            [
                'title' => 'Wiedźma',
                'author' => 'Eliza Orzeszkowa',
                'pdf' => 'wiedzma.pdf',
                'image' => 'wiedzma.jpg',
            ],
            [
                'title' => 'Królowa śniegu',
                'author' => 'Hans Christian Andersen',
                'pdf' => 'krolowa-sniegu.pdf',
                'image' => 'krolowa-sniegu.jpg',
            ],
            [
                'title' => 'Małe kobietki',
                'author' => 'Louisa May Alcott',
                'pdf' => 'male-kobietki.pdf',
                'image' => 'male-kobietki.jpg',
            ],
            [
                'title' => 'Boska Komedia',
                'author' => 'Dante Alighieri',
                'pdf' => 'boska-komedia.pdf',
                'image' => 'boska-komedia.jpg',
            ],
            [
                'title' => 'Tajny agent',
                'author' => 'Joseph Conrad',
                'pdf' => 'tajny-agent.pdf',
                'image' => 'tajny-agent.jpg',
            ],
            [
                'title' => 'Studium w szkarłacie',
                'author' => 'Arthur Conan Doyle',
                'pdf' => 'studium-w-szkarlacie.pdf',
                'image' => 'studium-w-szkarlacie.jpg',
            ],
            [
                'title' => 'O królu Arturze i rycerzach Okrągłego Stołu',
                'author' => 'Uriel Waldo Cutler',
                'pdf' => 'o-krolu-arturze-i-rycerzach-okraglego-stolu.pdf',
                'image' => 'o-krolu-arturze-i-rycerzach-okraglego-stolu.jpg',
            ],
            [
                'title' => 'Jaś i Małgosia',
                'author' => 'Jacob i Wilhelm Grimm',
                'pdf' => 'jas-i-malgosia.pdf',
                'image' => 'jas-i-malgosia.jpg',
            ],
            [
                'title' => 'Dziewczynka z zapałkami',
                'author' => 'Hans Christian Andersen',
                'pdf' => 'dziewczynka-z-zapalkami.pdf',
                'image' => 'dziewczynka-z-zapalkami.jpg',
            ]
            ,
            [
                'title' => 'Calineczka',
                'author' => 'Hans Christian Andersen',
                'pdf' => 'calineczka.pdf',
                'image' => 'calineczka.jpg',
            ]
        ]);
    }
}

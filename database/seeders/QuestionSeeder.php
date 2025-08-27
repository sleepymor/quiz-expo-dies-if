<?php

namespace Database\Seeders;

use App\Models\QuestionHandling\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'question' => 'Apa kepanjangan dari "IT" dalam dunia teknologi ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Perangkat keras komputer yang digunakan untuk menampilkan gambar disebut ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Sistem operasi yang paling umum digunakan di komputer pribadi adalah ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa fungsi utama dari keyboard ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Perangkat lunak yang digunakan untuk mengetik dokumen adalah ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa nama jaringan komputer terbesar di dunia ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa fungsi dari mouse pada komputer ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa nama program yang digunakan untuk menjelajahi internet',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa itu "hardware" dalam komputer ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa itu "software" dalam komputer ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Perangkat penyimpanan data yang umum digunakan adalah ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa nama sistem operasi yang dikembangkan oleh Apple ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Apa fungsi dari printer ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Apa itu "CPU" dalam komputer ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Apa nama aplikasi yang digunakan untuk membuat presentasi ?',
                'level' => '2',
                'points' => '10',
            ],
            
        ];

        foreach ($items as $item) {
            Question::create($item);
        }
    }
}

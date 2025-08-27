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
            # 15 soal baru ^
            [
                'question' => 'Apakah itu konsol ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Apa fungsi Ram pada computer ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Pengertian Analog adalah ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Apa kepanjangan dari AI ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => ' Apa itu gambar vector ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Apakah pengertian dari algoritma ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Di tahun berapakah program studi Informatika diresmikan di Institut Teknologi Kalimantan?',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Mana dibawah ini yang merupakan perbedaan andoid dan Ios?',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Mekanisme penerjemahan Bahasa permograman level tinggi menjadi level rendah yang dilakukan secara keseluruhan kode program dalam satu waktu',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Mekanisme penerjemahan Bahasa permograman level tinggi menjadi level rendah yang dilakukan per baris code',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Sebutkan macam-macam yang digunakan dalam python?',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Dimanakah dibawah ini game yang menggunakan unreal engine?',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Apakah layout keyboard yang digunakan di Indonesia?',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Manakan yang merupakan visi dari kampus Institut Teknologi Kalimantan?',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Maskot yang mewakili kampus instittut teknologi Kalimantan adalah?',
                'level' => '3',
                'points' => '25',
            ],
            [
                'question' => 'Berapakah luas dari kampus institute teknologi Kalimantan?',
                'level' => '3',
                'points' => '25',
            ]
        ];

        foreach ($items as $item) {
            Question::create($item);
        }
    }
}

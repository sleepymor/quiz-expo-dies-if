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
            'points' => '10',
        ],
        [
            'question' => 'Perangkat keras komputer yang digunakan untuk menampilkan gambar disebut ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Sistem operasi yang paling umum digunakan di komputer pribadi adalah ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa fungsi utama dari keyboard ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Perangkat lunak yang digunakan untuk mengetik dokumen adalah ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa nama jaringan komputer terbesar di dunia ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa fungsi dari mouse pada komputer ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa nama program yang digunakan untuk menjelajahi internet',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa itu "hardware" dalam komputer ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa itu "software" dalam komputer ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Perangkat penyimpanan data yang umum digunakan adalah ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa nama sistem operasi yang dikembangkan oleh Apple ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa fungsi dari printer ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa itu "CPU" dalam komputer ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa nama aplikasi yang digunakan untuk membuat presentasi ?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Kapan ITK resmi diresmikan?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Pada tahun berapa ITK didirikan?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Dimana ITK pertama kali berdiri?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Siapa yang meresmikan ITK?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Apa visi ITK?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Salah satu misi ITK adalah…',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Berapa jumlah program studi saat ITK pertama kali berdiri?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Jurusan berikut yang termasuk angkatan pertama ITK adalah…',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Jurusan apa yang tidak ada saat penerimaan mahasiswa pertama ITK?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Pada tanggal berapa pelantikan rektor pertama ITK dilakukan?',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Tahun target visi ITK adalah…',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Salah satu misi ITK adalah membangun kerja sama dengan…',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'ITK merupakan kepanjangan dari…',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'ITK berperan aktif dalam pembangunan nasional melalui…',
            'level' => '1',
            'points' => '10',
        ],
        [
            'question' => 'Jurusan berikut yang termasuk lima prodi pertama ITK adalah…',
            'level' => '1',
            'points' => '10',
        ],
    ];


        foreach ($items as $item) {
            Question::create($item);
        }
    }
}

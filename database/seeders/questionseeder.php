<?php

namespace Database\Seeders;

use App\Models\question_handling\question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class questionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'question' => 'Apa kepanjangan dari ITK  ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Siapakah nama rektor Institut Teknologi Kalimantan 2024 ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Dimanakah letak kampus Institut Teknologi Kalimantan ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Mengapa penting untuk menjaga keamanan data pribadi pada internet ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Manakah dibawah ini yang merupakan komponen computer ?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Ada berapa prodi yang terdapat di kampus Institut Teknologi Kalimantan?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Prodi Informatika dinaungi oleh jurusan',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa fungsi dari CPU?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Kapan cabang olahraga esport pertama kali diadakan?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Apa tema yang diusung pada dies natalis ke 10 ini?',
                'level' => '1',
                'points' => '5',
            ],
            [
                'question' => 'Sudah berapa lama Kampus ITK bediri ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Siapakah nama wakil rektor bidang akademik ITK tahun 2024 ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Bahasa permograman yang populer digunakan dalam pembuatan website ?',
                'level' => '2',
                'points' => '10',
            ],
            [
                'question' => 'Bagaimana cara menjaga keamanan computer dari virus dan malware ?',
                'level' => '2',
                'points' => '10',
            ],
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
            question::create($item);
        }
    }
}

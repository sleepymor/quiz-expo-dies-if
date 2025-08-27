<?php

namespace Database\Seeders;

use App\Models\QuestionHandling\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            // 1
            [
                "question_id" => 1,
                "answer" => "Informasi Teknologi",
                "status" => false
            ],
            [
                "question_id" => 1,
                "answer" => "Ilmu Teknologi",
                "status" => false
            ],
            [
                "question_id" => 1,
                "answer" => "Internet Teknologi",
                "status" => false
            ],
            [
                "question_id" => 1,
                "answer" => "Informasi dan Telekomunikasi",
                "status" => true
            ],

            // 2
            [
                "question_id" => 2,
                "answer" => "Printer",
                "status" => false
            ],
            [
                "question_id" => 2,
                "answer" => "Keyboard",
                "status" => false
            ],
            [
                "question_id" => 2,
                "answer" => "Mouse",
                "status" => false
            ],
            [
                "question_id" => 2,
                "answer" => "Monitor",
                "status" => true
            ],

            // 3
            [
                "question_id" => 3,
                "answer" => "Windows",
                "status" => true
            ],
            [
                "question_id" => 3,
                "answer" => "MacOS",
                "status" => false
            ],
            [
                "question_id" => 3,
                "answer" => "Linux",
                "status" => false
            ],
            [
                "question_id" => 3,
                "answer" => "Android",
                "status" => false
            ],

            // 4
            [
                "question_id" => 4,
                "answer" => "Memasukkan data",
                "status" => true
            ],
            [
                "question_id" => 4,
                "answer" => "Menyimpan file",
                "status" => false
            ],
            [
                "question_id" => 4,
                "answer" => "Menampilkan gambar",
                "status" => false
            ],
            [
                "question_id" => 4,
                "answer" => "Mencetak dokumen",
                "status" => false
            ],

            // 5
            [
                "question_id" => 5,
                "answer" => "Windows Media Player",
                "status" => false
            ],
            [
                "question_id" => 5,
                "answer" => "Google Chrome",
                "status" => false
            ],
            [
                "question_id" => 5,
                "answer" => "Microsoft Word",
                "status" => true
            ],
            [
                "question_id" => 5,
                "answer" => "Adobe Photoshop",
                "status" => false
            ],

            // 6
            [
                "question_id" => 6,
                "answer" => "Internet",
                "status" => true
            ],
            [
                "question_id" => 6,
                "answer" => "LAN",
                "status" => false
            ],
            [
                "question_id" => 6,
                "answer" => "WAN",
                "status" => false
            ],
            [
                "question_id" => 6,
                "answer" => "MAN",
                "status" => false
            ],

            // 7
            [
                "question_id" => 7,
                "answer" => "Menampilkan video",
                "status" => false
            ],
            [
                "question_id" => 7,
                "answer" => "Mengetik teks",
                "status" => false
            ],
            [
                "question_id" => 7,
                "answer" => "Menggerakkan kursor",
                "status" => true
            ],
            [
                "question_id" => 7,
                "answer" => "Menyimpan data",
                "status" => false
            ],

            // 8
            [
                "question_id" => 8,
                "answer" => "Windows Explorer",
                "status" => false
            ],
            [
                "question_id" => 8,
                "answer" => "Adobe Reader",
                "status" => false
            ],
            [
                "question_id" => 8,
                "answer" => "Google Chrome",
                "status" => true
            ],
            [
                "question_id" => 8,
                "answer" => "Microsoft Excel",
                "status" => false
            ],

            // 9
            [
                "question_id" => 9,
                "answer" => "Program komputer",
                "status" => false
            ],
            [
                "question_id" => 9,
                "answer" => "Jaringan internet",
                "status" => false
            ],
            [
                "question_id" => 9,
                "answer" => "Data digital",
                "status" => false
            ],
            [
                "question_id" => 9,
                "answer" => "Perangkat keras",
                "status" => true
            ],

            // 10
            [
                "question_id" => 10,
                "answer" => "Layar monitor",
                "status" => false
            ],
            [
                "question_id" => 10,
                "answer" => "Kabel jaringan",
                "status" => false
            ],
            [
                "question_id" => 10,
                "answer" => "Perangkat keras",
                "status" => false
            ],
            [
                "question_id" => 10,
                "answer" => "Program komputer",
                "status" => true
            ],

            // 11
            [
                "question_id" => 11,
                "answer" => "Monitor",
                "status" => false
            ],
            [
                "question_id" => 11,
                "answer" => "Flashdisk",
                "status" => true
            ],
            [
                "question_id" => 11,
                "answer" => "Mouse",
                "status" => false
            ],
            [
                "question_id" => 11,
                "answer" => "Printer",
                "status" => false
            ],

            // 12
            [
                "question_id" => 12,
                "answer" => "MacOS",
                "status" => true
            ],
            [
                "question_id" => 12,
                "answer" => "Ubuntu",
                "status" => false
            ],
            [
                "question_id" => 12,
                "answer" => "Windows",
                "status" => false
            ],
            [
                "question_id" => 12,
                "answer" => "Linux",
                "status" => false
            ],

            // 13
            [
                "question_id" => 13,
                "answer" => "Mengedit video",
                "status" => false
            ],
            [
                "question_id" => 13,
                "answer" => "Memasukkan data",
                "status" => false
            ],
            [
                "question_id" => 13,
                "answer" => "Mencetak dokumen",
                "status" => true
            ],
            [
                "question_id" => 13,
                "answer" => "Menampilkan gambar",
                "status" => false
            ],

            // 14
            [
                "question_id" => 14,
                "answer" => "Unit pemrosesan pusat",
                "status" => true
            ],
            [
                "question_id" => 14,
                "answer" => "Perangkat penyimpanan",
                "status" => false
            ],
            [
                "question_id" => 14,
                "answer" => "Perangkat input",
                "status" => false
            ],
            [
                "question_id" => 14,
                "answer" => "Layar komputer",
                "status" => false
            ],

            // 15
            [
                "question_id" => 15,
                "answer" => "Microsoft Excel",
                "status" => false
            ],
            [
                "question_id" => 15,
                "answer" => "Google Chrome",
                "status" => false
            ],
            [
                "question_id" => 15,
                "answer" => "Microsoft Word",
                "status" => false
            ],
            [
                "question_id" => 15,
                "answer" => "Microsoft PowerPoint",
                "status" => true
            ],

        ];

        foreach ($items as $item) {
            Answer::create($item);
        }
    }
}

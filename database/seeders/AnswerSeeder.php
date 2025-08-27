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
#

            [
                "question_id" => 16,
                "answer" => "Sebagai penyimpanan",
                "status" => false
            ],
            [
                "question_id" => 16,
                "answer" => "Sebagai penyimpanan utama",
                "status" => false
            ],
            [
                "question_id" => 16,
                "answer" => "Mengoptimalkan kinerja program",
                "status" => false
            ],
            [
                "question_id" => 16,
                "answer" => "Sebagai penyimpanan sementara",
                "status" => true
            ],
            [
                "question_id" => 17,
                "answer" => "representasi fisik yang kontinu dari data atau sinyal",
                "status" => true
            ],
            [
                "question_id" => 17,
                "answer" => "representasi numerik dan diskrit dari data atau sinyal.",
                "status" => false
            ],
            [
                "question_id" => 17,
                "answer" => "representasi besaran dari data atau sinyal.",
                "status" => false
            ],
            [
                "question_id" => 17,
                "answer" => "Representasi data atau sinyal dalam bentuk gelombang kontinu",
                "status" => false
            ],
            [
                "question_id" => 18,
                "answer" => "Artificial Inteliigence",
                "status" => false
            ],
            [
                "question_id" => 18,
                "answer" => "Artificial Inteligence",
                "status" => false
            ],
            [
                "question_id" => 18,
                "answer" => "Automated Intelligence",
                "status" => false
            ],
            [
                "question_id" => 18,
                "answer" => "Artificial Intelligence",
                "status" => true
            ],
            [
                "question_id" => 19,
                "answer" => "Gambar yang terdiri dari titik dan garis",
                "status" => true
            ],
            [
                "question_id" => 19,
                "answer" => "Besaran yang memiliki arah",
                "status" => false
            ],
            [
                "question_id" => 19,
                "answer" => "Gambar yang terdiri dari pixel",
                "status" => false
            ],
            [
                "question_id" => 19,
                "answer" => "Gambar dibentuk oleh bentuk geometris",
                "status" => false
            ],
            [
                "question_id" => 20,
                "answer" => "Urutan langkah yang tidak perlu logis yang menghasilkan output",
                "status" => false
            ],
            [
                "question_id" => 20,
                "answer" => "Urutan langkah yang logis dan tidak harus ada output",
                "status" => false
            ],
            [
                "question_id" => 20,
                "answer" => "Urutan langkah yang sistematis dan logis yang menghasilkan output",
                "status" => true
            ],
            [
                "question_id" => 20,
                "answer" => "Prosedur terstruktur yang digunakan untuk memecahkan masalah",
                "status" => false
            ],
            [
                "question_id" => 21,
                "answer" => "Tahun 2016",
                "status" => true
            ],
            [
                "question_id" => 21,
                "answer" => "Tahun 2015",
                "status" => false
            ],
            [
                "question_id" => 21,
                "answer" => "Tahun 2017",
                "status" => false
            ],
            [
                "question_id" => 21,
                "answer" => "Tahun 2014",
                "status" => false
            ],
            [
                "question_id" => 22,
                "answer" => "Android dan iOS sama-sama dikembangkan oleh perusahaan teknologi besar di Amerika Serikat.",
                "status" => false
            ],
            [
                "question_id" => 22,
                "answer" => "Android menggunakan App Store, sedangkan iOS menggunakan Google Play Store",
                "status" => false
            ],
            [
                "question_id" => 22,
                "answer" => "Android bersifat open-source, sedangkan iOS bersifat tertutup",
                "status" => false
            ],
            [
                "question_id" => 22,
                "answer" => "Android dikembangkan oleh Google, sedangkan iOS dikembangkan oleh Apple.",
                "status" => true
            ],
            [
                "question_id" => 23,
                "answer" => "Interpreter",
                "status" => false
            ],
            [
                "question_id" => 23,
                "answer" => "Compiler",
                "status" => true
            ],
            [
                "question_id" => 23,
                "answer" => "Translator",
                "status" => false
            ],
            [
                "question_id" => 23,
                "answer" => "Assembler",
                "status" => false
            ],
            [
                "question_id" => 24,
                "answer" => "Interpreter",
                "status" => true
            ],
            [
                "question_id" => 24,
                "answer" => "Compiler",
                "status" => false
            ],
            [
                "question_id" => 24,
                "answer" => "Translator",
                "status" => false
            ],
            [
                "question_id" => 24,
                "answer" => "Assembler",
                "status" => false
            ],
            [
                "question_id" => 25,
                "answer" => "operator aritmatik, penugasan, perbandingan, logika, identitas, keanggotaan, dan bitwise.",
                "status" => false
            ],
            [
                "question_id" => 25,
                "answer" => "operator aritmatik, penegasan, logika, identitas, keanggotaan, dan bitwise.",
                "status" => false
            ],
            [
                "question_id" => 25,
                "answer" => "Operator aritmatik, penugasan, perbandingan, logika, identitas, keanggotaan, bitwise, dan bit shift.",
                "status" => false
            ],
            [
                "question_id" => 25,
                "answer" => "operator aritmatik, penugasan, perbandingan, logika, identitas, keanggotaan, dan bitwise.",
                "status" => true
            ],
            [
                "question_id" => 26,
                "answer" => "Among us, Fortnite, falls guys",
                "status" => false
            ],
            [
                "question_id" => 26,
                "answer" => "Genshin impact, The Forest, Assassin's Creed Identity",
                "status" => false
            ],
            [
                "question_id" => 26,
                "answer" => "Black myth: Wukong, S.T.A.L.K.E.R. 2 : heart of Chernobyl , Borderlands 3",
                "status" => true
            ],
            [
                "question_id" => 26,
                "answer" => "Minecraft, Cyberpunk 2077, The Witcher 3",
                "status" => false
            ],
            [
                "question_id" => 27,
                "answer" => "QWERTZ",
                "status" => false
            ],
            [
                "question_id" => 27,
                "answer" => "QWERTY",
                "status" => true
            ],
            [
                "question_id" => 27,
                "answer" => "AZERTY",
                "status" => false
            ],
            [
                "question_id" => 27,
                "answer" => "DVORAK",
                "status" => false
            ],
            [
                "question_id" => 28,
                "answer" => "Menjadi perguruan tinggi yang unggul dan berperan aktif dalam pembangunan Nasional melalui pemberdayaan potensi daerah Kalimantan pada tahun 2025",
                "status" => true
            ],
            [
                "question_id" => 28,
                "answer" => "Menjadi Perguruan Tinggi berkelas dunia yang berkontribusi pada kemandirian bangsa serta menjadi rujukan dalam pendidikan, penelitian, dan pengabdian masyarakat serta pengembangan inovasi terutama yang menunjang industri dan kelautan.",
                "status" => false
            ],
            [
                "question_id" => 28,
                "answer" => "Mendukung ITB menjadi world class university dengan inovasi dan penyediaan sarana teknologi informasi yang akan meningkatkan daya saing institusi",
                "status" => false
            ],
            [
                "question_id" => 28,
                "answer" => "Menjadi universitas yang terdepan dalam menciptakan sumber daya manusia yang berkualitas, berdaya saing, dan mendukung keberlanjutan pembangunan daerah Kalimantan pada tahun 2030.",
                "status" => false
            ],
            [
                "question_id" => 29,
                "answer" => "Beruang Madu",
                "status" => false
            ],
            [
                "question_id" => 29,
                "answer" => "Burung Enggang",
                "status" => true
            ],
            [
                "question_id" => 29,
                "answer" => "Bekantan",
                "status" => false
            ],
            [
                "question_id" => 29,
                "answer" => "Pesut",
                "status" => false
            ],
            [
                "question_id" => 30,
                "answer" => "310 Hektar",
                "status" => false
            ],
            [
                "question_id" => 30,
                "answer" => "250 hektar",
                "status" => false
            ],
            [
                "question_id" => 30,
                "answer" => "300 Hektar",
                "status" => true
            ],
            [
                "question_id" => 30,
                "answer" => "350 Hektar",
                "status" => false
            ]
        ];

        foreach ($items as $item) {
            Answer::create($item);
        }
    }
}

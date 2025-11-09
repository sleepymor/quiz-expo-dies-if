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
                "status" => true
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
                "status" => false
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

            [
                "question_id" => 16,
                "answer" => "10 November 2012",
                "status" => false
            ],
            [
                "question_id" => 16,
                "answer" => "6 Oktober 2014",
                "status" => true
            ],
            [
                "question_id" => 16,
                "answer" => "12 Oktober 2014",
                "status" => false
            ],
            [
                "question_id" => 16,
                "answer" => "1 Januari 2013",
                "status" => false
            ],

            // 17
            [
                "question_id" => 17,
                "answer" => "2010",
                "status" => false
            ],
            [
                "question_id" => 17,
                "answer" => "2011",
                "status" => false
            ],
            [
                "question_id" => 17,
                "answer" => "2012",
                "status" => true
            ],
            [
                "question_id" => 17,
                "answer" => "2014",
                "status" => false
            ],

            // 18
            [
                "question_id" => 18,
                "answer" => "Gedung Rektorat ITK",
                "status" => false
            ],
            [
                "question_id" => 18,
                "answer" => "Gedung SCC",
                "status" => true
            ],
            [
                "question_id" => 18,
                "answer" => "Balikpapan Superblock",
                "status" => false
            ],
            [
                "question_id" => 18,
                "answer" => "Gedung Serbaguna Samarinda",
                "status" => false
            ],

            // 19
            [
                "question_id" => 19,
                "answer" => "Joko Widodo",
                "status" => false
            ],
            [
                "question_id" => 19,
                "answer" => "Megawati Soekarnoputri",
                "status" => false
            ],
            [
                "question_id" => 19,
                "answer" => "Susilo Bambang Yudhoyono",
                "status" => true
            ],
            [
                "question_id" => 19,
                "answer" => "BJ Habibie",
                "status" => false
            ],

            // 20
            [
                "question_id" => 20,
                "answer" => "Menjadi universitas terbaik di Asia Tenggara pada tahun 2030",
                "status" => false
            ],
            [
                "question_id" => 20,
                "answer" => "Menjadi perguruan tinggi unggul di bidang teknologi informasi pada tahun 2020",
                "status" => false
            ],
            [
                "question_id" => 20,
                "answer" => "Menjadi perguruan tinggi yang unggul dan berperan aktif dalam pembangunan nasional melalui pemberdayaan potensi daerah Kalimantan pada tahun 2025",
                "status" => true
            ],
            [
                "question_id" => 20,
                "answer" => "Menjadi politeknik terdepan di Kalimantan pada tahun 2035",
                "status" => false
            ],

            // 21
            [
                "question_id" => 21,
                "answer" => "Menyelenggarakan pendidikan dan penelitian tanpa memperhatikan potensi daerah",
                "status" => false
            ],
            [
                "question_id" => 21,
                "answer" => "Menghasilkan lulusan unggul, berkualitas, berbudi luhur, serta berperan aktif dalam pembangunan nasional",
                "status" => true
            ],
            [
                "question_id" => 21,
                "answer" => "Menghasilkan lulusan yang hanya fokus pada industri internasional",
                "status" => false
            ],
            [
                "question_id" => 21,
                "answer" => "Menjadi universitas yang bebas dari tridharma perguruan tinggi",
                "status" => false
            ],

            // 22
            [
                "question_id" => 22,
                "answer" => "3",
                "status" => false
            ],
            [
                "question_id" => 22,
                "answer" => "4",
                "status" => false
            ],
            [
                "question_id" => 22,
                "answer" => "5",
                "status" => true
            ],
            [
                "question_id" => 22,
                "answer" => "6",
                "status" => false
            ],

            // 23
            [
                "question_id" => 23,
                "answer" => "Teknik Industri",
                "status" => false
            ],
            [
                "question_id" => 23,
                "answer" => "Teknik Informatika",
                "status" => false
            ],
            [
                "question_id" => 23,
                "answer" => "Teknik Sipil",
                "status" => true
            ],
            [
                "question_id" => 23,
                "answer" => "Arsitektur",
                "status" => false
            ],

            // 24
            [
                "question_id" => 24,
                "answer" => "Teknik Mesin",
                "status" => false
            ],
            [
                "question_id" => 24,
                "answer" => "Teknik Elektro",
                "status" => false
            ],
            [
                "question_id" => 24,
                "answer" => "Teknik Kimia",
                "status" => false
            ],
            [
                "question_id" => 24,
                "answer" => "Teknik Industri",
                "status" => true
            ],

            // 25
            [
                "question_id" => 25,
                "answer" => "6 Oktober 2014",
                "status" => false
            ],
            [
                "question_id" => 25,
                "answer" => "10 Oktober 2014",
                "status" => false
            ],
            [
                "question_id" => 25,
                "answer" => "12 Oktober 2014",
                "status" => true
            ],
            [
                "question_id" => 25,
                "answer" => "1 Desember 2014",
                "status" => false
            ],

            // 26
            [
                "question_id" => 26,
                "answer" => "2020",
                "status" => false
            ],
            [
                "question_id" => 26,
                "answer" => "2025",
                "status" => true
            ],
            [
                "question_id" => 26,
                "answer" => "2030",
                "status" => false
            ],
            [
                "question_id" => 26,
                "answer" => "2035",
                "status" => false
            ],

            // 27
            [
                "question_id" => 27,
                "answer" => "Pemerintah asing",
                "status" => false
            ],
            [
                "question_id" => 27,
                "answer" => "Perusahaan teknologi luar negeri",
                "status" => false
            ],
            [
                "question_id" => 27,
                "answer" => "Pemangku kepentingan untuk memberdayakan potensi daerah Kalimantan",
                "status" => true
            ],
            [
                "question_id" => 27,
                "answer" => "Universitas swasta di luar negeri",
                "status" => false
            ],

            // 28
            [
                "question_id" => 28,
                "answer" => "Institut Teknologi Kalimantan",
                "status" => true
            ],
            [
                "question_id" => 28,
                "answer" => "Institut Teknologi Kartanegara",
                "status" => false
            ],
            [
                "question_id" => 28,
                "answer" => "Institut Teknologi Kutai",
                "status" => false
            ],
            [
                "question_id" => 28,
                "answer" => "Institut Teknologi Kaltim",
                "status" => false
            ],

            // 29
            [
                "question_id" => 29,
                "answer" => "Pemberdayaan potensi daerah Kalimantan",
                "status" => true
            ],
            [
                "question_id" => 29,
                "answer" => "Kerja sama internasional semata",
                "status" => false
            ],
            [
                "question_id" => 29,
                "answer" => "Program studi berbasis luar negeri",
                "status" => false
            ],
            [
                "question_id" => 29,
                "answer" => "Mengurangi jumlah prodi yang tersedia",
                "status" => false
            ],

            // 30
            [
                "question_id" => 30,
                "answer" => "Teknik Informatika",
                "status" => false
            ],
            [
                "question_id" => 30,
                "answer" => "Teknik Perkapalan",
                "status" => true
            ],
            [
                "question_id" => 30,
                "answer" => "Arsitektur",
                "status" => false
            ],
            [
                "question_id" => 30,
                "answer" => "Manajemen",
                "status" => false
            ],

        ];

        foreach ($items as $item) {
            Answer::create($item);
        }
    }
}

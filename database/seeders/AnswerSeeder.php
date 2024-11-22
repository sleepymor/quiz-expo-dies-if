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
            [
                "question_id" => 1,
                "answer" => "Institut Teknologi Kalimantan",
                "status" => true
            ],
            [
                "question_id" => 1,
                "answer" => "Institusi Teknologi Kalimantan",
                "status" => false
            ],
            [
                "question_id" => 1,
                "answer" => "Institut Tambang Kalimantan",
                "status" => false
            ],
            [
                "question_id" => 1,
                "answer" => "Intitusi Tambang Kalimantan",
                "status" => false
            ],
            [
                "question_id" => 2,
                "answer" => "Prof. Dr. rer. nat. Agus Rubiyanto, M.Eng.Sc.",
                "status" => true
            ],
            [
                "question_id" => 2,
                "answer" => "Prof. Dr. Ir. Sulistijono, DEA",
                "status" => false
            ],
            [
                "question_id" => 2,
                "answer" => "Ir. Khakim Ghozali, M.MT.",
                "status" => false
            ],
            [
                "question_id" => 2,
                "answer" => "Prof. Erma Suryani, S.T., M.T., Ph. D.",
                "status" => false
            ],
            [
                "question_id" => 3,
                "answer" => "Jl. Soekarno-Hatta Km. 16, Karang Joang, Balikpapan, Kalimantan Timur, 76127",
                "status" => false
            ],
            [
                "question_id" => 3,
                "answer" => "Jl. Soekarno-Hatta Km. 14, Karang Joang, Balikpapan, Kalimantan Timur, 76127",
                "status" => false
            ],
            [
                "question_id" => 3,
                "answer" => "Jl. Soekarno-Hatta Km. 15, Karang Joang, Balikpapan, Kalimantan Timur, 76127",
                "status" => true
            ],
            [
                "question_id" => 3,
                "answer" => "Jl. Soekarno-Hatta Km. 17, Karang Joang, Balikpapan, Kalimantan Timur, 76127",
                "status" => false
            ],
            [
                "question_id" => 4,
                "answer" => "Untuk menjaga diri",
                "status" => false
            ],
            [
                "question_id" => 4,
                "answer" => "Untuk melindungi identitas diri",
                "status" => true
            ],
            [
                "question_id" => 4,
                "answer" => "Terhindar dari hoax",
                "status" => false
            ],
            [
                "question_id" => 4,
                "answer" => "Untuk melindungi identitas teman",
                "status" => false
            ],
            [
                "question_id" => 5,
                "answer" => "HDD , Mouse, Jaringan",
                "status" => false
            ],
            [
                "question_id" => 5,
                "answer" => "CPU,RAM,Motherboard",
                "status" => true
            ],
            [
                "question_id" => 5,
                "answer" => "Data, Monitor, Speaker",
                "status" => false
            ],
            [
                "question_id" => 5,
                "answer" => "word,excel,power point",
                "status" => false
            ],
            [
                "question_id" => 6,
                "answer" => 20,
                "status" => false
            ],
            [
                "question_id" => 6,
                "answer" => 23,
                "status" => false
            ],
            [
                "question_id" => 6,
                "answer" => 21,
                "status" => false
            ],
            [
                "question_id" => 6,
                "answer" => 22,
                "status" => true
            ],
            [
                "question_id" => 7,
                "answer" => "JTSP",
                "status" => false
            ],
            [
                "question_id" => 7,
                "answer" => "JTIP",
                "status" => false
            ],
            [
                "question_id" => 7,
                "answer" => "JIKL",
                "status" => false
            ],
            [
                "question_id" => 7,
                "answer" => "JMTI",
                "status" => true
            ],
            [
                "question_id" => 8,
                "answer" => "Sebagai otak",
                "status" => true
            ],
            [
                "question_id" => 8,
                "answer" => "Penyimpanan",
                "status" => false
            ],
            [
                "question_id" => 8,
                "answer" => "Grafik",
                "status" => false
            ],
            [
                "question_id" => 8,
                "answer" => "Gambar",
                "status" => false
            ],
            [
                "question_id" => 9,
                "answer" => "Asian Indoor Games 2007",
                "status" => true
            ],
            [
                "question_id" => 9,
                "answer" => "Asian Indoor Games 2018",
                "status" => false
            ],
            [
                "question_id" => 9,
                "answer" => "Asian Indoor Games 2012",
                "status" => false
            ],
            [
                "question_id" => 9,
                "answer" => "Asian Indoor Games 2016",
                "status" => false
            ],
            [
                "question_id" => 10,
                "answer" => "Alife",
                "status" => false
            ],
            [
                "question_id" => 10,
                "answer" => "Alive",
                "status" => true
            ],
            [
                "question_id" => 10,
                "answer" => "a live",
                "status" => false
            ],
            [
                "question_id" => 10,
                "answer" => "life",
                "status" => false
            ],
            [
                "question_id" => 11,
                "answer" => "11 tahun",
                "status" => false
            ],
            [
                "question_id" => 11,
                "answer" => "7 tahun",
                "status" => true
            ],
            [
                "question_id" => 11,
                "answer" => "9 tahun",
                "status" => false
            ],
            [
                "question_id" => 11,
                "answer" => "6 tahun",
                "status" => false
            ],
            [
                "question_id" => 12,
                "answer" => "Prof. Erma Suryani S.T., M.T., Ph.D.",
                "status" => true
            ],
            [
                "question_id" => 12,
                "answer" => "Ir. Khakim Ghozali, M.MT.",
                "status" => false
            ],
            [
                "question_id" => 12,
                "answer" => "Yuspian, S.Sos., M.I.R.",
                "status" => false
            ],
            [
                "question_id" => 12,
                "answer" => "Prof. Dr. Ir. Sulistijono, DEA",
                "status" => false
            ],
            [
                "question_id" => 13,
                "answer" => "HTML",
                "status" => true
            ],
            [
                "question_id" => 13,
                "answer" => "Python",
                "status" => false
            ],
            [
                "question_id" => 13,
                "answer" => "Javascript",
                "status" => false
            ],
            [
                "question_id" => 13,
                "answer" => "C++",
                "status" => false
            ],
            [
                "question_id" => 14,
                "answer" => "Memblokir ads",
                "status" => false
            ],
            [
                "question_id" => 14,
                "answer" => "Menggunakan Antivirus",
                "status" => true
            ],
            [
                "question_id" => 14,
                "answer" => "Menggunakan vpn",
                "status" => false
            ],
            [
                "question_id" => 14,
                "answer" => "Menjalankan pemindaian rutin pada komputer",
                "status" => false
            ],
            [
                "question_id" => 15,
                "answer" => "sebuah perangkat untuk bermain game",
                "status" => true
            ],
            [
                "question_id" => 15,
                "answer" => "antarmuka yang paling sederhana untuk berinteraksi dengan komputer.",
                "status" => false
            ],
            [
                "question_id" => 15,
                "answer" => "sebuah permainan elektronik",
                "status" => false
            ],
            [
                "question_id" => 15,
                "answer" => "Sebuah alat untuk mengetik perintah pada komputer",
                "status" => false
            ],
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

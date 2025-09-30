<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eskul = [
            [ // card 1
                'judul' => 'English Club',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ec.BQTqDsuh.jpg',
                'deskripsi' => 'Melatih kemampuan berbahasa Inggris melalui diskusi, debat, dan kegiatan interaktif lainnya.',
            ],
            [ // card 2
                'judul' => 'Safety Riding',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/it.BYa_G51_.jpg',
                'deskripsi' => 'Melatih kemampuan bermotor',
            ],
            [ // card 3
                'judul' => 'Perisai Diri',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pd.BUD6DakP.jpg',
                'deskripsi' => 'Ekstrakurikuler seni bela diri tradisional untuk melatih fisik dan mental sekaligus menjaga warisan budaya',
            ],
            [ // card 4
                'judul' => 'Bulu Tangkis',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/bultang.dnbauifs.jpg',
                'deskripsi' => 'Meningkatkan kemampuan bermain bulu tangkis sambil menjaga kesehatan dan semangat sportivitas',
            ],
            [ // card 5
                'judul' => 'Futsal',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/futsal.BLhIBqzK.jpg',
                'deskripsi' => 'Melatih keterampilan bermain futsal dengan fokus pada kerjasama tim dan strategi permainan',
            ],
            [ // card 6
                'judul' => 'Cinematografi',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/cineam.BSgSd7Nd.jpg',
                'deskripsi' => 'Mengajarkan seni pembuatan film, mulai dari pengambilan gambar, editing, hingga produksi video kreatif',
            ],
            [ // card 7
                'judul' => 'Pramuka',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pramuk.DwXMHsR8.jpg',
                'deskripsi' => 'Mengembangkan karakter, keterampilan, dan rasa tanggung jawab melalui kegiatan kepramukaan',
            ],
            [ // card 8
                'judul' => 'PMR',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pmr.BOmGoy_Q.jpg',
                'deskripsi' => 'Melatih siswa untuk siap siaga dalam memberikan pertolongan pertama dan kegiatan kemanusiaan',
            ],
            [ // card 9
                'judul' => 'PKS',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ks.CXv3QUJt.jpg',
                'deskripsi' => 'Menanamkan disiplin dan tanggung jawab untuk menjaga ketertiban di lingkungan sekolah',
            ],
            [ // card 10
                'judul' => 'Seni',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/seni.Vv4aX6zv.jpg',
                'deskripsi' => 'Mengeksplorasi bakat seni siswa, seperti tari, musik, dan teater',
            ],
            [ // card 11
                'judul' => 'Paskibra',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/paskib.D4NzW5Pg.jpg',
                'deskripsi' => 'Melatih keterampilan baris-berbaris serta menanamkan semangat kebangsaan dan kedisiplinan',
            ],
            [ // card 12
                'judul' => 'PLH',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/plh.BJVb1d8R.jpg',
                'deskripsi' => 'Mengedukasi tentang pelestarian lingkungan melalui berbagai kegiatan ramah lingkungan',
            ],
            [ // card 13
                'judul' => 'Laskar Pustaka',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/laskar.CeBn1OtK.jpg',
                'deskripsi' => 'Meningkatkan minat baca dan pengelolaan perpustakaan untuk mendukung literasi siswa',
            ],
            [ // card 14
                'judul' => 'Sepak Bola',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/sepak.Bn50BOOv.jpg',
                'deskripsi' => 'Mengembangkan keterampilan bermain sepak bola sambil meningkatkan daya tahan fisik dan kerjasama tim',
            ],
            [ // card 15
                'judul' => 'Voli',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/voli.CWmBNJvq.jpg',
                'deskripsi' => 'Melatih kemampuan bermain voli dengan fokus pada teknik dan kerja sama tim',
            ],
            [ // card 16
                'judul' => 'Basket',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/bskt.c2-G4Eus.jpg',
                'deskripsi' => 'Mengasah keterampilan bermain bola basket dan membangun jiwa kompetitif yang sehat',
            ],
            [ // card 17
                'judul' => 'Rohis',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/rohis.D44E_ZGr.jpg',
                'deskripsi' => 'Menanamkan nilai-nilai keagamaan Islam melalui kajian, diskusi, dan kegiatan ibadah bersama',
            ],
            [ // card 18
                'judul' => 'Boxing',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/boxi.B17rqw08.jpg',
                'deskripsi' => 'Melatih teknik tinju untuk kebugaran fisik, kepercayaan diri, dan pengendalian diri',
            ]
        ];

        DB::table('eskuls')->insert($eskul);
    }
}

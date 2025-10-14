<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $berita = [
            [
                'gambar' => 'https://asset.kompas.com/crops/HVv0q6xGbJDFT4SQXXEb3VWoWDg=/0x0:0x0/1200x800/data/photo/2024/07/24/66a07447032c2.jpg',
                'judul' => 'Cegah Geng Motor, SMKN di Tasikmalaya Luncurkan Ekstrakurikuler Unik',
                'link' => '/berita3',
            ],
            [
                'gambar' => 'https://asset-2.tribunnews.com/jabar/foto/bank/images/technical-trainer-sub-dept-head-dam-ade-rohman-kanan-memegang-naskah-mou.jpg',
                'judul' => 'DAM Kerjasama dengan SMKN 4 Tasikmalaya Terapkan KTBSM',
                'link' => '/berita4',
            ],
            [
                'gambar' => 'https://img.inews.co.id/media/600/files/networks/2024/10/07/e5a0d_penyuluhan.jpg',
                'judul' => 'Sosialisai oleh Polsek Cibeureum di SMKN 4 Kota Tasikmalaya',
                'link' => '/berita5',
            ]
        ];

        DB::table('beritas')->insert($berita);
    }
}

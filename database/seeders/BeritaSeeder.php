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
                'link' => 'https://bandung.kompas.com/read/2024/07/24/115239678/cegah-geng-motor-smkn-di-tasikmalaya-luncurkan-ekstrakurikuler-unik',
            ],
            [
                'gambar' => 'https://asset-2.tribunnews.com/jabar/foto/bank/images/technical-trainer-sub-dept-head-dam-ade-rohman-kanan-memegang-naskah-mou.jpg',
                'judul' => 'DAM Kerjasama dengan SMKN 4 Tasikmalaya Terapkan KTBSM Sepeda Motor Astra Honda',
                'link' => 'https://jabar.tribunnews.com/2023/03/02/sinergi-bagi-negeri-dam-kerjasama-dengan-smkn-4-tasikmalaya-terapkan-ktbsm-sepeda-motor-astra-honda',
            ],
            [
                'gambar' => 'https://img.inews.co.id/media/600/files/networks/2024/10/07/e5a0d_penyuluhan.jpg',
                'judul' => 'Polsek Cibeureum Sosialisasikan Larangan Knalpot Brong dan Geng Motor di SMKN 4 Kota Tasikmalaya',
                'link' => 'https://tasikmalaya.inews.id/read/502735/polsek-cibeureum-sosialisasikan-larangan-knalpot-brong-dan-geng-motor-di-smkn-4-kota-tasikmalaya',
            ]
        ];

        DB::table('beritas')->insert($berita);
    }
}

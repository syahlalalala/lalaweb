<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galeri = [
            [
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbjMG7ZQjil5gkx1VAeoc3HEJRfNhDctDxlw&s',
                'judul' => 'Peresmian SRL'
            ],
            [
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi_B81dZw7KnwT-7HpVpZuKs_22lafGQd4f_295rDd8BlfAdZr8MqBY51eTFsqITrvkEo&usqp=CAU',
                'judul' => 'Pembinaan oleh Kapolsek'
            ],
            [
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY8cMC8umHQctANOds6PUmrG9MieCldoo3pg&s',
                'judul' => 'Job Fair'
            ],
            [
                'gambar' => 'https://asset-2.tribunnews.com/jabar/foto/bank/images/Safety-Riding-Lab-Astra-Honda-ke-7-yang-berlokasi-di-Kota-Tasikmalaya.jpg',
                'judul' => 'Safety Riding Lab'
            ],
            [
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDRj54xV9WF3fkKAuE3ftdWRc9G3eVXtMC-A&s',
                'judul' => 'Job Fair'
            ],
            [
                'gambar' => 'https://assets.radartasik.id/main/2024/10/SMKN-4-tasikmalaya-raih-beasiswa-AHM.webp',
                'judul' => 'Beasiswa AHM'
            ],
            [
                'gambar' => 'https://asset-2.tribunnews.com/priangan/foto/bank/images/peresmian-SRL-Astra-Honda.jpg',
                'judul' => 'Peresmian SRL'
            ],
            [
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSVGcODAxmNy05L7uD9lIu4kBCux-HZGbL00a7BfegY18vGtbA7_rmF9q_xMIICNK0jNE&usqp=CAU',
                'judul' => 'Job Fair'
            ],
            [
                'gambar' => 'https://lh3.googleusercontent.com/pw/AP1GczNYNn2lImNNgIwMgFJdrP-xre00E4rOEpVdseBnRB4P70fz8G1x2e1IM8M6A_Tywmh4wadSjGMfjVP5CEzBHWd2Q2dOCH-0ryA6vc1BqNHIoGO6T7nn-mbqNmF_vmUZN1xaVoJLdF0GDueI1rilUrlM=w1680-h945-s-no-gm?authuser=0',
                'judul' => 'Jalan Sehat'
            ]
        ];
        DB::table('galeris')->insert($galeri);
    }
}

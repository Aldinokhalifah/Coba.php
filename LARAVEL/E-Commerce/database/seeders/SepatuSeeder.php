<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sepatus')-> insert([
        [   'nama' => 'StrideMaster',
            'tanggal' => '12 Januari 2023',
            'keterangan' => 'Sneakers ini dirancang untuk kenyamanan maksimal dengan teknologi penyerapan guncangan yang canggih. Cocok untuk aktivitas sehari-hari dan olahraga ringan.',
            'harga' => '250.000',
            'foto' => 'assets/blogAssets/assets/sepatu1.jpg'
        ],
        [   'nama' => 'UrbanFlex ',
            'tanggal' => ' 5 Maret 2022',
            'keterangan' => ' Sneakers kasual dengan desain modern dan fleksibel, ideal untuk gaya hidup urban. Dilengkapi dengan sol yang empuk untuk kenyamanan sepanjang hari.',
            'harga' => '200.000',
            'foto' => 'assets/blogAssets/assets/sepatu2.jpg',
        ],
        [   'nama' => 'AeroStep',
            'tanggal' => '18 Juni 2024',
            'keterangan' => 'Sneakers ringan dengan desain aerodinamis yang meningkatkan performa. Cocok untuk aktivitas olahraga dan gaya hidup aktif.',
            'harga' => '450.000',
            'foto' => 'assets/blogAssets/assets/sepatu3.jpg',
        ],
        [   'nama' => 'PeakPerformance ',
            'tanggal' => '27 September 2021',
            'keterangan' => 'Sneakers yang dirancang untuk mendukung aktivitas outdoor dengan daya tahan tinggi dan kenyamanan ekstra. Sol yang kuat memastikan pijakan yang stabil di berbagai medan.',
            'harga' => '350.000',
            'foto' => 'assets/blogAssets/assets/sepatu4.jpg',
        ],
        [   'nama' => 'SwiftStride',
            'tanggal' => '14 Februari 2023',
            'keterangan' => 'Sneakers dengan desain ergonomis yang mendukung kecepatan dan kelincahan. Ideal untuk pelari dan mereka yang aktif bergerak',
            'harga' => '300.000',
            'foto' => 'assets/blogAssets/assets/sepatu5.jpg',
        ],
        [   'nama' => 'EcoWalk',
            'tanggal' => '30 November 2022',
            'keterangan' => ' Sneakers ramah lingkungan yang terbuat dari bahan daur ulang. Nyaman untuk berjalan kaki dan mendukung gaya hidup berkelanjutan.',
            'harga' => '400.000',
            'foto' => 'assets/blogAssets/assets/sepatu6.jpg',
        ],
        [   'nama' => 'VelocityVibe ',
            'tanggal' => '22 Juli 2024',
            'keterangan' => 'Sneakers dengan teknologi canggih untuk meningkatkan kecepatan dan stabilitas. Cocok untuk latihan intensif dan olahraga kompetitif.',
            'harga' => '500.000',
            'foto' => 'assets/blogAssets/assets/sepatu7.jpg',
        ],
        [   'nama' => 'ComfortCush',
            'tanggal' => '9 Oktober 2021',
            'keterangan' => 'Sneakers sehari-hari dengan bantalan ekstra untuk kenyamanan maksimal. Desainnya yang stylish membuatnya cocok untuk berbagai kesempatan.',
            'harga' => '250.000',
            'foto' => 'assets/blogAssets/assets/sepatu8.jpg',
        ],
        ]);
    }
}

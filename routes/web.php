<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'umkm_name' => 'Seblak Kering Seuhah',
        'description' => 'Cemilan pedas renyah dengan bumbu rempah daun jeruk pilihan. Teman ngemil pas nugas atau santai!',
        'variants' => [
            [
                'nama' => 'Original Daun Jeruk',
                'level' => 'Tidak Pedas',
                'harga' => 'Rp 10.000',
                'gambar' => 'https://dummyimage.com/300x200/a9a9a9/ffffff.png&text=Seblak+Original'
            ],
            [
                'nama' => 'Pedas Santai',
                'level' => 'Level 1',
                'harga' => 'Rp 10.000',
                'gambar' => 'https://dummyimage.com/300x200/a9a9a9/ffffff.png&text=Pedas+Santai'
            ],
            [
                'nama' => 'Pedas Gila',
                'level' => 'Level 3',
                'harga' => 'Rp 12.000',
                'gambar' => 'https://dummyimage.com/300x200/a9a9a9/ffffff.png&text=Pedas+Gila'
            ],
            [
                'nama' => 'Ekstra Balado',
                'level' => 'Level 5 (Maksimal)',
                'harga' => 'Rp 15.000',
                'gambar' => 'https://dummyimage.com/300x200/a9a9a9/ffffff.png&text=Ekstra+Balado'
            ]
        ]
    ];

    return view('home', $data);
});
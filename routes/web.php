<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'umkm_name' => 'Tie\'s Seblak Kering',
        'description' => 'Cemilan pedas renyah dengan bumbu rempah daun jeruk pilihan. Teman ngemil pas santai atau momen istimewa!',
        'variants' => [
            [
                'nama' => 'Original Daun Jeruk',
                'level' => 'Tidak Pedas',
                'harga' => 'Rp 10.000',
                'gambar' => 'https://media.discordapp.net/attachments/1099859505891790959/1486340916598804510/katalog.png?ex=69c52659&is=69c3d4d9&hm=7d818cb5bb462c09f5b0233958222fad58f0e1ae465ebafb43483246936804e5&=&format=webp&quality=lossless&width=1309&height=878'
            ],
            [
                'nama' => 'Pedas Santai',
                'level' => 'Level 1',
                'harga' => 'Rp 10.000',
                'gambar' => 'https://media.discordapp.net/attachments/1099859505891790959/1486340916598804510/katalog.png?ex=69c52659&is=69c3d4d9&hm=7d818cb5bb462c09f5b0233958222fad58f0e1ae465ebafb43483246936804e5&=&format=webp&quality=lossless&width=1309&height=878'
            ],
            [
                'nama' => 'Pedas Gila',
                'level' => 'Level 3',
                'harga' => 'Rp 12.000',
                'gambar' => 'https://media.discordapp.net/attachments/1099859505891790959/1486340916598804510/katalog.png?ex=69c52659&is=69c3d4d9&hm=7d818cb5bb462c09f5b0233958222fad58f0e1ae465ebafb43483246936804e5&=&format=webp&quality=lossless&width=1309&height=878'
            ],
            [
                'nama' => 'Ekstra Balado',
                'level' => 'Level 5 (Maksimal)',
                'harga' => 'Rp 15.000',
                'gambar' => 'https://media.discordapp.net/attachments/1099859505891790959/1486340916598804510/katalog.png?ex=69c52659&is=69c3d4d9&hm=7d818cb5bb462c09f5b0233958222fad58f0e1ae465ebafb43483246936804e5&=&format=webp&quality=lossless&width=1309&height=878'
            ]
        ]
    ];

    return view('home', $data);
});
## 🌶️ Tentang Proyek Ini

**UMKM Seblak Kering** adalah website profil dan katalog produk digital untuk usaha camilan seblak kering. Website ini dibangun menggunakan framework Laravel dengan tampilan modern, responsif, dan berkarakter — dirancang khusus untuk memperkenalkan produk, menampilkan varian rasa, serta memudahkan pelanggan melakukan pemesanan langsung via WhatsApp.

Fitur utama website ini meliputi:

- Halaman beranda dengan hero carousel interaktif dan statistik usaha
- Katalog varian rasa yang ditampilkan secara dinamis dari data Laravel
- Trust bar untuk membangun kepercayaan pelanggan
- Integrasi pemesanan langsung via WhatsApp
- Navbar sticky transparan dengan efek blur
- Footer informatif dengan tautan sosial media
- Desain responsif untuk mobile, tablet, dan desktop

## 📁 Struktur File

```
resources/
├── css/
│   └── app.css              # Seluruh styling kustom + konfigurasi Tailwind
├── views/
│   ├── layouts/
│   │   └── app.blade.php    # Layout utama (wrapper HTML)
│   ├── partials/
│   │   ├── navbar.blade.php # Komponen navigasi
│   │   └── footer.blade.php # Komponen footer
│   └── home.blade.php       # Halaman beranda
```

## 🚀 Cara Instalasi

### Prasyarat

Pastikan sistem kamu sudah memiliki:

- PHP >= 8.2
- Composer
- Node.js >= 18.x & NPM
- Database (MySQL / SQLite)

### Langkah Instalasi

**1. Clone repository**
```bash
git clone https://github.com/username/umkm-seblak-kering.git
cd umkm-seblak-kering
```

**2. Install dependensi PHP**
```bash
composer install
```

**3. Salin file environment dan generate app key**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Install dependensi Node dan build aset**
```bash
npm install
npm run dev
```

**5. Jalankan server development**
```bash
php artisan serve
```

Buka browser dan akses `http://localhost:8000`.

## ⚙️ Konfigurasi

### Environment (`.env`)

Sesuaikan variabel berikut di file `.env`:

```env
APP_NAME="UMKM Seblak Kering"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=umkm_seblak
DB_USERNAME=root
DB_PASSWORD=
```

### Data Produk

Data varian rasa saat ini dikelola langsung di Route atau Controller. Contoh struktur data:

```php
$variants = [
    [
        'nama'   => 'Original',
        'level'  => 'Level 1 🌶️',
        'harga'  => 'Rp 15.000',
        'gambar' => 'https://...',
    ],
    [
        'nama'   => 'Extra Pedas',
        'level'  => 'Level 5 🔥',
        'harga'  => 'Rp 18.000',
        'gambar' => 'https://...',
    ],
];
```

### Nomor WhatsApp

Ganti nomor WhatsApp pemesanan di file-file berikut:

| File | Lokasi |
|---|---|
| `navbar.blade.php` | Tombol *Pesan Sekarang* |
| `home.blade.php` | Tombol hero, tombol beli per produk, tombol CTA |
| `footer.blade.php` | Tombol *Hubungi Kami* |

Cari dan ganti `6281234567890` dengan nomor aktif Anda.

## 🎨 Desain & Styling

Seluruh CSS kustom berada dalam satu file terpusat: `resources/css/app.css`.

### CSS Variables

```css
:root {
    --fire-red    : #E8170A;
    --fire-orange : #F97316;
    --fire-yellow : #FBBF24;
    --dark-coal   : #111111;
    --warm-cream  : #FFF8F0;
}
```

### Tipografi

| Jenis | Font | Kegunaan |
|---|---|---|
| Display | **Syne 800** | Judul, brand, heading besar |
| Body | **DM Sans 400–500** | Paragraf, label, tombol |

Font diambil dari Google Fonts dan di-import di bagian atas `app.css`.

### Komponen Utama

- **Navbar** — sticky transparan, backdrop blur, animasi logo berkedip
- **Hero Carousel** — full viewport height, overlay gradient, stat bar
- **Product Card** — hover animasi naik, glow bar, badge level pedas
- **CTA Section** — gradient merah dengan dot pattern
- **Footer** — dark premium, social buttons, glow radial

## 🛠️ Stack Teknologi

| Teknologi | Versi | Keterangan |
|---|---|---|
| [Laravel](https://laravel.com) | 11.x | Framework PHP backend |
| [Tailwind CSS](https://tailwindcss.com) | 4.x | Utility-first CSS framework |
| [Bootstrap](https://getbootstrap.com) | 5.x | Komponen UI (carousel, grid, navbar) |
| [Vite](https://vitejs.dev) | 5.x | Build tool & asset bundler |
| [Google Fonts](https://fonts.google.com) | — | Syne & DM Sans |

## 📱 Responsivitas

Website dioptimalkan untuk semua ukuran layar menggunakan grid Bootstrap dan breakpoint Tailwind:

| Breakpoint | Tampilan Produk |
|---|---|
| `< 576px` (Mobile) | 1 kolom |
| `≥ 576px` (SM) | 2 kolom |
| `≥ 768px` (MD) | 2 kolom |
| `≥ 1200px` (XL) | 4 kolom |

## 📞 Kontak & Pemesanan

Pemesanan dilayani melalui WhatsApp. Tombol pemesanan di seluruh halaman akan otomatis membuka chat WhatsApp dengan pesan pre-filled sesuai produk yang dipilih.

```
WhatsApp : 0812-3456-7890
```

## 🤝 Kontribusi

Kontribusi sangat terbuka! Jika ingin menambahkan fitur atau memperbaiki bug:

1. Fork repository ini
2. Buat branch baru (`git checkout -b fitur/nama-fitur`)
3. Commit perubahan (`git commit -m 'Tambah fitur X'`)
4. Push ke branch (`git push origin fitur/nama-fitur`)
5. Buat Pull Request

## 📄 Lisensi

Proyek ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT) — bebas digunakan, dimodifikasi, dan didistribusikan.

---

<p align="center">Dibuat dengan ❤️ &amp; 🌶️ di Indonesia</p>
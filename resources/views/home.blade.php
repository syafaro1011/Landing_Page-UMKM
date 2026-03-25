@extends('layouts.app')

@section('title', 'Beranda - ' . $umkm_name)

@section('content')

    {{-- ═══════════════════════════════════════════════
    HERO SECTION
    ════════════════════════════════════════════════ --}}
    <section class="hero-section position-relative overflow-hidden">
        {{-- Animated background gradient --}}
        <div class="hero-bg-gradient"></div>
        <div class="hero-noise"></div>

        <div id="heroCarousel" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner h-100">

                {{-- Slide 1 --}}
                <div class="carousel-item active h-100">
                    <div class="hero-slide"
                        style="background-image: url('https://media.discordapp.net/attachments/1099859505891790959/1486323847052529795/seblak1400-700.png?ex=69c51673&is=69c3c4f3&hm=94e32752f4dac6cf79ec8ad31aa25fa034ce786ede7b9f88550de571ea5df2d1&=&format=webp&quality=lossless&width=1427&height=706')">
                        <div class="hero-overlay"></div>
                        <div class="container h-100 d-flex align-items-center">
                            <div class="hero-content">
                                <span class="hero-badge">🌶️ Produk Unggulan</span>
                                <h1 class="hero-title">{{ $umkm_name }}</h1>
                                <p class="hero-desc">{{ $description }}</p>
                                <div class="d-flex gap-3 mt-4 flex-wrap">
                                    <a href="#produk" class="btn-hero-primary">
                                        Lihat Katalog
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                        </svg>
                                    </a>
                                    <a href="https://wa.me/6285221405030" target="_blank" class="btn-hero-ghost">Pesan via
                                        WA</a>
                                </div>
                                <div class="hero-stats mt-5">
                                    <div class="stat-item">
                                        <span class="stat-number">1000+</span>
                                        <span class="stat-label">Pelanggan Puas</span>
                                    </div>
                                    <div class="stat-divider"></div>
                                    <div class="stat-item">
                                        <span class="stat-number">2</span>
                                        <span class="stat-label">Varian Rasa</span>
                                    </div>
                                    <div class="stat-divider"></div>
                                    <div class="stat-item">
                                        <span class="stat-number">⭐ 4.9</span>
                                        <span class="stat-label">Rating Pelanggan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item h-100">
                    <div class="hero-slide"
                        style="background-image: url('https://media.discordapp.net/attachments/1099859505891790959/1486327467156312094/bumbu1400-700.png?ex=69c519d2&is=69c3c852&hm=d7cf3313847043fde1df339b2a0aa30f2bfd6821483b282f368f2566c843a867&=&format=webp&quality=lossless&width=1427&height=706')">
                        <div class="hero-overlay"></div>
                        <div class="container h-100 d-flex align-items-center">
                            <div class="hero-content">
                                <span class="hero-badge">🔥 Best Seller</span>
                                <h1 class="hero-title">Renyah, Pedas,<br><em>Nagih!</em></h1>
                                <p class="hero-desc">Diproduksi dengan bahan berkualitas tinggi dan proses higienis yang
                                    terjamin.</p>
                                <div class="d-flex gap-3 mt-4 flex-wrap">
                                    <a href="#produk" class="btn-hero-primary">
                                        Coba Sekarang
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Controls --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="custom-carousel-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="custom-carousel-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </span>
            </button>

            {{-- Indicators --}}
            <div class="hero-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="hero-dot active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" class="hero-dot"></button>
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
    TRUST BAR
    ════════════════════════════════════════════════ --}}
    <div class="trust-bar">
        <div class="container">
            <div class="trust-inner">
                <div class="trust-item">
                    <span class="trust-icon">✅</span>
                    <span>100% Bahan Alami</span>
                </div>
                <div class="trust-sep">·</div>
                <div class="trust-item">
                    <span class="trust-icon">🏭</span>
                    <span>Produksi Higienis</span>
                </div>
                <div class="trust-sep">·</div>
                <div class="trust-item">
                    <span class="trust-icon">🍜</span>
                    <span>2 Varian Rasa</span>
                </div>
                <div class="trust-sep">·</div>
                <div class="trust-item">
                    <span class="trust-icon">🌶️</span>
                    <span>Level Pedas Beragam</span>
                </div>
                <div class="trust-sep">·</div>
                <div class="trust-item">
                    <span class="trust-icon">✅</span>
                    <span>Bersertifikat Halal</span>
                </div>
                <div class="trust-sep">·</div>
                <div class="trust-item">
                    <span class="trust-icon">🚀</span>
                    <span>Pengiriman Cepat</span>
                </div>
            </div>
        </div>
    </div>


    {{-- ═══════════════════════════════════════════════
    PRODUCT CATALOG
    ════════════════════════════════════════════════ --}}
    <section class="catalog-section" id="produk">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Menu Kami</span>
                <h2 class="section-title">Katalog <span class="text-fire">Varian Rasa</span></h2>
                <p class="section-desc">Pilih varian rasa dan level pedas yang sesuai dengan keberanianmu! Dari yang ringan hingga yang
                    bikin nangis bahagia 🥵</p>
            </div>

            <div class="row g-4">
                @foreach ($variants as $variant)
                    <div class="col-xl-3 col-md-6">
                        <div class="product-card">
                            {{-- Card glow --}}
                            <div class="product-glow"></div>

                            {{-- Image container --}}
                            <div class="product-img-wrap">
                                <img src="{{ $variant['gambar'] }}" alt="{{ $variant['nama'] }}" class="product-img">
                                <div class="product-level-badge">{{ $variant['level'] }}</div>
                            </div>

                            {{-- Body --}}
                            <div class="product-body">
                                <h5 class="product-name">{{ $variant['nama'] }}</h5>
                                <p class="product-price">{{ $variant['harga'] }}</p>

                                <a href="https://wa.me/6285221405030?text=Halo, saya mau pesan {{ urlencode($variant['nama']) }}"
                                    target="_blank" class="btn-buy">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ═══════════════════════════════════════════════
    CTA BANNER
    ════════════════════════════════════════════════ --}}
    <section class="cta-section">
        <div class="cta-pattern"></div>
        <div class="container position-relative">
            <div class="cta-inner">
                <div>
                    <h3 class="cta-title">Siap Cobain Level Pedas Tertinggi?</h3>
                    <p class="cta-sub">Pesan sekarang via WhatsApp dan dapatkan free ongkir untuk pembelian pertama!</p>
                </div>
                <a href="https://wa.me/6285221405030" target="_blank" class="btn-cta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592z" />
                    </svg>
                    Hubungi Kami di WhatsApp
                </a>
            </div>
        </div>
    </section>

@endsection
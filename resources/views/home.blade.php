@extends('layouts.app')

@section('title', 'Beranda - ' . $umkm_name)

@section('content')
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=1200&h=400&fit=crop"
                    class="d-block w-100" alt="Banner 1" style="height: 60vh; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                    <h1 class="fw-bold">{{ $umkm_name }}</h1>
                    <p class="lead">{{ $description }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1564834724105-918b73d1b9e0?w=1200&h=400&fit=crop"
                    class="d-block w-100" alt="Banner 2" style="height: 60vh; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                    <h1 class="fw-bold">Renyah, Pedas, Nagih!</h1>
                    <p class="lead">Diproduksi dengan bahan berkualitas dan higienis.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5" id="produk">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-danger">Katalog Varian Rasa</h2>
            <p class="text-muted">Pilih level pedas yang sesuai dengan keberanianmu!</p>
        </div>

        <div class="row g-4">
            {{-- Looping data varian rasa dari Route --}}
            @foreach ($variants as $variant)
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 shadow-sm border-0 border-bottom border-danger border-3 hover-shadow">
                        <img src="{{ $variant['gambar'] }}" class="card-img-top p-3 rounded" alt="{{ $variant['nama'] }}"
                            style="object-fit: contain; height: 150px;">

                        <div class="card-body text-center mt-3">
                            <h5 class="card-title fw-bold text-dark">{{ $variant['nama'] }}</h5>
                            <span class="badge bg-warning text-dark mb-3">{{ $variant['level'] }}</span>
                            <h4 class="card-text text-danger">{{ $variant['harga'] }}</h4>
                        </div>
                        <div class="card-footer bg-white border-0 pb-4 text-center">
                            <button class="btn btn-outline-danger w-75 rounded-pill">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
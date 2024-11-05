<x-app-layout title="Home">
    @push('styles')
        <link rel="stylesheet" href="/css/home.css">
    @endpush

    <!-- hero-section -->
    <section class="page-1" id="page-1">
        <div class="page-1-content">
            <h3>MENGENAL LEBIH DALAM BATIK NUSANTARA</h3>
            <h5>Mari pelajari sejarah, keunikan, nilai-nilai serta berbagai jenis batik yang ada di Indonesia lebih
                dalam lagi.</h5>
            <button class="page-1-btn" onclick="location.href='#page-3'">
                Mulai pelajari
                <span class="icon-btn">
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </span>

            </button>
        </div>
    </section>

    <!-- Jenis -->
    <section class="page-3" id="page-3">
        <div class="page-3-judul">
            <h4>Jenis Jenis Batik</h4>
            <button class="btn-lihat" onclick="location.href='{{ route('jenisPage')}}'">
                Lihat semua
                <ion-icon name="chevron-forward"></ion-icon>
            </button>
        </div>

        <div class="container-jenis">
            @foreach ($batiks as $b )
                <div class="kotak-jenis">
                    <img src="/storage/{{ $b->picture }}" alt="">
                    <div class="kotak-jenis-content">
                        <div class="kotak-jenis-judul">
                            <h5 class="judul-jenis">{{ $b->name }}</h5>
                            <p class="sub-jenis">{{ $b->asal }}</p>
                        </div>
                        <p class="text-jenis">{{ $b->deskripsi }}</p>
                        <div class="baris-harga">
                            <div class="harga">
                                <p class="sub-harga">Harga Terendah</p>
                                <p class="text-harga">{{ $b->harga_terendah}}</p>
                            </div>
                            <div class="harga">
                                <p class="sub-harga">Harga Tertinggi</p>
                                <p class="text-harga">{{ $b->harga_tertinggi}}</p>
                            </div>
                        </div>
                    </div>
                </div> 
            @endforeach
            
        </div>
        <button class="btn-lihat-mobile" onclick="location.href='{{ route('jenisPage')}}'">
            Lihat semua
            <ion-icon name="chevron-forward"></ion-icon>
        </button>
    </section>

    @push('scripts')
        <script src="/js/home.js"></script>
    @endpush
</x-app-layout>
<x-app-layout title="Jenis">
    @push('styles')
        <link rel="stylesheet" href="/css/jenis.css">
    @endpush

    <!-- Hero Section -->
    <section class="page-1 " id="page-1">
        <div class="page-1-content">
            <h5>Jenis</h5>
            <h3>KENALI BERBAGAI JENIS Motif BATIK NUSANTARA</h3>
            <div class="page-2-judul">
                <ion-icon name="sparkles-sharp"></ion-icon>
                <p>Batik Indonesia memiliki beragam jenis motif yang membedakan satu sama lainnya dengan ciri khasnnya
                    masing-masing.</p>
            </div>
            <!-- <img src="../Aset/Hero-Banner/Banner-Kawung.png" alt="" class="banner"> -->
        </div>
    </section>

    <!-- Main Page -->
    <section class="page-2" id="page-2">
        <!-- search bar -->
        <div class="container-search">
            <input type="text" id="searchBar" placeholder="Cari Batik">
            <div class="icon-search" onclick="searching()">
                <ion-icon name="search"></ion-icon>
                <p>Search</p>
            </div>
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
    </section>

    @push('scripts')
        <script src="/js/jenis.js"></script>
    @endpush
</x-app-layout>
<x-app-layout title="Tentang">
    @push('styles')
        <link rel="stylesheet" href="/css/tentang.css">
    @endpush

    <!-- Hero Section -->
    <section class="page-1 " id="page-1">
        <div class="page-1-content">
            <h5>Tentang</h5>
            <h3>KENALI PROFILE PEMBUAT BATIK JOURNEY</h3>
            <div class="page-2-judul">
                <ion-icon name="sparkles-sharp"></ion-icon>
                <p>Website Batik Journey dibuat oleh seorang remaja yang saat ini berusia 17 tahun dan bersekolah di SMK
                    Negeri 1 Purwokerto.</p>
            </div>
            <!-- <img src="../Aset/Hero-Banner/Banner-Kawung.png" alt="" class="banner"> -->
        </div>
    </section>

    <!-- Main Page -->
    <section class="page-2" id="page-2">
        <div class="container-profile">

            <div class="kotak-profile">
                <span>NIS</span>
                <p>20255</p>
            </div>
            <div class="kotak-profile">
                <span>Nama</span>
                <p>Zaranggi Raushan Rahbari</p>
            </div>

            <div class="kotak-profile">
                <span>Kelas</span>
                <p>XII PPLG 2</p>
            </div>

            <div class="kotak-profile">
                <span>Sekolah</span>
                <p>SMK Negeri 1 Purwokerto</p>
            </div>

            <div class="kotak-profile">
                <span>Hobi</span>
                <p>Membaca, Mendesain, Ngoding</p>
            </div>

            <div class="kotak-profile">
                <span>Motto</span>
                <p>Jangan Menahan Diri</p>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="/js/tentang.js"></script>
    @endpush
</x-app-layout>
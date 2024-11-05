<x-app-layout title="Edit Batik">
    @push('styles')
        <link rel="stylesheet" href="/css/form.css">
    @endpush

    <section id="page-1" class="page-1" >
        <div class="title">
            <p>Edit</p>
            <div class="title-row">
                <h2>Jenis Batik</h2>
                <button class="btn-create" onclick="location.href='{{ route('dashboard.index')}}'" type="button">Back</button>
            </div>
        </div>

        <div class="container">
            <form action="{{route('dashboard.update', $batik)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="kotak">
                    <div class="baris-form">
                        <div class="baris">
                            <div class="baris-baris">
                                <label for="name">Nama Batik</label>
                                <input type="text" name="name" id="name" placeholder="Masukkan Nama" value="{{$batik->name}}">
                            </div>
    
                            <div class="baris-baris">
                                <label for="asal">Asal Batik</label>
                                <input type="text" name="asal" id="asal" placeholder="Masukkan Asal" value="{{$batik->asal}}">
                            </div>
                        </div>
                        <div class="baris">
                            <div class="baris-baris">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea  name="deskripsi" id="deskripsi" placeholder="Masukkan Deskrripsi">{{$batik->deskripsi}}</textarea>
                            </div>
                        </div>

                        <div class="baris">
                            <div class="baris-baris">
                                <label for="harga_terendah">Harga Terendah</label>
                                <input type="text" name="harga_terendah" id="harga_terendah" placeholder="Masukkan Harga" value="{{$batik->harga_terendah}}">
                            </div>
    
                            <div class="baris-baris">
                                <label for="harga_tertinggi">Harga Tertinggi</label>
                                <input type="text" name="harga_tertinggi" id="harga_tertinggi" placeholder="Masukkan Harga" value="{{$batik->harga_terendah}}">
                            </div>
                        </div>
                        <div class="baris">
                            <div class="baris-baris">
                                <label for="picture">Foto</label>
                                <div class="foto">
                                    <input type="file" name="picture" id="picture" placeholder="Masukkan Foto" value="{{$batik->picture}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="tombol">
                    <button class="simpan" type="submit">Edit</button>
                    <button class="btn-back" onclick="location.href='{{ route('dashboard.index')}}'" type="button">Back</button>

                </div>
            </form>

        </div>
    </section>

    @push('scripts')
        <script src="/js/script.js"></script>
    @endpush
</x-app-layout>
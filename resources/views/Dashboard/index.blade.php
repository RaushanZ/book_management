<x-app-layout title="Dashboard">
    @push('styles')
        <link rel="stylesheet" href="/css/table.css">
    @endpush

    <section id="page-1" class="page-1" >
        <div class="page">
            <div class="title">
                <p>List</p>
                <div class="title-row">
                    <h2>Jenis Batik</h2>
                    <button class="btn-create" onclick="location.href='{{ route('dashboard.create')}}'" type="button">Create</button>
                </div>
            </div>

            <div class="kotak">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 20px;">No</th>
                            <th style="width: auto;">Pict</th>
                            <th style="width: auto;">Name</th>
                            <th style="width: auto;">Asal</th>
                            <th style="width: auto;">Price ↓</th>
                            <th style="width: auto;">Price ↑</th>
                            <th style="width: auto;">Alat</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($batiks as $key => $b )
                            <tr>
                                <th>{{ $key+1 }}</th>
                                <td><img class="picture" src="/storage/{{ $b->picture }}" alt="pict"></td>
                                <td>{{ $b->name }}</td>
                                <td>{{ $b->asal }}</td>
                                <td class="price">
                                    <p>{{ $b->harga_terendah}}</p>
                                </td>
                                <td class="price">
                                    <p>{{ $b->harga_tertinggi}}</p>
                                </td>
                                <td>
                                    <button class="btn-edit" onclick="location.href='{{ route('dashboard.edit', $b->id)}}'" type="button"><ion-icon name="create"></ion-icon></button>
                                    <form action="{{ route('dashboard.destroy', $b->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-delete" type="submit">
                                            <ion-icon name="trash"></ion-icon>
                                        </button>
                                    </form>
                                    
                                </td>

                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="/js/script.js"></script>
    @endpush
</x-app-layout>
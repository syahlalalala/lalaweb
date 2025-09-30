<x-header/>

<div class="container">
    <h2>Berita</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div> @endif

    <p><strong>Judul:</strong><br>{{ $berita->judul ?? '-' }}</p>
    <p><strong>gambar:</strong><br>{{ $berita->gambar ?? '-' }}</p>
    <p><strong>isi:</strong><br>{{ $berita->isi ?? '-' }}</p>

    <a href="" class="btn btn-primary">Edit Berita</a>
</div>

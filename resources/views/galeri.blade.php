<x-header/>


<div class="container">

<!-- Section Galeri -->
    <div class="row mt-5">
        <div class="col-lg-12 text-center rounded">
            <h2 class="judul">Galeri</h2>
            <div class="row">
                @foreach ($galeri as $item)
                <div class="col-lg-4 mt-3">
                    <div class="card shadow">
                        <img src="{{ $item->gambar }}" width="100%" alt="">
                        <h6 class="text-center">{{ $item->judul }}</h6>
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
    </div>
<!-- End Section Galeri -->
</div>

<x-footer/>

</body>
</html>
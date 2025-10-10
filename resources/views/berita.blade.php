<x-header />
<!-- Section item -->
<div class="container">

    <div class="row mt-5 text-center">
        <div class="col-lg-12">
            <h2 class="judul">Berita</h2>

            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-lg-4 mt-3">
                        <div class="card h-100 shadow">
                            <div class="card-header">
                                <img height="200px" src={{ $item->gambar }}
                                    width="100%" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="text-start">{{ $item->judul }}</h4>
                                <a target="_blank" class="btn btn-outline-primary"
                                    href={{ $item->link }}>Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>


</div>
<!-- End Section item -->
<x-footer />

</body>

</html>

<x-header/>


<div class="container">

<!-- Section Galeri -->
    <div class="row mt-5">
        <div class="col-lg-12 text-center rounded">
            <h2 class="bg-primary-subtle">Galeri</h2>
            <div class="row">
                @foreach ($galeri as $item)
                <div class="col-lg-4 mt-3">
                    <img src="{{ $item->gambar }}" width="100%" alt="">
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
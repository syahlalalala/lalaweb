<x-header/>

<div class="container">

 <!-- Section Ekstrakulikuler -->
    <div class="row mt-5 text-center">
        <div class="col-lg-12">
        <h2 class="bg-primary-subtle">Ekstakulikuler</h2>

            <div class="row justify-content-center">
        <!-- card 1 -->
        @foreach ($eskul as $item )
            
        
                <div class="col-lg-6 mt-3">
                    <div class="card mb-3" style="max-width: 800px;">
                        <div class="row g-0 px-3">
                            <div class="col-md-3 my-3">
                                <img src={{ $item->gambar }} class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                    <p class="card-text text-start">{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
            </div>
        </div>
    </div>
 <!-- End Section Ekstakulikuler -->
 </div>


 <x-footer/>

</body>
</html>
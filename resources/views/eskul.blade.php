<x-header/>

<div class="container">

 <!-- Section Ekstrakulikuler -->
    <div class="row mt-5 text-center">
    <div class="col-lg-12">
        <h2>Ekstakulikuler</h2>

        <div class="row justify-content-center">
        <!-- card 1 -->
        @foreach ($eskul as $item )
            
        
        <div class="col-lg-6">
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
        {{-- <!-- card 3 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/pd.BUD6DakP.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Perisai Diri</h5>
                        <p class="card-text text-start">Ekstrakurikuler seni bela diri tradisional untuk melatih fisik dan mental sekaligus menjaga warisan budaya.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 4 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;  ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/bultang.dnbauifs.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Bulu Tangkis</h5>
                        <p class="card-text text-start">Meningkatkan kemampuan bermain bulu tangkis sambil menjaga kesehatan dan semangat sportivitas.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 5 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/futsal.BLhIBqzK.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Futsal</h5>
                        <p class="card-text text-start">Melatih keterampilan bermain futsal dengan fokus pada kerjasama tim dan strategi permainan.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 6 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;  ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/cineam.BSgSd7Nd.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Cinematigrafi</h5>
                        <p class="card-text text-start">Mengajarkan seni pembuatan film, mulai dari pengambilan gambar, editing, hingga produksi video kreatif.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 7 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px; ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/pramuk.DwXMHsR8.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Pramuka</h5>
                        <p class="card-text text-start">Mengembangkan karakter, keterampilan, dan rasa tanggung jawab melalui kegiatan kepramukaan.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 8 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px; ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/pmr.BOmGoy_Q.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">PMR</h5>
                        <p class="card-text text-start">Melatih siswa untuk siap siaga dalam memberikan pertolongan pertama dan kegiatan kemanusiaan.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 9 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/ks.CXv3QUJt.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">PKS</h5>
                        <p class="card-text text-start">Menanamkan disiplin dan tanggung jawab untuk menjaga ketertiban di lingkungan sekolah.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 10 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;  ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/seni.Vv4aX6zv.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Seni</h5>
                        <p class="card-text text-start">Mengeksplorasi bakat seni siswa, seperti tari, musik, dan teater.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 11 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px; ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/paskib.D4NzW5Pg.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Paskibra</h5>
                        <p class="card-text text-start">Melatih keterampilan baris-berbaris serta menanamkan semangat kebangsaan dan kedisiplinan.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 12 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;  ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/plh.BJVb1d8R.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">PLH</h5>
                        <p class="card-text text-start">Mengedukasi tentang pelestarian lingkungan melalui berbagai kegiatan ramah lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 13 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px; ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/laskar.CeBn1OtK.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Laskar Pustaka</h5>
                        <p class="card-text text-start">Meningkatkan minat baca dan pengelolaan perpustakaan untuk mendukung literasi siswa.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 14 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/sepak.Bn50BOOv.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Sepak Bola</h5>
                        <p class="card-text text-start">Mengembangkan keterampilan bermain sepak bola sambil meningkatkan daya tahan fisik dan kerjasama tim.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 15 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;  ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/voli.CWmBNJvq.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Voli</h5>
                        <p class="card-text text-start">Melatih kemampuan bermain voli dengan fokus pada teknik dan kerja sama tim.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 16 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/bskt.c2-G4Eus.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Basket</h5>
                        <p class="card-text text-start">Mengasah keterampilan bermain bola basket dan membangun jiwa kompetitif yang sehat.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 17 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px; ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/rohis.D44E_ZGr.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Rohis</h5>
                        <p class="card-text text-start">Menanamkan nilai-nilai keagamaan Islam melalui kajian, diskusi, dan kegiatan ibadah bersama.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- card 18 -->
        <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 800px; ">
            <div class="row g-0 px-3">
                <div class="col-md-3 my-3">
                    <img src="https://web-sekolah-tawny.vercel.app/_nuxt/boxi.B17rqw08.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Boxing</h5>
                        <p class="card-text text-start">Melatih teknik tinju untuk kebugaran fisik, kepercayaan diri, dan pengendalian diri.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>


        </div>
    </div>
    </div>
</div> --}}

 <!-- End Section Ekstakulikuler -->

<x-footer/>

</body>
</html>
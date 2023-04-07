@extends('admin.main')

@section('content')
    <div class="container-fluid mb-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><a href="https://rhae.000webhostapp.com/tugas_bootstrap.html"> Third Chapter :
                    Started to falling in love with her </a></h1>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="h6 mb-0 text-gray-800 justify-text">
                starting to realize that i have feeling for her. <br>
                finnaly that feeling has reached my little heart, but..
                i think maybe it is already too late to realize that i am in love with her. <br><br>
                i think on that time i am already know everything about her,i think iam is the who know about her more than anyone,
                basic css i used to know now im not thinking she's not amazing as she was when i know about bootstrap 
                more of template about website i found made me getting more excited to study about her <i>but i didnt do it</i>,
                my arrogant self didnt realize thinking im already know about her will make her away from me. <br><br>
                this is my third task with her using bootstrap and i think it is enough for me to proud of it.
                
            </p>
        </div>
        <div class="container-all">
            <div class="container awal mt-3 mb-5">
                <div class="row">
                    <div class="col">
                        <h1>
                            assalamualaikum<br>
                            ahlan wa sahlan?
                        </h1>
                        <p class="pembuka">
                            website ini berisi barang barang yang diperlukan untuk beribadah,<br>
                            tapi sekarang dari website ini belum bisa beli apa apa hehehe
                        </p>
                    </div>
                    <div class="col d-none d-lg-block d-xl-block">
                        <img src="{{ asset('asset/img/mesjid-2.png') }}" width="500px"">
                    </div>
                </div>
            </div>

            <div class="container d-none d-lg-block d-xl-block">

                <div class="row mb-5">
                    <div class="col kartu">
                        <div class="card produk" style="width: 18rem;">
                            <img src="{{ asset('asset/img/quran-3.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Al-Quran</h5>
                                <p class="card-text">
                                    Al-quran, kitab suci bagi umat islam<br><br>
                                    Rp.200.000
                                </p>
                                <a href="#" class="btn btn-primary">Beli sekarang!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col kartu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset/img/sajadah.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sajadah</h5>
                                <p class="card-text">
                                    Sajadah, untuk menyempurnakan shalat anda <br><br>
                                    Rp.75.000
                                </p>
                                <a href="#" class="btn btn-primary">Beli sekarang!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col kartu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset/img/buku.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Buku tuntunan shalat</h5>
                                <p class="card-text">
                                    Buku tuntunan shalat, agar shalat anda lebih sempurna <br><br>
                                    Rp.50.000
                                </p>
                                <a href="#" class="btn btn-primary">Beli sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col kartu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset/img/Tasbih.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tasbih</h5>
                                <p class="card-text">
                                    Tasbih, untuk memudahkan anda berzikir kepada Allah <br><br>
                                    Rp.65.000
                                </p>
                                <a href="#" class="btn btn-primary">Beli sekarang!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col kartu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset/img/peci-1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Peci</h5>
                                <p class="card-text">
                                    Peci, agar tampilan anda lebih baik saat menghadap yang kuasa <br><br>
                                    Rp.100.000
                                </p>
                                <a href="#" class="btn btn-primary">Beli sekarang!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col kartu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('asset/img/sarung.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sarung</h5>
                                <p class="card-text">
                                    Sarung, agar ibadah anda terasa lebih nyaman <br><br>
                                    Rp.250.000
                                </p>
                                <a href="#" class="btn btn-primary">Beli sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

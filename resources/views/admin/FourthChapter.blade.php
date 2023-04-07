@extends('admin.main')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Fourth Chapter : Falling deeper and deeper with her</h1>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="h6 mb-0 text-gray-800 justify-text">
                that feeling got bigger and bigger. <br>
                that little feeling on my heart has grown bigger and bigger overtime,it took me too long to realize it
                i think i must tell her now before that feeling killing me from the inside. <br><br>
                the day of big project we afraid has come, me and my teammate at first not too excited to work on it
                and that make us work it on a little rush, start from us that still dont agree what to make
                and finnaly we agreed to make newsportal when the remaining time before due is just a couple days 
                but with the help of my teammate that cover my weakness on this project we finnaly manage to finish it just before its due,
                i pour all of my feeling for her on this project so that she knows i love her.
                buttt despite all of that hardwork and stress we face our team manage to get the best project award even though its just second place
                but that thing is already very very wonderful to me, thanks to all my teammate hope you all the best. <br><br>
                this is couple images of my teammates journey on big project, unfortunately we forget to take picture of ourself together
            </p>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="row mb-5">
                <div class="col kartu">
                    <div class="card produk" style="width: 18rem;">
                        <img src="{{ asset('asset/img/mindmap.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                pembuatan mindmap pertama kami
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col kartu">
                    <div class="card produk" style="width: 18rem;">
                        <img src="{{ asset('asset/img/mind.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                mind map kami setelah di sempurnakan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col kartu">
                    <div class="card produk" style="width: 18rem;">
                        <img src="{{ asset('asset/img/ss1.png') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                tampilan admin website kami
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col kartu">
                    <div class="card produk" style="width: 18rem;">
                        <img src="{{ asset('asset/img/ss2.png') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                tampilan user website kami
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col kartu">
                    <div class="card produk" style="width: 18rem;">
                        <img src="{{ asset('asset/img/gmeet.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                Gladi resik sebelum presentasi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col kartu">
                    <div class="card produk" style="width: 18rem;">
                        <img src="{{ asset('asset/img/menang1.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                Hari kemenangan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

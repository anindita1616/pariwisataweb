@extends('front.template')

@section('main')
    <section>
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Destinasi</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Wisata</a></li>
                </ul>
            </nav>
        </div>
        <figure class="wisata-slide slide-page is-mobile">
            <img src="{{ asset('img/wisataDetail1.jpg') }}" alt="" width="100%">
            <img src="{{ asset('img/wisataDetail2.png') }}" alt="" width="100%">
        </figure>
    </section>

    <div class="container container-event">
        <section id="dispar-wisata" class="mb-6 mt-5">
            <form class="columns has-spaced-between mb-5" action="{{ url('cari') }}" method="GET">
                <div class="column is-4">
                    <div class="field-body">
                        <div class="field">
                            <!-- <label>Provinsi</label> -->
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select>
                                        <option selected>Terbaru</option>
                                        <option>Terpopuler</option>
                                        <option>Terjauh</option>
                                        <option>Terdekat</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <!-- <label>Kota</label> -->
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select>
                                        <option selected>Kategori</option>
                                        <option>Semua</option>
                                        <option>Pantai</option>
                                        <option>Hutan</option>
                                        <option>Hiburan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- <form action="{{ url('cari') }}" method="GET"> --}}
                <div class="column is-3 has-text-right">
                    <div class="field has-addons">
                        <input class="input" name="pilihan" type="hidden" value="Wisata">
                        <div class="control">
                            <input class="input" name="search" type="text" placeholder="Cari Wisata">
                        </div>
                        <div class="control">
                            <input type="submit" class="button is-link" value="Cari">
                                {{-- Cari
                            </a> --}}
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
            </form>

            <div class="columns is-multiline">
                @foreach ($wisatas as $wisata)
                    <a href="{{ route('wisatas.show', $wisata->slug) }}" class="column is-3 item-wisata">
                        <figure>
                            <img src="{{asset('img/gambarwisata/'.$wisata->gambar)}}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">{{ $wisata->nama }}</p>
                                <p class="has-text-grey ">
                                    {{ $wisata->harga }}</p>
                                <div class="mb-2">
                                    {{-- <span class="icon is-small has-text-warning">
                                        <i class="fas fa-star checked"></i>
                                    </span>
                                    <span class="icon is-small has-text-warning">
                                        <i class="fas fa-star checked"></i>
                                    </span>
                                    <span class="icon is-small has-text-warning">
                                        <i class="fas fa-star checked"></i>
                                    </span>
                                    <span class="icon is-small has-text-warning">
                                        <i class="fas fa-star checked"></i>
                                    </span>
                                    <span class="icon is-small has-text-grey-light">
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="has-text-grey ml-1">
                                        (51)
                                    </span> --}}
                                </div>
                                <p class="has-text-grey">
                                    <span class="icon is-small mr-1 has-text-link">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    {{ $wisata->alamat }}
                                </p>
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>
            <div class="columns is-centered">
                {{ $wisatas->links() }}
            </div>
        </section>
    </div>

@endsection

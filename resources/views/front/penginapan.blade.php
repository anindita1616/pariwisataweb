@extends('front.template')

@section('main')
    <section>
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Destinasi</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Penginapan</a></li>
                </ul>
            </nav>
        </div>
        <figure class="penginapan-slide slide-page">
            <img src="{{ asset('img/penginapanDetail2.jpg') }}" alt="" width="100%">
            <img src="{{ asset('img/penginapanDetail1.jpg') }}" alt="" width="100%">
        </figure>
    </section>

    <div class="container container-event">
        <section id="dispar-penginapan" class="mb-6 mt-5">
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
                                        <option>Hotel</option>
                                        <option>Apartment</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            {{-- <form action="{{ url('cari') }}" method="GET"> --}}
                                <div class="column is-3 has-text-right">
                                    <div class="field has-addons">
                                        <input class="input" name="pilihan" type="hidden" value="Penginapan">
                                        <div class="control">
                                            <input class="input" name="search" type="text" placeholder="Cari Penginapan">
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
                @foreach ($penginapans as $penginapan)
                    <a href="{{ route('penginapans.show', $penginapan->slug) }}" class="column is-3 item-penginapan">
                        <figure>
                            <img src="{{asset('img/gambarpenginapan/'.$penginapan->gambar)}}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">{{ $penginapan->nama }}
                                </p>
                                <p class="has-text-grey ">
                                    {{ $penginapan->harga }}</p>
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
                                        (31)
                                    </span> --}}
                                </div>
                                <p class="has-text-grey">
                                    <span class="icon is-small mr-1 has-text-link">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    {{ $penginapan->alamat }}
                                </p>
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>
            <div class="columns is-centered">
                <div class="column is-6">
                    {{ $penginapans->links() }}
                </div>
            </div>
        </section>
    </div>

@endsection

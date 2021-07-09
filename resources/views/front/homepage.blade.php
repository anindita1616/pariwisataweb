@extends('front.template')

@section('main')

@if (session('pesan'))
    <script type='text/javascript'>alert('Pilih Kategori');</script>
@endif

    <div class="container">
        <section id="dispar-header" class="mt-5 mb-5">
            <figure id="wrap-header">
                <img src="{{ asset('img/header-homepage.jpg') }}" alt="">
                <figcaption>
                    <div class="columns is-centered item-header ">
                        <div class="column is-narrow">
                            <div class="has-text-centered judul">
                                <p class="title is-size-1 has-text-light is-mobile jdl">Balikpapan</p>
                                <p class="subtitle is-size-4 has-text-light is-mobile subjdl">Temukan Destinasi Wisata, Kuliner dan Penginapan Favoritmu</p>
                            </div>
                            <br>
                            <form action="{{ url('cari') }}" method="GET">
                                <div class="field has-addons has-addons-centered is-mobile">
                                    <p class="control inpt">
                                        <input name="search" class="finput is-mobile input is-medium is-rounded" type="text"
                                            placeholder="Apa yang sedang kamu cari ?">
                                    </p>
                                    <p class="control">
                                        <span class="select is-medium is-mobile">
                                            <select name="pilihan">
                                                <option selected disabled>Kategori</option>
                                                <option>Event</option>
                                                <option>Kuliner</option>
                                                <option>Wisata</option>
                                                <option>Penginapan</option>
                                            </select>
                                        </span>
                                    </p>
                                    <p class="control">
                                        <input type="submit" class="button btnn is-link is-medium is-rounded" value="GO">
                                            {{-- Mulai Cari
                                        </a> --}}
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </figcaption>
            </figure>
            <div class="columns is-centered widget-header is-mobile">
                <a href="/wisata" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-link">
                        <i class="fas fa-archway fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Wisata</p>
                </a>
                <a href="/kuliner" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-info">
                        <i class="fas fa-utensils fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Kuliner</p>
                </a>
                <a href="/penginapan" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-primary">
                        <i class="fas fa-bed fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Penginapan</p>
                </a>
                <a href="/event" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-success">
                        <i class="fas fa-calendar fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Event</p>
                </a>
            </div>
        </section>
    </div>
    <div class="container container-event">
        <section id="dispar-event" class="my-6 py-6">
            <div class="columns">
                <div class="column">
                    <p class="title is-size-4">Event Balikpapan</p>
                    <p class="subtitle is-size-5 has-text-grey">Bermacam Kegiatan yang di adakan kota
                        balikpapan</p>
                </div>
                <div class="column is-narrow" style="align-self: flex-end;">
                    <a href="/event" class="button is-link is-light">Lihat lebih banyak</a>
                </div>
            </div>
            <div class="columns mt-4 mb-5">
                @foreach ($events as $event)
                    <a href="{{ route('events.show', $event->slug) }}" class="column is-3 item-event">
                        <figure>
                            <img src="{{asset('img/gambarevent/'.$event->gambar)}}" alt="">
                            <figcaption>
                                <span class="tag is-link mb-3 is-medium">{{ $event->kategori }}</span>
                                <p class="has-text-weight-bold mb-2 is-size-5">{{ $event->judul }}
                                </p>
                                <p class="has-text-light is-size-6">
                                    <span class="icon has-text-link">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    {{ $event->lokasi }}
                                </p>
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>
        </section>

        <section id="dispar-kuliner" class="my-6 py-6">
            <div class="columns">
                <div class="column">
                    <p class="title is-size-4">Kuliner</p>
                    <p class="subtitle is-size-5 has-text-grey">Nikmati jajanan kuliner kota balikpapan</p>
                </div>
                <div class="column is-narrow" style="align-self: flex-end;">
                    <a href="/kuliner" class="button is-link is-light">Lihat lebih banyak</a>
                </div>
            </div>
            <div class="columns">
                @foreach ($kuliners as $kuliner)
                    <a href="{{ route('kuliners.show', $kuliner->slug) }} " class="column is-3 item-kuliner">
                        <figure>
                            <img src="{{asset('img/gambarkuliner/'.$kuliner->gambar)}}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">
                                    {{ $kuliner->nama }}
                                </p>
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
                                    {{ $kuliner->alamat }}
                                </p>
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>
        </section>

        <section id="dispar-wisata" class="my-6 py-6">
            <div class="columns">
                <div class="column">
                    <p class="title is-size-4">Wisata Unggulan</p>
                    <p class="subtitle is-size-5 has-text-grey">Jelajahi tempat wisata kota balikpapan</p>
                </div>
                <div class="column is-narrow" style="align-self: flex-end;">
                    <a href="/wisata" class="button is-link is-light">Lihat lebih banyak</a>
                </div>
            </div>
            <div class="columns">
                @foreach ($wisatas as $wisata)
                    <a href="{{ route('wisatas.show', $wisata->slug) }}" class="column is-3 item-wisata">
                        <figure>
                            <img src="{{asset('img/gambarwisata/'.$wisata->gambar)}}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">
                                    {{ $wisata->nama }}</p>
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
        </section>

        <section id="dispar-penginapan" class="my-6 py-6">
            <div class="columns">
                <div class="column">
                    <p class="title is-size-4">Penginapan Terdekat</p>
                    <p class="subtitle is-size-5 has-text-grey">Temukan tempat penginapan wilayah balikpapan</p>
                </div>
                <div class="column is-narrow" style="align-self: flex-end;">
                    <a href="/penginapan" class="button is-link is-light">Lihat lebih banyak</a>
                </div>
            </div>
            <div class="columns">
                @foreach ($penginapans as $penginapan)
                    <a href="{{ route('penginapans.show', $penginapan->slug) }}" class="column is-3 item-penginapan">
                        <figure>
                            <img src="{{asset('img/gambarpenginapan/'.$penginapan->gambar)}}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">
                                    {{ $penginapan->nama }}</p>
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
        </section>
    </div>
@endsection

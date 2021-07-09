@extends('front.template')

@section('main')
    <section>
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Destinasi</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Kuliner</a></li>
                </ul>
            </nav>
        </div>
        <figure class="kuliner-slide slide-page">
            <img src="{{ asset('img/kulinerDetail2.jpg') }}" alt="" width="100%">
            <img src="{{ asset('img/kulinerDetail1.jpg') }}" alt="" width="100%">
        </figure>
    </section>

    <div class="container container-event">
        <section id="dispar-kuliner" class="mb-6 mt-5">
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
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             {{-- <form action="{{ url('cari') }}" method="GET"> --}}
                <div class="column is-3 has-text-right">
                    <div class="field has-addons">
                        <input class="input" name="pilihan" type="hidden" value="Kuliner">
                        <div class="control">
                            <input class="input" name="search" type="text" placeholder="Cari Kuliner">
                        </div>
                        <div class="control">
                            <input type="submit" class="button is-link" value="Go">
                                {{-- Cari
                            </a> --}}
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
            </form>
            <div class="columns is-multiline">
                @foreach ($kuliners as $kuliner)
                    <a href="{{ route('kuliners.show', $kuliner->slug) }}" class="column is-3 item-kuliner">
                        <figure>
                            <img src="{{asset('img/gambarkuliner/'.$kuliner->gambar)}}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">{{ $kuliner->nama }}</p>
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
            <div class="columns is-centered">
                <div class="column is-6">
                    {{ $kuliners->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection

@extends('front.template')

@section('main')
<section>
    <div class="container">
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a>Destinasi</a></li>
                <li class="is-active"><a href="#" aria-current="page">Event</a></li>
            </ul>
        </nav>
    </div>
    <figure class="event-slide slide-page">
        <img src="{{ asset('img/fest3.jpg') }}" alt="" width="100%">
        <img src="{{ asset('img/fest2.jpg') }}" alt="" width="100%">
    </figure>
</section>

<div class="container container-event">
    <section id="dispar-event" class="mb-6 mt-5">
        <form class="columns has-spaced-between mb-5"  action=" {{ url('cari') }}" method="GET">
            <div class="column is-2">
                <div class="field-body">
                    <div class="field">
                        <!-- <label>Kota</label> -->
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select>
                                    <option selected>Kategori</option>
                                    <option>Kompetisi</option>
                                    <option>Festival</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <form action="{{ url('cari') }}" method="GET"> --}}
            <div class="column is-3 has-text-right">
                <div class="field has-addons">
                    <input class="input" name="pilihan" type="hidden" value="Event">
                    <div class="control">
                        <input class="input" name="search" type="text" placeholder="Cari Event">
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
            @foreach ($events as $event)
            <a href="{{ route('events.show', $event->slug) }}" class="column is-3 item-event">
                <figure>
                    <img src="{{asset('img/gambarevent/'.$event->gambar)}}" alt="">
                    <figcaption>
                        <span class="tag is-link mb-3 is-medium">{{ $event->kategori }}</span>
                        <p class="has-text-weight-bold mb-2 is-size-5">{{ $event->judul }}</p>
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
        <div class="columns is-centered">
            <div class="column is-6">
                {{ $events->links() }}
            </div>
        </div>
    </section>
</div>

@endsection
@extends('front.template')
@section('main')
{{-- <x-app-layout> --}}
    <div class="container container-event">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Tempatin disini -->
            <section id="dispar-all-detail" class="my-6">
                <div class="columns is-centered is-multiline">
                    <div class="column is-4">
                        <img src="{{asset('img/gambarevent/'.$event->gambar)}}" alt="" width="100%">
                    </div>
                    <div class="column is-6">
                        <p class="title is-size-3">
                            {{ $event->judul }}
                        </p>
                        <table class="table">
                            <tr>
                                <td>Lokasi</td>
                                <td> : </td>
                                <td>{{ $event->lokasi }}</td>
                            </tr>
                            <tr>
                                <td>Kategori </td>
                                <td> : </td>
                                <td class="has-text-link">{{ $event->kategori }}</td>
                            </tr>
                        <div class="content">
                            <p class="title is-size-5">Informasi</p>
                            <p class="subtitle is-size-6 break-all">{!! $event->deskripsi !!}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endsection
    {{-- @extends('front.footer')
</x-app-layout> --}}

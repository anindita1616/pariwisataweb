{{-- <x-app-layout> --}}
    @extends('front.template')
@section('main')
    <div class="container container-event">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Tempatin disini -->
            <section id="dispar-all-detail" class="my-6">
                <div class="columns is-centered is-multiline">
                    <div class="column is-7">
                        <iframe src="{{ $kuliner->link }}" width="100%" height="300" style="border:0;"
                            allowfullscreen="" loading="lazy"></iframe>
                        <br>
                        <p class="is-size-3 has-text-weight-bold">{{ $kuliner->nama }}</p>
                        <p class="is-size-5">{{ $kuliner->alamat }}</p>
                        <div class="content">
                            <p class="has-text-grey">{{ $kuliner->deskripsi }}</p>
                        </div>
                        <div>
                            <p class="is-size-5">Link Order</p>
                            <br>
                            <div class="columns">
                                <div class="column is-2">
                                    <div
                                        class="item-detail-akomodasi has-background-link has-text-light has-text-centered py-3">
                                        <a href={{$kuliner->link_order}} target="_blank" class="icon is-medium has-text-light">
                                            <i class="fas fa-truck fa-2x"></i>
                                        </a>
                                        <p>Go-Food</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="column is-5">
                        <div class="has-background-grey-lighter px-5 py-5">
                            <figure class="slide-page all-detail-img">
                                <img src="{{asset('img/gambarkuliner/'.$kuliner->gambar)}}" alt="">
                                {{-- <img src="{{ asset('storage/' . $kuliner->gambar) }}" alt="">
                                <img src="{{ asset('storage/' . $kuliner->gambar) }}" alt=""> --}}
                            </figure>
                            <div>
                                <p class="is-size-5">Video Terkait</p>
                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/DgJYt7o2j24"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endsection
    {{-- @extends('front.footer') --}}
{{-- </x-app-layout> --}}

<x-app-layout>
    <div class="container">
        <section id="dispar-header" class="mt-5 mb-5">
            <figure id="wrap-header">
                <img src="{{ asset('img/header-homepage.jpg') }}" alt="">
                <figcaption>
                    <div class="columns is-centered item-header">
                        <div class="column is-narrow">
                            <div class="has-text-centered judul">
                                <p class="title is-size-1 has-text-light jdl">DASHBOARD</p>
                                <p class="subtitle is-size-4 has-text-light subjdl">SmartRT Pariwisata</p>
                            </div>
                            <br>
                        </div>
                    </div>
                </figcaption>
            </figure>
            <div class="columns is-centered widget-header is-mobile">
                <a href="/wisatas" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-link">
                        <i class="fas fa-archway fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Wisata</p>
                </a>
                <a href="/kuliners" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-info">
                        <i class="fas fa-utensils fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Kuliner</p>
                </a>
                <a href="/penginapans" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-primary">
                        <i class="fas fa-bed fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Penginapan</p>
                </a>
                <a href="/events" class="column is-one-fifth has-background-light has-text-centered">
                    <span class="icon is-medium has-text-success">
                        <i class="fas fa-calendar fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Event</p>
                </a>
            </div>
        </section>
        <section id="dispar-event" class=" pt-6">
            <div class="container container-event">
                <div class="columns">
                    <div class="column">
                        <p class="title is-size-4 has-text-centered is-uppercase is-underlined">Jumlah Data</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="dispar-event" class="pb-6">
            <div class="container container-event">
                <div class="columns">
                    {{-- KOLOM --}}
                    <div class="column">
                        <div class="box">
                            <article class="media">
                              <div class="media-left">
                                {{-- <figure class="image is-64x64">
                                  <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                </figure> --}}
                              </div>
                              <div class="media-content">
                                <div class="content has-text-centered">
                                  <p>
                                    <strong class="is-size-5">WISATA</strong>
                                    <br>
                                    {{$wisatas->count()}}
                                  </p>
                                </div>
                              </div>
                            </article>
                          </div>
                    </div>
                    {{-- TUTUP KOLOM --}}
                    {{-- KOLOM --}}
                    <div class="column">
                        <div class="box">
                            <article class="media">
                              <div class="media-left">
                                {{-- <figure class="image is-64x64">
                                  <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                </figure> --}}
                              </div>
                              <div class="media-content">
                                <div class="content has-text-centered">
                                  <p>
                                    <strong class="is-size-5">KULINER</strong>
                                    <br>
                                    {{$kuliners->count()}}
                                  </p>
                                </div>
                              </div>
                            </article>
                          </div>
                    </div>
                    {{-- TUTUP KOLOM --}}
                    {{-- KOLOM --}}
                    <div class="column">
                        <div class="box">
                            <article class="media">
                              <div class="media-left">
                                {{-- <figure class="image is-64x64">
                                  <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                </figure> --}}
                              </div>
                              <div class="media-content">
                                <div class="content has-text-centered">
                                  <p>
                                    <strong class="is-size-5">PENGINAPAN</strong>
                                    <br>
                                    {{$penginapans->count()}}
                                  </p>
                                </div>
                              </div>
                            </article>
                          </div>
                    </div>
                    {{-- TUTUP KOLOM --}}
                    {{-- KOLOM --}}
                    <div class="column">
                        <div class="box">
                            <article class="media">
                              <div class="media-left">
                                {{-- <figure class="image is-64x64">
                                  <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                </figure> --}}
                              </div>
                              <div class="media-content">
                                <div class="content has-text-centered ">
                                  <p>
                                    <strong class="is-size-5">EVENT</strong>
                                    <br>
                                    {{$events->count()}}
                                  </p>
                                </div>
                              </div>
                            </article>
                          </div>
                    </div>
                    {{-- TUTUP KOLOM --}}
                </div>
            </div>
        </section>
        @extends('front.footer')
    </div>
</x-app-layout>

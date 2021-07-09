<header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand mr-3">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('img/logo.png') }}">
                    <span class="ml-3">
                        <p class="title is-size-4">SmartRT Pariwisata</p>
                        <p class="has-text-grey subtitle is-size-6">Kota Balikpapan</p>
                    </span>
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu container-event">
                <div class="navbar-start">
                    <a href="/" class="navbar-item">
                        Beranda
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Destination
                        </a>
                        <div class="navbar-dropdown">
                            <a href="/wisata" class="navbar-item">
                                Wisata
                            </a>
                            <a href="/kuliner" class="navbar-item">
                                Kuliner
                            </a>
                            <a href="/penginapan" class="navbar-item">
                                Penginapan
                            </a>
                            <a href="/event" class="navbar-item">
                                Event
                            </a>
                        </div>
                    </div>
                    <a href="/tentang" class="navbar-item">
                        Tentang
                    </a>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        @if (Route::has('login'))
                            <div class="buttons">
                                @auth
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="navbar-dropdown ">
                                        <a href="{{ route('profile.show') }}" class="navbar-item " >
                                            Profile
                                        </a>
                                        <form action="{{route('logout')}}" method="post" class="navbar-item">
                                                @csrf
                                                {{-- <button class="navbar-item" type="submit">Logout</button> --}}
                                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                               {{-- <input type="submit" class="navbar-item" value="Logout"> --}}
                                        </form>
                                    </div>
                                </div>
                                    <a href=""
                                        class="text-sm text-gray-700 underline"></a>
                                        {{-- <strong class="has-text-light is-mediumed"> --}}


                                                {{-- <button type="submit" class="font-bold">Logout</button> --}}

                                        {{-- </strong> --}}
                                @else
                                    <a href="{{ route('login') }}" class="button is-link">Masuk</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="button is-danger">Daftar</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<script src="{{ asset('./js/script.js') }}"></script>
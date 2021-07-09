<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Penginapan') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('penginapans.create') }}"
                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                    Tambah Penginapan
                </a>
            </div>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-yellow-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Link Lokasi </th>
                                    <th scope=" col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase break-all tracking-wider">
                                        Deskripsi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($penginapan as $penginapan)
                                    <tr>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-60 w-80">
                                                    <img class="h-60 w-100 is-square"
                                                        src="{{asset('img/gambarpenginapan/'.$penginapan->gambar)}}" alt="">
                                                    <div class="text-md font-medium text-gray-900">
                                                        {{ $penginapan->nama }}
                                                    </div>
                                                    <div class="text-md text-gray-500">
                                                        {{ $penginapan->alamat }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" w-1/3 px-2 py-4 text-md text-gray-500">
                                            <iframe src="{{ $penginapan->link }}" width="100%" height="100"
                                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            <br>
                                            <iframe width="100%" height="200"
                                                src="https://www.youtube.com/embed/DgJYt7o2j24"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </td>
                                        <td class="px-6 py-4 is-wrapped text-md text-gray-500">
                                            {{ Str::of($penginapan->deskripsi)->words(30) }}
                                        </td>
                                        <td class="px-6 py-4 text-center text-md font-medium">
                                            <a href="{{ route('penginapans.show', $penginapan->slug) }}"
                                                class="text-indigo-600 hover:text-indigo-800">View</a> <br>
                                            <a href="{{ route('penginapans.edit', $penginapan->slug) }}"
                                                class="text-green-600 hover:text-green-800">Edit</a> <br>
                                            <form action="{{ route('penginapans.destroy', $penginapan) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-600 hover:text-red-800" type="submit"
                                                    onclick="return confirm('{{ __('Yakin Menghapus?') }}')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('front.footer')
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Event') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('events.create') }}"
                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                    Tambah Event
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
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">
                                        Kategori
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase break-all tracking-tight">
                                        Lokasi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Deskripsi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($events as $event)
                                    <tr>
                                        <td class="px-6 py-4 pre-wrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-20 w-20">
                                                    <img class="h-20 w-20 is-square"
                                                        src="{{asset('img/gambarevent/'.$event->gambar)}}" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-md font-medium text-gray-900">
                                                        {{ $event->judul }}
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="px-6 py-4 text-md text-gray-500">
                                            {{ $event->kategori }}
                                        </td>
                                        <td class="w-1/4 px-6 py-4  text-md text-gray-500">
                                            {{ $event->lokasi }}
                                        </td>
                                        <td class="px-6 py-4 break-words text-md text-gray-500">
                                            {{ Str::of($event->deskripsi)->words(50) }}
                                        </td>
                                        <td class="px-6 py-4 text-center text-md font-medium">
                                            <a href="{{ route('events.show', $event->slug) }}"
                                                class="text-indigo-600 hover:text-indigo-800">View</a> <br>
                                            <a href="{{ route('events.edit', $event->slug) }}"
                                                class="text-green-600 hover:text-green-800">Edit</a> <br>
                                            <form action="{{ route('events.destroy', $event->id) }}" method="POST">
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

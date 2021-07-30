<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kuliner') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Kuliner</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Silahkan Mengedit Tempat Kuliner yang ingin anda Tambahkan.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('kuliners.update', $kuliner) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="nama" class="block text-sm font-medium text-gray-700">
                                            Nama Tempat
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="nama" id="nama"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                value="{{ $kuliner->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="link_lokasi" class="block text-sm font-medium text-gray-700">
                                            Link Lokasi
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="link_lokasi" id="link_lokasi"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                value="{{ $kuliner->link_lokasi }}">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="link_order" class="block text-sm font-medium text-gray-700">
                                            Link Order
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="link_order" id="link_order"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                value="{{ $kuliner->link_order }}">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="link_semat" class="block text-sm font-medium text-gray-700">
                                            Link Lokasi
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="link_semat" id="link_semat"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                value="{{ $kuliner->link_semat }}">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="alamat" class="block text-sm font-medium text-gray-700">
                                            Alamat
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="alamat" name="alamat"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $kuliner->alamat }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">
                                        Deskripsi
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="deskripsi" name="deskripsi"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $kuliner->deskripsi }}</textarea>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Cover photo
                                    </label>
                                    <div class="form-group">
                                        <input type="file" name="gambar" class="
                                            form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Edit Kuliner
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('ckeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#deskripsi' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endsection
    @extends('front.footer')
</x-app-layout>

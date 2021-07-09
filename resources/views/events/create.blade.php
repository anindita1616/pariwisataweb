<x-app-layout>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Tambah Event</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Silahkan Menambahkan Event yang ingin anda Tambahkan.
                        </p>
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="judul" class="block text-sm font-medium text-gray-700">
                                            Judul Event
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="judul" id="judul"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                placeholder="judul Event" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="lokasi" class="block text-sm font-medium text-gray-700">
                                            Lokasi
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="lokasi" id="lokasi"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                placeholder="Lokasi">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="kategori" class="block text-sm font-medium text-gray-700">
                                            Kategori
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="kategori" id="kategori"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                placeholder="Kategori">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">
                                        Deskripsi
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="deskripsi" name="deskripsi"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                            placeholder="Deskripsikan Event disini"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Cover photo
                                    </label>
                                    <div class="form-group">
                                        <input type="file" name="gambar" class=" form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Tambah Event
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @extends('front.footer')
</x-app-layout>

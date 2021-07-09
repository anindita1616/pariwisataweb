<x-app-layout>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Tambah Tempat Penginapan</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Silahkan Menambahkan Tempat Penginapan yang ingin anda Tambahkan.
                        </p>
                        <br>
                        <p class="mt-1 text-sm text-red-600">
                            Reminder:
                        </p>
                        <p class="mt-1 text-sm text-gray-600">
                            1. Klik Bagikan di google maps.
                        </p>
                        <p class="mt-1 text-sm text-gray-600">
                            2. Pilih sematkan peta dan salin link seperti
                            berikut
                            "https://www.google.com/maps/embed?pb= <br>
                            !1m18!1m12!1m3!1d63821.41613299496!2d1<br>
                            16.82373717910153!3d-12698175999999861!2m3<br>
                            !1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1<br>
                            m2!1s0x2df146e9cbff9a73%3A0x1915c6d1e15ee2<br>
                            d1!2sHotel%20Zurich%20Balikpapan!5e0!3m2!1<br>
                            sid!2sid!4v1624974744403!5m2!1sid!2sid"
                        </p>
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('penginapans.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                                placeholder="Nama Tempat Penginapan" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="link" class="block text-sm font-medium text-gray-700">
                                            Link Lokasi
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="link" id="link"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                placeholder="Link Lokasi">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="link_order" class="block text-sm font-medium text-gray-700">
                                            Link Order
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="link_order" id="link"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                placeholder="Link Order">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="alamat" class="block text-sm font-medium text-gray-700">
                                            Alamat
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="alamat" name="alamat"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                placeholder="Alamat Tempat Penginapan"></textarea>
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
                                            placeholder="Deskripsikan Tempat Penginapan disini"></textarea>
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
                                    Tambah Tempat Penginapan
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

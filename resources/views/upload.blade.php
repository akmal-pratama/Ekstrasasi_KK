<x-app-layout>
    <div class="bg-black min-h-screen text-white p-8">
        <div class="flex items-center mb-6">
            <a href="{{ route('keluarga.upload') }}" class="text-white hover:text-brand-green mr-4">< Kembali</a>
            <h1 class="text-3xl font-bold text-brand-green mx-auto">PREVIEW DATA UPLOAD</h1>
        </div>

        <div class="max-w-6xl mx-auto mt-8">
            <div class="bg-gray-900 border border-brand-green rounded-lg p-8">
                <h2 class="text-2xl font-bold mb-6 text-center">Preview Data yang Akan Diimport</h2>
                
                <div class="overflow-x-auto mb-6">
                    <table class="min-w-full text-left text-sm">
                        <thead class="bg-brand-green text-white uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">No KK</th>
                                <th class="px-6 py-3">Nama Kepala Keluarga</th>
                                <th class="px-6 py-3">Kecamatan</th>
                                <th class="px-6 py-3">Kabupaten</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <tr class="hover:bg-gray-800 transition">
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">1234567890123456</td>
                                <td class="px-6 py-4">CONTOH NAMA</td>
                                <td class="px-6 py-4">TENGGARONG</td>
                                <td class="px-6 py-4">Kutai Kartanegara</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-center gap-4">
                    <button type="button" class="bg-brand-green hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg transition">
                        Konfirmasi & Simpan
                    </button>
                    <a href="{{ route('keluarga.upload') }}" class="border border-white hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-lg transition">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

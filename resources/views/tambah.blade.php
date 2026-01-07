<x-app-layout>
    <div class="bg-black min-h-screen text-white p-8">
        <div class="flex items-center mb-6">
            <a href="{{ route('dashboard') }}" class="text-white hover:text-brand-green mr-4">< Kembali</a>
            <h1 class="text-3xl font-bold text-brand-green mx-auto">TAMBAH DATA KELUARGA</h1>
        </div>

        <div class="max-w-4xl mx-auto mt-8">
            <form action="#" method="POST" class="space-y-6 bg-gray-900 border border-brand-green rounded-lg p-8">
                @csrf
                
                <div class="grid grid-cols-1 gap-4">
                    <label class="block text-sm font-bold mb-1">No KK</label>
                    <input type="text" name="no_kk" placeholder="Masukkan No Kartu Keluarga" class="w-full bg-transparent border border-brand-green rounded p-2 focus:ring-1 focus:ring-brand-green text-white">
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-bold mb-1">RT</label>
                        <input type="text" name="rt" placeholder="001" class="w-full bg-transparent border border-brand-green rounded p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-1">RW</label>
                        <input type="text" name="rw" placeholder="002" class="w-full bg-transparent border border-brand-green rounded p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-1">Desa/Kelurahan</label>
                        <input type="text" name="desa" placeholder="Nama Desa/Kelurahan" class="w-full bg-transparent border border-brand-green rounded p-2 text-white">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold mb-1">Kecamatan</label>
                        <input type="text" name="kecamatan" placeholder="Nama Kecamatan" class="w-full bg-transparent border border-brand-green rounded p-2 text-white">
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-1">Kabupaten</label>
                        <input type="text" name="kabupaten" placeholder="Nama Kabupaten" class="w-full bg-transparent border border-brand-green rounded p-2 text-white">
                    </div>
                </div>

                <div class="flex justify-center gap-4 mt-8">
                    <button type="submit" class="bg-brand-green hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg transition">
                        Simpan Data
                    </button>
                    <a href="{{ route('dashboard') }}" class="border border-white hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-lg transition">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

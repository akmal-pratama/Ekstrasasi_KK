@extends('layouts.main')

@section('title', 'Tambah Data')

@section('content')
    <a href="{{ route('beranda') }}" class="back-link">
        <i class="fa-solid fa-chevron-left"></i> Kembali
    </a>

    <h1>Pengisian Data Keluarga</h1>

    <div class="form-container">
        <div class="input-group"><label>No KK</label><input type="text" placeholder="isian"></div>
        <div class="row">
            <div class="input-group col-3"><label>RT</label><input type="text" placeholder="isian"></div>
            <div class="input-group col-3"><label>RW</label><input type="text" placeholder="isian"></div>
            <div class="input-group col-3"><label>Desa/kelurahan</label><input type="text" placeholder="isian"></div>
        </div>
        <div class="row">
            <div class="input-group col-3"><label>Kecamatan</label><input type="text" placeholder="isian"></div>
            <div class="input-group col-3"><label>Kabupaten/Kota</label><input type="text" placeholder="isian"></div>
            <div class="input-group col-3"><label>Provinsi</label><input type="text" placeholder="isian"></div>
        </div>
        <div class="input-group"><label>Tanggal KK Dikeluarkan</label><input type="date"></div>

        <div id="family-members-container">
            <div class="family-member-section">
                <div class="member-header">
                    <h2 class="member-title">Anggota Keluarga 1</h2>
                    <button type="button" class="btn-delete" onclick="hapusAnggota(this)">
                        <i class="fa-solid fa-trash"></i> Hapus Data
                    </button>
                </div>

                <div class="row">
                    <div class="input-group col-3"><label>Nama Lengkap</label><input type="text" placeholder="isian"></div>
                    <div class="input-group col-3"><label>NIK</label><input type="text" placeholder="isian"></div>
                    <div class="input-group col-3"><label>Jenis Kelamin</label>
                        <select><option>Laki-laki</option><option>Perempuan</option></select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group col-2"><label>Nama Ayah</label><input type="text" placeholder="isian"></div>
                    <div class="input-group col-2"><label>Nama Ibu</label><input type="text" placeholder="isian"></div>
                </div>
            </div>
        </div>

        <div class="btn-container">
            <button class="btn-green" onclick="tambahAnggota()">
                <i class="fa-solid fa-plus"></i> Tambah Anggota Keluarga
            </button>
            <a href="{{ route('konfirmasi') }}" class="btn-cyan">
                <i class="fa-solid fa-check"></i> Konfirmasi Penambahan Data
            </a>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function tambahAnggota() {
        const container = document.getElementById('family-members-container');
        const firstMember = container.querySelector('.family-member-section');
        const newMember = firstMember.cloneNode(true);
        newMember.querySelectorAll('input').forEach(input => input.value = '');
        newMember.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
        container.appendChild(newMember);
        updateNomorUrut();
        newMember.scrollIntoView({ behavior: 'smooth' });
    }

    function hapusAnggota(button) {
        button.closest('.family-member-section').remove();
        updateNomorUrut();
    }

    function updateNomorUrut() {
        document.querySelectorAll('.family-member-section').forEach((section, index) => {
            section.querySelector('.member-title').textContent = 'Anggota Keluarga ' + (index + 1);
        });
    }
</script>
@endsection
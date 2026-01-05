@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
    <h1>Ekstraksi KK</h1>

    <div class="action-buttons">
        <a href="{{ route('tambah') }}" class="btn-action">
            <i class="fa-solid fa-plus"></i> Tambah Data Keluarga
        </a>
        <a href="{{ route('upload') }}" class="btn-action">
            <i class="fa-solid fa-upload"></i> Tambah Data Keluarga via Upload
        </a>
    </div>

    <div class="search-container">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Cari Data keluarga...">
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>No Kartu Keluarga</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 3; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td><b>1234567890123456</b></td>
                    <td>AYAH {{ $i }}</td>
                    <td>TIMBAU</td>
                    <td>TENGGARONG</td>
                    <td>Kutai Kartanegara</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <div class="pagination">
        <button class="page-nav"><i class="fa-solid fa-chevron-left"></i> Sebelumnya</button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">...</button>
        <button class="page-nav">Selanjutnya <i class="fa-solid fa-chevron-right"></i></button>
    </div>
@endsection 
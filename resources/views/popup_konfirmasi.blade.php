@extends('layouts.main')

@section('title', 'Konfirmasi')

@section('content')
    <div class="blur-container">
        <h1>Pengisian Data Keluarga</h1>
        <div class="form-container">
            <div class="input-group"><label>No KK</label><input type="text" value="123456..."></div>
            <div class="row">
                <div class="input-group col-3"><label>RT</label><input type="text"></div>
                <div class="input-group col-3"><label>RW</label><input type="text"></div>
                <div class="input-group col-3"><label>Desa</label><input type="text"></div>
            </div>
            </div>
    </div>

    <div class="modal-overlay">
        <div class="modal-box">
            <div class="icon-circle">
                <i class="fa-solid fa-exclamation"></i>
            </div>
            <div class="modal-text">
                Apakah Anda Yakin <br> sudah mengisi data dengan benar?
            </div>
            <div class="modal-buttons">
                <a href="{{ route('tambah') }}" class="btn-modal btn-tidak">Tidak</a>
                <a href="{{ route('beranda') }}" class="btn-modal btn-iya">Iya</a>
            </div>
        </div>
    </div>
@endsection
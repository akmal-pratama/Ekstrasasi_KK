@extends('layouts.main')

@section('title', 'Upload KK')

@section('content')
    <a href="{{ route('beranda') }}" class="back-link">
        <i class="fa-solid fa-chevron-left"></i> Kembali
    </a>

    <h1>Ekstraksi KK</h1>

    <div class="upload-container">
        <input type="file" id="fileInput" accept="image/*,application/pdf" style="display:none;">

        <div class="upload-zone" id="uploadBox" onclick="document.getElementById('fileInput').click()">
            <div class="upload-content">
                <i class="fa-solid fa-upload"></i>
                <span>Pilih file atau Tarik kesini</span>
            </div>
        </div>

        <div class="preview-zone hidden" id="previewBox">
            PREVIEW GAMBAR KK
        </div>

        <a href="{{ route('upload.lanjutan') }}" class="btn-continue" id="btnContinue" style="text-decoration: none;">
            <i class="fa-solid fa-check"></i> Lanjutkan
        </a>
    </div>
@endsection

@section('scripts')
<script>
    const fileInput = document.getElementById('fileInput');
    const uploadBox = document.getElementById('uploadBox');
    const previewBox = document.getElementById('previewBox');
    const btnContinue = document.getElementById('btnContinue');

    fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            uploadBox.classList.add('hidden');
            previewBox.classList.remove('hidden');
            previewBox.style.display = 'flex';
            btnContinue.style.display = 'flex';
        }
    });
</script>
@endsection
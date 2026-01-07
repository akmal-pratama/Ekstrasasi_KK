<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container" style="padding-top: 50px;">
        <h2 style="text-align: center; margin-bottom: 30px;">DASHBOARD <span class="text-green">KK</span></h2>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Jumlah KK</h3>
                <div class="stat-number">67</div>
            </div>
            <div class="stat-card">
                <h3>Jumlah Warga</h3>
                <div class="stat-number">67</div>
            </div>
        </div>

        <div class="action-buttons">
            <button onclick="goTo('/keluarga/create')" class="btn btn-primary">+ Tambah Data Keluarga</button>
            <button onclick="goTo('/keluarga/upload')" class="btn btn-primary">↑ Tambah Data via Upload</button>
        </div>

        <div class="table-container">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Cari Data Keluarga...">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Kartu Keluarga</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="/keluarga/edit/1" style="text-decoration: underline; color: var(--primary-green);">6402092839123</a></td>
                        <td>BAPAK BUDI</td>
                        <td><button class="btn btn-primary" style="padding: 5px 10px;">Lihat</button></td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
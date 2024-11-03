<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <nav>
        <div>
            <a href="{{ url('/') }}">Manajemen Barang</a>
            <ul style="list-style-type: none; padding: 0;">
                <li style="display: inline; margin-right: 10px;">
                    <a href="{{ route('barang.index') }}">Daftar Barang</a>
                </li>
                <li style="display: inline; margin-right: 10px;">
                    <a href="{{ route('barang.create') }}">Tambah Barang</a>
                </li>
            </ul>
        </div>
    </nav>

    <div style="margin-top: 20px;">
        @yield('content')
    </div>
</body>
</html>

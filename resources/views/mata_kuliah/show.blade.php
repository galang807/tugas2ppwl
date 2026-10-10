<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Mata Kuliah</h1>

    <p><strong>Kode:</strong> {{ $mataKuliah->kode }}</p>
    <p><strong>Nama:</strong> {{ $mataKuliah->nama }}</p>
    <p><strong>SKS:</strong> {{ $mataKuliah->sks }}</p>
    <p><strong>Semester:</strong> {{ $mataKuliah->semester }}</p>
    <p><strong>Status:</strong>
        {{ $mataKuliah->aktif ? 'Aktif' : 'Nonaktif' }}
    </p>

    <a href="{{ route('admin.mata-kuliah.index') }}">Kembali</a>
    |
    <a href="{{ route('admin.mata-kuliah.edit', $mataKuliah) }}">Edit</a>
</body>
</html>

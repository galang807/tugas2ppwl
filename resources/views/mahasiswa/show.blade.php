<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>

    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
    <p><strong>Program Studi:</strong> {{ $mahasiswa->prodi }}</p>
    <p><strong>Semester:</strong> {{ $mahasiswa->semester }}</p>
    <p><strong>Status:</strong>
        {{ $mahasiswa->aktif ? 'Aktif' : 'Nonaktif' }}
    </p>

    <a href="{{ route('admin.mahasiswa.index') }}">Kembali</a>
    |
    <a href="{{ route('admin.mahasiswa.edit', $mahasiswa) }}">Edit</a>
</body>
</html>


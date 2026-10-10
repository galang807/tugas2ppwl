<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah</title>
</head>
<body>
    <h1>Data Mata Kuliah</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('admin.mata-kuliah.create') }}">+ Tambah Mata Kuliah</a>
    |
    <a href="{{ route('admin.mahasiswa.index') }}">Data Mahasiswa</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>

        @forelse ($mataKuliahs as $mataKuliah)
            <tr>
                <td>{{ $mataKuliah->kode }}</td>
                <td>{{ $mataKuliah->nama }}</td>
                <td>{{ $mataKuliah->sks }}</td>
                <td>{{ $mataKuliah->semester }}</td>
                <td>
                    <a href="{{ route('admin.mata-kuliah.show', $mataKuliah) }}">Detail</a>
                    <a href="{{ route('admin.mata-kuliah.edit', $mataKuliah) }}">Edit</a>

                    <form action="{{ route('admin.mata-kuliah.destroy', $mataKuliah) }}"
                          method="POST" style="display:inline"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data mata kuliah.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>

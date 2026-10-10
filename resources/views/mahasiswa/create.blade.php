
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    @if ($errors->any())
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.mahasiswa.store') }}" method="POST">
        @csrf

        <p>
            <label>NIM</label><br>
            <input type="text" name="nim" value="{{ old('nim') }}" required>
        </p>

        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}" required>
        </p>

        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </p>

        <p>
            <label>Program Studi</label><br>
            <input type="text" name="prodi" value="{{ old('prodi') }}" required>
        </p>

        <p>
            <label>Semester</label><br>
            <input type="number" name="semester" min="1" max="14"
                   value="{{ old('semester') }}" required>
        </p>

        <p>
            <label>
                <input type="checkbox" name="aktif" value="1"
                       @checked(old('aktif', true))>
                Aktif
            </label>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('admin.mahasiswa.index') }}">Kembali</a>
    </form>
</body>
</html>

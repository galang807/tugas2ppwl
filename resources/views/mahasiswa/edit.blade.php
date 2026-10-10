<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.mahasiswa.update', $mahasiswa) }}" method="POST">
        @csrf
        @method('PUT')

        <p>NIM<br>
            <input type="text" name="nim"
                   value="{{ old('nim', $mahasiswa->nim) }}" required>
        </p>

        <p>Nama<br>
            <input type="text" name="nama"
                   value="{{ old('nama', $mahasiswa->nama) }}" required>
        </p>

        <p>Email<br>
            <input type="email" name="email"
                   value="{{ old('email', $mahasiswa->email) }}" required>
        </p>

        <p>Program Studi<br>
            <input type="text" name="prodi"
                   value="{{ old('prodi', $mahasiswa->prodi) }}" required>
        </p>

        <p>Semester<br>
            <input type="number" name="semester" min="1" max="14"
                   value="{{ old('semester', $mahasiswa->semester) }}" required>
        </p>

        <p>
            <label>
                <input type="checkbox" name="aktif" value="1"
                       @checked(old('aktif', $mahasiswa->aktif))>
                Aktif
            </label>
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('admin.mahasiswa.index') }}">Kembali</a>
    </form>
</body>
</html>


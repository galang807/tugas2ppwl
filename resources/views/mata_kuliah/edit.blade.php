<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <h1>Edit Mata Kuliah</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.mata-kuliah.update', $mataKuliah) }}"
          method="POST">
        @csrf
        @method('PUT')

        <p>Kode Mata Kuliah<br>
            <input type="text" name="kode"
                   value="{{ old('kode', $mataKuliah->kode) }}" required>
        </p>

        <p>Nama Mata Kuliah<br>
            <input type="text" name="nama"
                   value="{{ old('nama', $mataKuliah->nama) }}" required>
        </p>

        <p>SKS<br>
            <input type="number" name="sks" min="1" max="6"
                   value="{{ old('sks', $mataKuliah->sks) }}" required>
        </p>

        <p>Semester<br>
            <input type="number" name="semester" min="1" max="14"
                   value="{{ old('semester', $mataKuliah->semester) }}" required>
        </p>

        <p>
            <label>
                <input type="checkbox" name="aktif" value="1"
                       @checked(old('aktif', $mataKuliah->aktif))>
                Aktif
            </label>
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('admin.mata-kuliah.index') }}">Kembali</a>
    </form>
</body>
</html>

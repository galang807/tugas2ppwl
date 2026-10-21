<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    @if (session('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    <a href="{{ route('admin.mahasiswa.create') }}">
        + Tambah Mahasiswa
    </a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Program Studi</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                    <td>{{ $mahasiswa->semester }}</td>
                    <td>
                        @if ($mahasiswa->status === 'aktif')
                            <x-badge variant="success">Aktif</x-badge>
                        @elseif ($mahasiswa->status === 'cuti')
                            <x-badge variant="warning">Cuti</x-badge>
                        @else
                            <x-badge variant="danger">Nonaktif</x-badge>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.mahasiswa.show', $mahasiswa) }}">
                            Detail
                        </a>

                        <a href="{{ route('admin.mahasiswa.edit', $mahasiswa) }}">
                            Edit
                        </a>

                        <form
                            action="{{ route('admin.mahasiswa.destroy', $mahasiswa) }}"
                            method="POST"
                            style="display:inline"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
                        <x-empty-state
                            title="Belum Ada Mahasiswa"
                            description="Silakan tambahkan data mahasiswa terlebih dahulu."
                        />
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>


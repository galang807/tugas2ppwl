
@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa')

@section('content')
    <h1>Dashboard Mahasiswa</h1>
    <p>Selamat datang, {{ $admin }}!</p>

    <x-alert type="info">
        Selamat datang di Dashboard Akademik.
    </x-alert>

    <div style="display:flex; gap:15px; flex-wrap:wrap; margin-bottom:25px;">
        <x-card>
            <h3>Jumlah Mahasiswa</h3>
            <h2>{{ $totalMahasiswa }}</h2>
            <x-badge variant="success">Data Tersedia</x-badge>
        </x-card>

        <x-card>
            <h3>Mahasiswa Aktif</h3>
            <h2>{{ $mahasiswaAktif }}</h2>
            <x-badge variant="success">Aktif</x-badge>
        </x-card>

        <x-card>
            <h3>Mahasiswa Cuti</h3>
            <h2>{{ $mahasiswaCuti }}</h2>
            <x-badge variant="warning">Cuti</x-badge>
        </x-card>

        <x-card>
            <h3>Mahasiswa Nonaktif</h3>
            <h2>{{ $mahasiswaNonaktif }}</h2>
            <x-badge variant="danger">Nonaktif</x-badge>
        </x-card>

        <x-card>
            <h3>Mahasiswa Terbaru</h3>
            <h2>{{ $jumlahMahasiswaTerbaru }}</h2>
            <x-badge variant="success">5 Data Terbaru</x-badge>
        </x-card>
    </div>

    <x-panel>
        <x-slot:title>
            Mahasiswa Terbaru
        </x-slot:title>

        <x-slot:actions>
            <x-button
                type="button"
                variant="primary"
                onclick="window.location.href='{{ route('admin.mahasiswa.index') }}'">
                Lihat Data Mahasiswa
            </x-button>
        </x-slot:actions>

        <div style="overflow-x:auto;">
            <table width="100%" cellpadding="10" cellspacing="0">
                <thead>
                    <tr style="background:#dbeafe;">
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Program Studi</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($mahasiswaTerbaru as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->prodi }}</td>
                            <td>
                                @if ($mahasiswa->status === 'aktif')
                                    <x-badge variant="success">Aktif</x-badge>
                                @elseif ($mahasiswa->status === 'cuti')
                                    <x-badge variant="warning">Cuti</x-badge>
                                @else
                                    <x-badge variant="danger">Nonaktif</x-badge>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <x-empty-state
                                    title="Belum Ada Mahasiswa"
                                    description="Silakan tambahkan data mahasiswa terlebih dahulu." />
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-panel>

    <x-panel>
        <x-slot:title>
            Informasi Dashboard
        </x-slot:title>

        <p>
            Dashboard ini menggunakan Blade Directive, Layout,
            Partial, Component, dan Slot.
        </p>

        <x-alert type="success">
            Dashboard berhasil menggunakan Blade Component.
        </x-alert>
    </x-panel>
@endsection


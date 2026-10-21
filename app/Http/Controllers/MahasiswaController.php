<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->get();

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'string', 'max:20', 'unique:mahasiswas,nim'],
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'unique:mahasiswas,email'],
            'prodi' => ['required', 'string', 'max:100'],
            'semester' => ['required', 'integer', 'min:1', 'max:14'],
            'status' => ['required', Rule::in(['aktif', 'cuti', 'nonaktif'])],
        ]);

        // Menyesuaikan kolom aktif lama dengan status baru.
        $validated['aktif'] = $validated['status'] === 'aktif';

        Mahasiswa::create($validated);

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => [
                'required', 'string', 'max:20',
                Rule::unique('mahasiswas', 'nim')->ignore($mahasiswa->id),
            ],
            'nama' => ['required', 'string', 'max:100'],
            'email' => [
                'required', 'email',
                Rule::unique('mahasiswas', 'email')->ignore($mahasiswa->id),
            ],
            'prodi' => ['required', 'string', 'max:100'],
            'semester' => ['required', 'integer', 'min:1', 'max:14'],
            'status' => ['required', Rule::in(['aktif', 'cuti', 'nonaktif'])],
        ]);

        $validated['aktif'] = $validated['status'] === 'aktif';

        $mahasiswa->update($validated);

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}

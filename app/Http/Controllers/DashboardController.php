<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $mahasiswaTerbaru = Mahasiswa::latest()
            ->take(5)
            ->get();

        return view('dashboard', [
            'admin' => 'Administrator',
            'totalMahasiswa' => Mahasiswa::count(),
            'mahasiswaAktif' => Mahasiswa::where('status', 'aktif')->count(),
            'mahasiswaCuti' => Mahasiswa::where('status', 'cuti')->count(),
            'mahasiswaNonaktif' => Mahasiswa::where('status', 'nonaktif')->count(),
            'jumlahMahasiswaTerbaru' => $mahasiswaTerbaru->count(),
            'mahasiswaTerbaru' => $mahasiswaTerbaru,
        ]);
    }
}

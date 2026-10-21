
<aside class="sidebar">
    <a href="{{ route('admin.dashboard') }}"
       @class(['active' => request()->routeIs('admin.dashboard')])>
        Dashboard
    </a>

    <a href="{{ route('admin.mahasiswa.index') }}"
       @class(['active' => request()->routeIs('admin.mahasiswa.*')])>
        Data Mahasiswa
    </a>

    <a href="{{ route('admin.mata-kuliah.index') }}"
       @class(['active' => request()->routeIs('admin.mata-kuliah.*')])>
        Data Mata Kuliah
    </a>
</aside>

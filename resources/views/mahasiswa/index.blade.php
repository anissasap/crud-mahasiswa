@extends('layouts.app')

@section('content')
<div class="card shadow-sm rounded-4">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center rounded-top-4">
        <h4 class="mb-0">Data Mahasiswa</h4>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle me-1"></i> Tambah Mahasiswa
        </a>
    </div>
    <div class="card-body p-4">
        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark rounded-top-4">
                    <tr>
                        <th scope="col" style="width: 5%;">ID</th>
                        <th scope="col" style="width: 25%;">Nama</th>
                        <th scope="col" style="width: 15%;">NIM</th>
                        <th scope="col" style="width: 20%;">Jurusan</th>
                        <th scope="col" style="width: 20%;">Email</th>
                        <th scope="col" style="width: 15%;" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswas as $mhs)
                    <tr>
                        <td>{{ $mhs->id }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-info btn-sm btn-action" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm btn-action" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm btn-action" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            Data mahasiswa tidak ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

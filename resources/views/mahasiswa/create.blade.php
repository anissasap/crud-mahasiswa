@extends('layouts.app')

@section('content')
<div class="card shadow-sm rounded-4">
    <div class="card-header bg-primary text-white rounded-top-4">
        <h4 class="mb-0">Tambah Mahasiswa</h4>
    </div>
    <div class="card-body p-4">
        {{-- Tampilkan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Terjadi kesalahan!</strong> Silakan periksa kembali formulir Anda.
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        @endif

        <form action="{{ route('mahasiswa.store') }}" method="POST" novalidate>
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" 
                       class="form-control @error('nama') is-invalid @enderror" 
                       id="nama" 
                       name="nama" 
                       value="{{ old('nama') }}" 
                       placeholder="Masukkan nama lengkap" 
                       required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="nim" class="form-label fw-semibold">NIM</label>
                <input type="text" 
                       class="form-control @error('nim') is-invalid @enderror" 
                       id="nim" 
                       name="nim" 
                       value="{{ old('nim') }}" 
                       placeholder="Masukkan NIM" 
                       required>
                @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
<div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" 
           class="form-control @error('jurusan') is-invalid @enderror" 
           id="jurusan" 
           name="jurusan" 
           value="{{ old('jurusan') }}" 
           placeholder="Masukkan jurusan" 
           required>
    @error('jurusan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

            <div class="mb-4">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       id="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       placeholder="Masukkan alamat email" 
                       required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

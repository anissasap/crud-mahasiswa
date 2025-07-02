@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Detail Mahasiswa</h4>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Nama</div>
            <div class="col-md-9">{{ $mahasiswa->nama }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">NIM</div>
            <div class="col-md-9">{{ $mahasiswa->nim }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Jurusan</div>
            <div class="col-md-9">{{ $mahasiswa->jurusan }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">Email</div>
            <div class="col-md-9">{{ $mahasiswa->email }}</div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning ms-2">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

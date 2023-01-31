@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <h2 class="pt-4">Edit Jurusan</h2>
        <hr>
        <form action="{{ url('/jurusans/' . $jurusan->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control @error('nama_jurusan')
              is-invalid
            @enderror" value="{{ old('nama_jurusan') ?? $jurusan->nama_jurusan }}">
            @error('nama_jurusan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nama_dekan" class="form-label">Nama dekan</label>
            <input type="text" name="nama_dekan" id="nama_dekan" class="form-control @error('nama_dekan')
              is-invalid
            @enderror" value="{{ old('nama_dekan') ?? $jurusan->nama_dekan }}">
            @error('nama_dekan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="jumlah_mahasiswa" class="form-label">Jumlah Mahasiswa</label>
            <input type="text" name="jumlah_mahasiswa" id="jumlah_mahasiswa" class="form-control @error('jumlah_mahasiswa')
              is-invalid
            @enderror" value="{{ old('jumlah_mahasiswa') ?? $jurusan->jumlah_mahasiswa }}">
            @error('jumlah_mahasiswa')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
@endsection
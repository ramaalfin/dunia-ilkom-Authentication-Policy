@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="py-4 d-flex justify-content-between align-items-center">
        <h2>Tabel Jurusan</h2>
        <a href="{{ url('/jurusans/create') }}" class="btn btn-primary">Tambah Jurusan</a>
      </div>
    </div>

    @if (session()->has('pesan'))
        <div class="alert alert-success" role="alert">
          {{ session()->get('pesan') }}
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Jurusan</th>
          <th>Nama Dekan</th>
          <th>Jumlah Mahasiswa</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($jurusans as $jurusan)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>
              <a href="{{ url('/jurusans/' . $jurusan->id) }}">{{ $jurusan->nama_jurusan }}</a>
            </td>
            <td>{{ $jurusan->nama_dekan }}</td>
            <td>{{ $jurusan->jumlah_mahasiswa }}</td>
          </tr>
        @empty
          <td class="text-center" colspan="6">Tidak Ada Data</td>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
  
</div>
@endsection
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pt-4 d-flex justify-content-between align-items-center">
          <h2>Info Jurusan {{ $jurusan->nama_jurusan }}</h2>
          <div class="d-flex">
            <a href="{{ url('/jurusans/' . $jurusan->id) . '/update' }}" class="btn btn-primary">Edit</a>
            <form action="{{ url('/jurusans/' . $jurusan->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger ms-3">Hapus</button>
            </form>
          </div>
        </div>

        <hr>

        @if (session()->has('pesan'))
          <div class="alert alert-success" role="alert">
            {{ session()->get('pesan') }}
          </div>
        @endif

        <ul>
          <li>Nama Jurusan : {{ $jurusan->nama_jurusan }}</li>
          <li>Nama Dekan : {{ $jurusan->nama_dekan }}</li>
          <li>Jumlah Mahasiswa : {{ $jurusan->jumlah_mahasiswa }}</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
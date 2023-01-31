@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if (Auth::check())
        <h4>Selamat datang {{ Auth::user()->name }}</h4>
      @endif
      <div class="card">
        <div class="card-header">{{ $judul }}</div>
        <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum, recusandae rerum nesciunt, praesentium esse saepe quidem rem eum sed laudantium, ducimus voluptatem voluptas placeat enim fugit omnis accusamus fugiat.</div>
      </div>
    </div>
  </div>
</div>
@endsection
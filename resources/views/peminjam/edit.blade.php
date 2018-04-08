@extends('template')

@section('main')
  <div id="peminjam">
  </br>
    <h1 align='center'>Edit Data</h1>
    {!! Form::model($peminjaman, ['method' => 'PATCH', 'action' => ['PeminjamController@update', $peminjaman->id]]) !!}
      @include('peminjam.form', ['SubmitButtonText' => 'UPDATE'])
    {!! Form::close() !!}
  </div>
@stop

@section('footer')
  @include('footer')
@stop

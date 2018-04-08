@extends('template')

@section('main')
      <div id='peminjam'>
      </br>
        <h1 align='center'>Detail Peminjam</h1>
      </br>
        <table class="table table-striped">
          <tr>
            <th> NIM </th>
            <td> {{ $peminjaman->nim }} </td>
          </tr>
          <tr>
            <th> No Sepeda </th>
            <td> {{ $peminjaman->nosepeda }} </td>
          </tr>
            <th> Shelter </th>
            <td> {{ $peminjaman->shelter }} </td>
          </tr>
            <th> Status </th>
            <td> {{ $peminjaman->status}} </td>
          </tr>
      </table>
    </div>
@stop
@section('footer')
	@include('footer')
@stop

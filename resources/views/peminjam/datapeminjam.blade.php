@extends('template')

@section('main')
<div id="peminjam">
</br>
</br>
			<h1 align="center">DATA PEMINJAM</h1>
</br>
</br>
			<?php if (!empty($peminjam_list)):?>
					<table class="table">
							<thead>
								<tr>
									<th>NIM</th>
									<th>No Sepeda</th>
									<th>Shelter</th>
									<th>Status</th>
									<th>Action</th>
							</thead>
							<tbody>
									<?php foreach($peminjam_list as $peminjaman): ?>
										<tr>
											<td>{{ $peminjaman->nim }}</td>
											<td>{{ $peminjaman->nosepeda }}</td>
											<td>{{ $peminjaman->shelter }}</td>
											<td>{{ $peminjaman->status }}</td>
											<td>
												<div class="box-button">
													{{ link_to('datapeminjam/'.$peminjaman->id, 'Detail', ['class'=> 'btn btn-success btn-sm']) }}
												</div>
												<div class="box-button">
													{{ link_to('datapeminjam/'.$peminjaman->id.'/edit', 'Edit', ['class'=> 'btn btn-warning btn-sm']) }}
												</div>
												<div class="box-button">
													{!! Form::open(['method' => 'DELETE', 'action' => ['PeminjamController@destroy', $peminjaman->id]]) !!}
													{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
													{!! Form::close() !!}
												</div>

											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
					</table>
			<?php else: ?>
					<p> Tidak ada data peminjam. </p>
			<?php endif ?>
		<div class="table-nav">
			<div class="jumlah-data">
				<strong>Jumlah Peminjam: {{ $jumlah_peminjaman }}</strong>
			</div>
			<div class="paging">
				{{ $peminjam_list->links() }}
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="tombol-nav">
			<div align="center">
				<a href="peminjaman" class="btn btn-primary"> Tambah Peminjam </a>
			</div>
		</div>
</div>
<br>
<br>
@stop
@section('footer')
	@include('footer')
@stop

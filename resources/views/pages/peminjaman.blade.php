@extends('template')

@section('main')
	<div id="peminjaman">
	</br>
		<h1 align='center'>PEMINJAMAN</h1>
	</br>
	</br>
		{!! Form::open(['url' => 'peminjaman']) !!}
				@include('peminjam.form',['SubmitButtonText' => 'SUBMIT'])
			{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop

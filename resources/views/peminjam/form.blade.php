<div class="form-group">
    {!! Form::label('nim', 'NIM:',['class' => 'control-label']) !!}
    {!! Form::text('nim', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nosepeda','No Sepeda:',['class' => 'control-label']) !!}
    {!! Form::text('nosepeda', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('shelter','Shelter:',['class' => 'control-label']) !!}
    {!! Form::text('shelter', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('status','Status:',['class' => 'control-label']) !!}
        <div class="radio">
            <label> {!! Form::radio('status','Dipinjam') !!} Dipinjam</label>
        </div>
        <div class="radio">
            <label> {!! Form::radio('status','Dikembalikan') !!} Dikembalikan</label>
        </div>
</div>

  <div class="form-group" align="center">
        {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-primary form-control']) !!}
  </div>
  <br>
  <br>

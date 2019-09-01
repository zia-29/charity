@extends('layouts.admin')



@section('content')
<h1>Edit Gallary</h1>

<div class="col-sm-3">
<img src="{{$gallary->photo ? $gallary->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

</div>

<div class="col-sm-9">

{!!Form::model($gallary, ['method'=>'PATCH','action'=>['AdminGallaryController@update', $gallary->id ],'files'=>true])!!}
<div class="form-group">
    {!! Form::label('title','Title')!!}
    {!! Form::text('title',null,['class'=>'form-control'])!!}
</div>

    <div class="form-group">
        {!! Form::label('date','Date')!!}
        {!! Form::date('content',null,['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
            {!! Form::label('file','photo')!!}
            {!! Form::file('photo_id',null,['class'=>'form-control'])!!}
    </div>


<div class="form-group">
    {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6'])!!}
</div>
{!!Form::close() !!}

{!!Form::open(['method'=>'DELETE','action'=>['AdminGallaryController@destroy', $gallary->id]])!!}
<div class="form-group">
        {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-6'])!!}
    </div>
    {!!Form::close() !!}
    




@include('includes.form_error')
</div>
@endsection


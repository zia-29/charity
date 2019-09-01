@extends('layouts.admin')



@section('content')
<h1>Edit Causes</h1>

<div class="col-sm-3">
<img src="{{$causes->photo ? $causes->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

</div>

<div class="col-sm-9">

{!!Form::model($causes, ['method'=>'PATCH','action'=>['AdminCausesController@update', $causes->id ],'files'=>true])!!}
<div class="form-group">
    {!! Form::label('title','Title')!!}
    {!! Form::text('title',null,['class'=>'form-control'])!!}
</div>

    <div class="form-group">
        {!! Form::label('content','Content')!!}
        {!! Form::textarea('content',null,['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
            {!! Form::label('file','photo')!!}
            {!! Form::file('photo_id',null,['class'=>'form-control'])!!}
    </div>


<div class="form-group">
    {!! Form::submit('Update causes', ['class'=>'btn btn-primary col-sm-6'])!!}
</div>
{!!Form::close() !!}

{!!Form::open(['method'=>'DELETE','action'=>['AdminCausesController@destroy', $causes->id]])!!}
<div class="form-group">
        {!! Form::submit('Delete Causes', ['class'=>'btn btn-danger col-sm-6'])!!}
    </div>
    {!!Form::close() !!}
    




@include('includes.form_error')
</div>
@endsection


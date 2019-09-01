@extends('layouts.admin')

@section('content')

<h1>Edit About us</h1>

<div class="col-sm-3">

        <img src="{{$about->photo ? $about->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

</div>
<div class="col-sm-9">
{!!Form::model($about,['method'=>'PATCH','action'=>['AdminAboutusController@update',$about->id] ,'files'=>true])!!}

<div class="form-group">
    {!! Form::label('title','title')!!}
    {!! Form::text('title',null,['class'=>'form-control'])!!}
</div>

    <div class="form-group">
        {!! Form::label('content','content')!!}
        {!! Form::textarea('content',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
            {!! Form::label('file','photo')!!}
            {!! Form::file('photo_id',null,['class'=>'form-control'])!!}
    </div>

<div class="form-group">
    {!! Form::submit('Update About us', ['class'=>'btn btn-primary col-sm-6'])!!}
</div>
{!!Form::close() !!}

{!!Form::open(['method'=>'DELETE','action'=>['AdminAboutusController@destroy', $about->id]])!!}
<div class="form-group">
        {!! Form::submit('Delete Anout us', ['class'=>'btn btn-danger col-sm-6'])!!}
    </div>
    {!!Form::close() !!}

@endsection
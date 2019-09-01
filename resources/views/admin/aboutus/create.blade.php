@extends('layouts.admin')

@section('content')

<h1>Create About us</h1>


{!!Form::open(['method'=>'POST','action'=>'AdminAboutusController@store','files'=>true])!!}

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
    {!! Form::submit('Create About us', ['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close() !!}

@endsection
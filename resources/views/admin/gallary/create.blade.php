@extends('layouts.admin')



@section('content')
<h1>Create Gallary</h1>
{!!Form::open(['method'=>'POST','action'=>'AdminGallaryController@store','files'=>true])!!}
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
    {!! Form::submit('Create', ['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close() !!}

{{-- @include('includes.form_error') --}}

@endsection


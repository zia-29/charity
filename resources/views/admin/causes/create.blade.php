@extends('layouts.admin')



@section('content')
<h1>Create Causes</h1>
{!!Form::open(['method'=>'POST','action'=>'AdminCausesController@store','files'=>true])!!}
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
    {!! Form::submit('Create Causes', ['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close() !!}

{{-- @include('includes.form_error') --}}

@endsection


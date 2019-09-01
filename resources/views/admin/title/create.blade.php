@extends('layouts.admin')



@section('content')
<h1>Create Heading</h1>
{!!Form::open(['method'=>'POST','action'=>'AdminTitleController@store','files'=>true])!!}
<div class="form-group">
        {!! Form::label('title','Heading')!!}
        {!! Form::text('heading',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
            {!! Form::label('title','Title')!!}
            {!! Form::text('title',null,['class'=>'form-control'])!!}
        </div>
    
        <div class="form-group">
            {!! Form::label('content','Content')!!}
            {!! Form::textarea('content',null,['class'=>'form-control'])!!}
        </div>


<div class="form-group">
    {!! Form::submit('Create', ['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close() !!}

{{-- @include('includes.form_error') --}}

@endsection


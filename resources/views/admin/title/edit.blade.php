@extends('layouts.admin')



@section('content')
<h1>Edit Hero Title</h1>

<div class="col-sm-9">

{!!Form::model($title, ['method'=>'PATCH','action'=>['AdminTitleController@update', $title->id ],'files'=>true])!!}
<div class="form-group">
    {!! Form::label('title','Heading')!!}
    {!! Form::text('title',null,['class'=>'form-control'])!!}
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
    {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6'])!!}
</div>
{!!Form::close() !!}


@include('includes.form_error')
</div>
@endsection


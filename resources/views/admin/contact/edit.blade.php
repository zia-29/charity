@extends('layouts.admin')



@section('content')
<h1>view Contact</h1>


{!!Form::model($contact, ['method'=>'PATCH','action'=>['AdminContactController@update', $contact->id ],'files'=>true])!!}
<div class="form-group">
    {!! Form::label('name','Name')!!}
    {!! Form::text('name',null,['class'=>'form-control'])!!}
</div>

    <div class="form-group">
        {!! Form::label('email','Email')!!}
        {!! Form::email('email',null,['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
            {!! Form::label('message','Message')!!}
            {!! Form::textarea('message',null,['class'=>'form-control'])!!}
    </div>


{{-- <div class="form-group">
    {!! Form::submit('Update causes', ['class'=>'btn btn-primary col-sm-6'])!!}
</div> --}}
{!!Form::close() !!}

{!!Form::open(['method'=>'DELETE','action'=>['AdminContactController@destroy', $contact->id]])!!}
<div class="form-group">
        {!! Form::submit('Delete Contact', ['class'=>'btn btn-danger col-sm-6'])!!}
    </div>
    {!!Form::close() !!}
    




@include('includes.form_error')
</div>
@endsection


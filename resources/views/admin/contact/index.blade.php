@extends('layouts.admin')



@section('content')

<h1>Contact</h1>

<table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                {{-- <th>Created</th>
                <th>Updated</th> --}}
            </tr>
        </thead>
        <tbody>
    
            @if($contact)
            @foreach($contact as $con)

            <tr>
            <td>{{$con->id}}</td>
            <td><a href="{{route('admin.contact.edit', $con->id)}}">{{$con->name}}</td>
            <td>{{$con->email}}</td>
            <td>{{str_limit($con->message,100)}}</td>

            </tr>
    
        @endforeach
        @endif
        
    </tbody>


@endsection
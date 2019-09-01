@extends('layouts.admin')



@section('content')

<h1>Causes</h1>

<table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>content</th>
                <th>Image</th>
                {{-- <th>Created</th>
                <th>Updated</th> --}}
            </tr>
        </thead>
        <tbody>
    
            @if($causes)
            @foreach($causes as $cause)

            <tr>
            <td>{{$cause->id}}</td>
            <td><a href="{{route('admin.causes.edit', $cause->id)}}">{{$cause->title}}</td>
            <td>{{str_limit($cause->content,100)}}</td>
            <td><img height="50" src="{{$cause->photo ? url('/').$cause->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            {{-- <td><img height="50" src="{{$cause->file}}" alt=""></td> --}}
            </tr>
    
        @endforeach
        @endif
        
    </tbody>


@endsection
@extends('layouts.admin')



@section('content')

<h1>Causes</h1>

<table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Heading</th>
                <th>Title</th>
                <th>Content</th>
                {{-- <th>Created</th>
                <th>Updated</th> --}}
            </tr>
        </thead>
        <tbody>
    
            @if($title)
            @foreach($title as $title)

            <tr>
            <td>{{$title->id}}</td>
            <td><a href="{{route('admin.title.edit', $title->id)}}">{{$title->heading}}</td>
            <td>{{$title->title}}</td>
            <td>{{str_limit($title->content,100)}}</td>
            </tr>
    
        @endforeach
        @endif
        
    </tbody>


@endsection
@extends('layouts.admin')



@section('content')

<h1>Gallary</h1>

<table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Date</th>
                <th>Image</th>
                {{-- <th>Created</th>
                <th>Updated</th> --}}
            </tr>
        </thead>
        <tbody>
    
            @if($gallary)
            @foreach($gallary as $gal)

            <tr>
            <td>{{$gal->id}}</td>
            <td><a href="{{route('admin.gallary.edit', $gal->id)}}">{{$gal->title}}</td>
            <td>{{$gal->content}}</td>
            <td><img height="50" src="{{$gal->photo ? url('/').$gal->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            {{-- <td><img height="50" src="{{$cause->file}}" alt=""></td> --}}
            </tr>
    
        @endforeach
        @endif
        
    </tbody>


@endsection
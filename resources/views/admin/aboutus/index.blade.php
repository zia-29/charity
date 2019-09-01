@extends('layouts.admin')

@section('content')

<h1>About us</h1>

<table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>content</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
    
            @if($about)
            @foreach($about as $about)
    
            <tr>
            <td>{{$about->id}}</td>
            <td><a href="{{route('admin.aboutus.edit',$about->id)}}">{{$about->title}}</td>
            <td>{{str_limit($about->content,100)}}</td>
            <td><img height="50" src="{{$about->photo ? $about->photo->file: 'http://placehold.it/400x400'}}" alt=""></td>
            
            {{-- <td>{{$user->is_active == 1 ? 'Active':'Not Active'}}</td> --}}
            {{-- <td>{{$about->created_at->diffForHumans()}}</td>
            <td>{{$about->updated_at->diffForHumans()}}</td> --}}
            </tr>
    
        @endforeach
        @endif
        
    </tbody>
    </table>



@endsection
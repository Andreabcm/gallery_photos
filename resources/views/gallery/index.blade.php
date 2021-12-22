@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('message'))
{{ Session::get('message') }}
@endif

<div class="container">
    <div class="row justify-content-center">
        @foreach($data as $gallery)
    <div class="card m-4 " style="width: 18rem">
        <img class="card-img-top pt-3" style="height: 100%; width: 100%"src="{{ asset('storage').'/'.$gallery->image }}" alt="image favorite">
    <div class="card-body fw-bold">
        <h3>{{ $gallery->title }}</h3>
        <a class="btn btn-outline-info btn-lg" href="{{ url('/gallery/'.$gallery->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a> 
        <form class="d-inline" action="{{ url('/gallery/'.$gallery->id) }}" method="post">
            @csrf    
            {{ method_field('DELETE') }}
            <button class="btn btn-outline-info btn-lg" type="submit" onclick="return confirm('Do you want to delete?')"
                value="Delete">
                <i class="bi bi-trash-fill" style="width:1rem"></i>
            </button>
        </form> 
    </div>
    </div>
        @endforeach
    </div>
</div>
@endsection
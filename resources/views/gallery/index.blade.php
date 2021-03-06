@extends('layouts.app')
@section('content')


<div class="container-fluid container-special">
    @if(Session::has('message'))
    <div class="alert alert-primary alert-dismissible" style="width: 250px" role="alert">  
        {{ Session::get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row justify-content-center">
        @foreach($data as $gallery)
    <div class="card m-4 card-special col-12" style="width: 18rem">
        <img class="card-img-top pt-3" style="max-width: 18rem; max-height: 10rem" src="{{ asset('storage').'/'.$gallery->image }}" alt="image favorite">
    <div class="card-body fw-bold">
        <h3>{{ $gallery->title }}</h3>
        <a class="btn btn-outline-dark btn-lg" href="{{ url('/gallery/'.$gallery->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a> 
        <form class="d-inline" action="{{ url('/gallery/'.$gallery->id) }}" method="post">
            @csrf    
            {{ method_field('DELETE') }}
            <button class="btn btn-outline-dark btn-lg" type="submit" onclick="return confirm('Do you want to delete?')"
                value="Delete">
                <i class="bi bi-trash-fill"></i>
            </button>
        </form> 
    </div>
    </div>
        @endforeach
    </div>
</div>

@endsection
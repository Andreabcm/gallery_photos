@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('message'))
{{ Session::get('message') }}
@endif

<a class="btn btn-info" href="{{ url('/gallery/create') }}"> CREATE FAVORITE PHOTO </a>
<br/>
<br/>
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>IMAGE</th>
            <th>TITLE</th>
        </tr>
    </thead>

    <tbody>
        @foreach($galleries as $gallery)
        <tr>
            <td>{{ $gallery->id }}</td>
            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$gallery->image }}" alt="" width="100">
            </td>
            <td>{{ $gallery->title }}</td>
            
            <td>
            <a class="btn btn-dark" href="{{ url('/gallery/'.$gallery->id.'/edit') }}"> Edit </a>    
        

            <form class="d-inline" action="{{ url('/gallery/'.$gallery->id) }}" method="post">
            @csrf    
            {{ method_field('DELETE') }}
            <input class="btn btn-dark" type="submit" onclick="return confirm('Do you want to delete?')"
            value="Delete">
            </form> 

            </td> 
        </tr>
        @endforeach
    </tbody>

</table>

</div>
@endsection
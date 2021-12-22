@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/gallery/' .$gallery->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('gallery.form',['mode'=>'Save']);
</form>

</div>
@endsection
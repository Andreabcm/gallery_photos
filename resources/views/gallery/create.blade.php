@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/gallery') }}" method="post" enctype="multipart/form-data">
@csrf
@include('gallery.form',['mode'=>'Create']);
</form>

</div>
@endsection
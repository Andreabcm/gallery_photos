<h2> {{ $mode }} image </h2>

<div class="form-group">
<label for="Image"> Image </label>
    @if(isset($gallery->Image))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$gallery->image }}" alt="" width="100">
    @endif
<input class="form-control" type="file" name="Image" value=" " id="Image">
<br>
</div>

<div class="form-group">
<label for="Title"> Name </label>
<input class="form-control" type="text" name="Title" value="{{ isset($gallery->title) ?$gallery->title:'' }}" id="Title">
<br>
</div>

<input class="btn btn-dark" type="submit" value="{{$mode}}">

<a class="btn btn-dark" href="{{ url('/gallery/') }}"> Return </a>


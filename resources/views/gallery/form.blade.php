
<h2> {{ $mode }} image </h2>

<label for="Image"> Image </label>
    @if(isset($gallery->Image))
        <img src="{{ asset('storage').'/'.$gallery->image }}" alt="" width="100">
    @endif
<input type="file" name="Image" value=" " id="Image">
<br>
<label for="Title"> Titledgsgs </label>
<input type="text" name="Title" value="{{ isset($gallery->title) ?$gallery->title:'' }}" id="Title">
<br>
<input type="submit" value="{{$mode}}">
    <a href="{{ url('/gallery/') }}"> Return </a>
<br>
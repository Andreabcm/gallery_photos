
    <label for="Image"> Image </label>
    @if(isset($gallery->Image))
    <img src="{{ asset('storage').'/'.$gallery->Image }}" alt="" width="100">
    @endif
    <input type="file" name="Image" value=" " id="Image">
    <br>
    <label for="Title"> Title </label>
    <input type="text" name="Title" value="{{ isset($gallery->title) ?$gallery->title:'' }}" id="Title">
    <br>
    <input type="submit" value="Save">

    <a href="{{ url('/gallery/') }}"> Return </a>
    <br>
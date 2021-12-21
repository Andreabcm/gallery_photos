
    <label for="Image"> Image </label>
    <img src="{{ asset('storage').'/'.$gallery->Image }}" alt="" width="100">
    <input type="file" name="Image" value=" " id="Image">
    <br>
    <label for="Title"> Title </label>
    <input type="text" name="Title" value="{{ $gallery->title }}" id="Title">
    <br>
    <input type="submit" value="Save">
    <br>
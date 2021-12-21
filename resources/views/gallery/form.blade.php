
    <label for="Image"> Image </label>
    {{ $gallery->image }}
    <input type="file" name="Image" value=" " id="Image">
    <br>
    <label for="Title"> Title </label>
    <input type="text" name="Title" value="{{ $gallery->title }}" id="Title">
    <br>
    <input type="submit" value="Save">
    <br>
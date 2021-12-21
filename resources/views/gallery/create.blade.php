Form para añadir imágenes

<form action="{{ url('/gallery') }}" method="post" enctype="multipart/form-data">
@csrf

    <label for="Image"> Image </label>
    <input type="file" name="Image" id="Image">
    <br>

    <label for="Title"> Title </label>
    <input type="text" name="Title" id="Title">
    <br>

    <input type="submit" value="Save">

</form>
Form para añadir imágenes

<form action="{{ url('/gallery') }}" method="post" enctype="multipart/form-data">
@csrf

    <label for="image"> Image </label>
    <input type="file" name="Image" id="Image">
    <br>

    <label for="title"> Title </label>
    <input type="text" name="Title" id="Title">
    <br>

    <input type="submit" value="Save">

</form>
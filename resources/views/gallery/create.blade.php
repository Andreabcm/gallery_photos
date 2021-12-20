Form para añadir imágenes

<form action="{{ url('/gallery') }}" method="post" enctype="multipart/form-data">
@csrf

    <label for="Photo"> Photo </label>
    <input type="file" name="Photo" id="Photo">
    <br>

    <label for="Title"> Title </label>
    <input type="text" name="Title" id="Title">
    <br>

    <label for="Enviar"> Enviar </label>
    <input type="submit" name="Enviar" id="Enviar">

</form>
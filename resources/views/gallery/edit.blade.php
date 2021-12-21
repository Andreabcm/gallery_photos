Form para editar imágenes

<form action="{{ url('/gallery/' .$gallery->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('gallery.form');

</form>
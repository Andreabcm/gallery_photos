Form para añadir imágenes

<form action="{{ url('/gallery') }}" method="post" enctype="multipart/form-data">
@csrf
@include('gallery.form');

</form>
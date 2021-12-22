<h2> {{ $mode }} image </h2>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>  
</div>
@endif

<div class="form-group">
    <label for="Image"> Image </label>
        @if(isset($gallery->Image))
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$gallery->image }}" alt="image favorite" width="100">
        @endif
    <input class="form-control border border-info" style="width:450px" type="file" name="Image" value=" " id="Image">
    <br>
</div>

<div class="form-group">
    <label for="Title"> Title </Title> </label>
    <input class="form-control border border-info" style="width:450px" type="text" name="Title" value="{{ isset($gallery->title) ?$gallery->title:old('Title')}}" id="Title">
    <br>
</div>

<button class="btn btn-outline-info btn-lg" type="submit" value="{{$mode}}">
    <i class="bi bi-check-circle-fill"></i>
</button>    

<a class="btn btn-outline-info btn-lg" href="{{ url('/gallery/') }}"><i class="bi bi-x-circle-fill"></i></a>


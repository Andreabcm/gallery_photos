
@if(Session::has('message'))
{{ Session::get('message') }}
@endif

<a href="{{ url('/gallery/create') }}"> Create favorite photo </a>

<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Title</th>
        </tr>
    </thead>

    <tbody>
        @foreach($galleries as $gallery)
        <tr>
            <td>{{ $gallery->id }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$gallery->image }}" alt="" width="100">
            </td>
            <td>{{ $gallery->title }}</td>
            
            <td>
            <a href="{{ url('/gallery/'.$gallery->id.'/edit') }}">    
                Edit 

            <form action="{{ url('/gallery/'.$gallery->id) }}" method="post">
            @csrf    
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Do you want to delete?')"
            value="Delete">
            </form> 

            </td> 
        </tr>
        @endforeach
    </tbody>

</table>
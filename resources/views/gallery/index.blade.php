Mostrar imágenes

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
            <td>{{ $gallery->image }}</td>
            <td>{{ $gallery->title }}</td>
            <td>Edit |

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
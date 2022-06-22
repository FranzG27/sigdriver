
<a href="{{route('foto.create')}}" class="btn btn-info mb-3">Nueva Foto</a>
<table id="foto" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-info text-white">
        <tr>
            <th scope="col">conductor_id</th>
            <th scope="col">microbus_id</th>
            <th scope="col">foto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fotos as $foto)
        <tr>

            <td>{{$foto->conductor_id}}</td>
            <td>{{$foto->microbus_id}}</td>
            <td> <a href="/storage/{{$foto->foto}}" target="blank_" >{{$foto->foto}}</a></td>
            <td>
                    
                    <form action="{{route ('foto.destroy',$foto->id)}}" method="POST">   
                     @method('DELETE')
                     @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('CONFIRMAR ELIMINACION')" value="Borrar">Eliminar</button>

                    </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>






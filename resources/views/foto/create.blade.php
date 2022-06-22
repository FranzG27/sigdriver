
    
<form action="/foto" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label for="conductor_id" class="form-label">Conductor</label>
    <select name="conductor_id" id="conductor_id" class="form-control selectpicker">
    @foreach($fotos as $foto)
            <option value="{{$foto->id}}">{{$foto->id}}</option>
    @endforeach
    </select>
 
</div>

<div class="mb-3">
    <label for="microbus_id" class="form-label">Microbus</label>
    <select name="microbus_id" id="microbus_id" class="form-control selectpicker">
    @foreach($fotos as $foto)
            <option value="{{$foto->id}}">{{$foto->id}}</option>
    @endforeach
    </select>
 
</div>
 
 <div class="mb-3">
    <label for="foto" class="form-label">Adjuntar Foto</label>
    <input id="foto" name="foto" type="file" class="form-control-file">  
   


<div class="mb-3">
<a href="/fotos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-info" tabindex="6">Guardar</button>
</div>

</form>

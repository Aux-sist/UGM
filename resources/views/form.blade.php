<h1>Fotografias Alumnos</h1> 
<br>
<form action="{{ url ('/alumnofotografia') }}" method="post" enctype="multipart/form-data">
    @csrf 

<figure class="text-center">
  <h3> <strong>Adjuntar Foto</strong> </h3>
</figure>
<div class="row">
  <div class="col">
  <label for="_nombre"> Nombre: </label>
    <input type="text" class="form-control" name="bd" id="bd" placeholder="Nombre" >
  </div>
  <div class="col">
    <label for="_curp"> CURP: </label>
    <input type="text" class="form-control" name="_curp" id="curp" placeholder="CURP">
  </div>
</div>

<div class="row">
  <div class="col">
  <label for="_idnivel"> Nivel: </label>
    <input type="text" class="form-control" name="_idnivel" id="nivel" placeholder="Nivel" >
  </div>
  <div class="col">
    <label for="_plantel"> Plantel: </label>
    <input type="text" class="form-control" name="_plantel" id="_plantel" placeholder="Plantel">
  </div>
</div>
<br>
<div class="alert alert-warning" role="alert">
<ul>
    <li>El archivo debe cumplir con el formato</li>    
</ul>  
</div>
<br>

</form>
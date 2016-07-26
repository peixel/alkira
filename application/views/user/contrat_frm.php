
        <script>
          $(function() {
            $( "#datepicker" ).datepicker();
          });
  </script>


<form class="form-horizontal" method="post" action="<?=base_url()?>user/save">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Nombre" name="nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Apellidos</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Apellidos" name="apellido">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >CI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="CI" name="cedula">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Local</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Local" name="local">
    </div>
  </div>
  
<div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label" >Ubicacion</label>
      <div class="col-sm-10">
         <select class="form-control" name="ubicacion">
          <option>Planta Baja</option>
          <option>Primer Piso</option>
        </select>
    </div>
</div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Alquiler</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Monto Alquiler" name="alquiler">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Expensas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Monto Expensas" name="expensa">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Garantia</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Monto Expensas" name="garantia">
    </div>
  </div>

<div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label" >Llaves</label>
      <div class="col-sm-10">
         <select class="form-control" name="llave">
          <option>1</option>
          <option>2</option>
        </select>
    </div>
</div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Telefono</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Telefono" name="telefono">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >E-mail</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Email" name="email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Direccion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Direccion" name="direccion">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Observaciones</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" placeholder="Observaciones" name="observaciones">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Fecha Limite</label>
        <div class="col-sm-10">
             
            <input type="text" name="fecha_limite"  class="form-control" id="datepicker"/>
        </div>
       
</div>
  



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
       
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>


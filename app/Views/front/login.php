<div class="container mt-2 mb-2 de-flex justify-content-center" style= "max-width: 540px;">
<div class="card" style="width: 100%">
<div class="card-header text-center">
    <h2>Iniciar Sesion</h2>
</div>
<!--Inicio del Formulario de Login-->
<form class="post">
    <div class="card-body">
        <div class="mb-2" style= "display: flex; flex-direction: column;">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input name="Email" type="email" class="Form-control" placeholder="Correo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input name="Pass" type="password" class="Form-control" placeholder="Contraseña">
        </div>
        <input type="submit" value="Ingresar" class="btn btn-success">
        <input type="submit" value="Cancelar" class="btn btn-danger">
        <br>    
        <span>¿Aun no se registro?<a href="<?php echo base_url('/Registro');?>">Registrarse aqui</a></span>
    </div>
</form>
</div>
</div>
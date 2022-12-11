<?php include_once APPROOT . '/views/includes/header.inc.php';?>
<?php
if (isset($data['msg_error']) && $data['msg_error'] != '') {
    echo '<div class="alert alert-warning">' . $data['msg_error'] . '</div>';
}?>

<form action="<?= URLROOT; ?>/usuarios/registro" method="POST">
    <!-- ========== Start Section ======== poner verificacion== -->
    <div class="mb-3">
        <label for="id" class="form-label">ID de usuario</label>
        <input type="text" class="form-control" name="id-usuario" id="id_usuario" aria-describedby="helpId" placeholder="ID de usuario">
    </div>
    <div class="mb-3">  
        <label for="nombre" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" name="nombre-usuario" id="nombre_usuario" aria-describedby="helpId" placeholder="Nombre de usuario">
    </div>
    <div class="mb-3">
        <label for="contraseña" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="No compartas tu contraseña">
    </div>
    <div class="mb-3">
        <label for="contraseña" class="form-label">Confirmar contraseña</label>
        <input type="password" class="form-control" name="confirmacion" id="confirmacion" aria-describedby="helpId" placeholder="No compartas tu contraseña">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electronico</label>
        <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="correo@hotmail.com">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion del usuario</label>
        <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Calle de los guayabos #115 fraccionamiento de los arboles">
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="text" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="18">
    </div>
    <div class="mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <input type="text" class="form-control" name="sexo" id="sexo" aria-describedby="helpId" placeholder="Hombre/Mujer">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>



</form>
<?php include_once APPROOT . '/views/includes/footer.inc.php'; ?>
<?php include_once APPROOT . '/views/includes/header.inc.php'; ?>
<!-- para recibir emsansjes -->

<?php
if (isset($data['msg_error']) && $data['msg_error'] != '') {
    echo '<div class="alert alert-warning">' . $data['msg_error'] . '</div>';
}?>

<form action="<?= URLROOT; ?>/usuarios/login" method="POST">
    <!-- ========== Start Section ======== poner verificacion== -->
    <div class="mb-3">
        <label for="correo" class="form-label">correo</label>
        <input type="email" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="123@g.com">
        <small id="helpId" class="form-text text-muted">cuenta de correo</small>
    </div>
    <div class="mb-3">
        <label for="contraseña" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="contraseña">
        <small id="helpId" class="form-text text-muted">contraseña</small>
    </div>
    <button type="submit" class="btn btn-primary">entrar</button>

</form>
<?php include_once APPROOT . '/views/includes/footer.inc.php';?>
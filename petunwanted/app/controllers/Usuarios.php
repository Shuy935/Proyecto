<?php
class Usuarios extends controller{
    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }
    public function index()
    {
        $this->view('construccion');
    }
    public function registro()
    {
        $data = [
            'id_usuario' => '',
            'cita' => '',
            'id_cita' => '',
            'nombre_usuario' => '',
            'correo' => '',
            'contraseña' => '',
            'direccion' => '',
            'edad' => '',
            'sexo' => '',
            'carrito' => '',
            'msg_error' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id_usuario' => $_POST['id-usuario'],
                'cita' => '',
                'id_cita' => '',
                'nombre_usuario' => $_POST['nombre-usuario'],
                'correo' => $_POST['correo'],
                'contraseña' => $_POST['contraseña'],
                'direccion' => $_POST['direccion'],
                'edad' => $_POST['edad'],
                'sexo' => $_POST['sexo'],
                'carrito' => '',
                'confirmacion' => $_POST['confirmacion']
            ];
            if (empty($data['id_usuario']) || empty($data['nombre_usuario']) || empty($data['correo']) || empty($data['contraseña']) || empty($data['direccion']) || empty($data['edad']) || empty($data['sexo']) || empty($data['confirmacion'])) {
                $data['msg_error'] = 'llene todos los campos';
            }
            if (!filter_var($data['correo'], FILTER_VALIDATE_EMAIL)) {
                $data['msg_error'] = 'formato no valido';
            }
            if ($data['contraseña'] != $data['confirmacion']) {
                $data['msg_error'] = 'no coincide la contraseña';
            }
            if ($this->usuarioModel->buscarUsuarioPorCorreoUsuarioID($data['id_usuario'], $data['correo'])) {
                $data['msg_error'] = 'usuario id o correo ya existe';
            }
            if (empty($data['msg_error'])) {
                $data['contraseña'] = password_hash($data['contraseña'], PASSWORD_DEFAULT);
                print_r($data);
                if ($this->usuarioModel->registro($data)) {
                    redirigir("/usuarios/login");
                } else {
                    $data['msg_error'] = 'algo malio sal';
                }
            }
        }
        $this->view('usuarios/registro', $data);
    }
}
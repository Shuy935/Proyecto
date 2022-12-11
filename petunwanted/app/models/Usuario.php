<?php


class Usuario
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }
    public function login($correo, $contraseña)
    {
        //query
        $this->db->query('SELECT id,cita,id_cita,id_usuario,nombre_usuario,correo,contraseña, direccion, edad, sexo, carrito from usuarios where usuario_correo=:usuario_correo');
        $this->db->bind(':usuario_correo', $correo);

        $registro = $this->db->unico();
        print_r($registro);

        if ($this->db->conteoReg() > 0) {
            $hashedPassword = $registro->usuario_password;
            if (password_verify($contraseña, $hashedPassword)) {
                return $registro;
            }
        }
        return false;
    }
    public function buscarUsuarioPorCorreoUsuarioID($usuario_id, $usuario_correo)
    {
        $this->db->query('SELECT id_usuario, correo from usuarios where correo=:correo or id_usuario=:id_usuario');
        $this->db->bind(':correo', $usuario_correo);
        $this->db->bind(':id_usuario', $usuario_id);
        
        $registro = $this->db->unico();
        if($this->db->conteoReg()>0){
            return true;
        }
        return false;
    }
    public function registro ($data){
        // Primer paso query
        $this->db->query('INSERT INTO usuarios (id_usuario, nombre_usuario, correo, contraseña, direccion, edad, sexo,carrito) VALUES (:id_usuario, :nombre_usuario, :correo, :contraseña, :direccion, :edad, :sexo, :carrito)');
        // Segundo paso vinculacion
        $this->db->bind(':id_usuario', $data['id_usuario']);
        $this->db->bind(':nombre_usuario', $data['nombre_usuario']);
        $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':contraseña', $data['contraseña']);
        $this->db->bind(':direccion', $data['direccion']);
        $this->db->bind(':edad', $data['edad']);
        $this->db->bind(':sexo', $data['sexo']);
        // Tercer paso ejecucion
        //forma 1
        // return ($this->stmt->execute())?true:false;
        //forma 2
        try {
            //code...
            $this->db->execute();
            return true;
        } catch (Exception $evt) {
            //throw $th;
            return false;
        }
    }
}
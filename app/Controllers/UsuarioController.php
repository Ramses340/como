<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController{


    protected $usuarioModel;

    function __construct(){

        $this->usuarioModel = new UsuarioModel();
    }

    //lista de usuarios (show)
    public function index(){

        $usuarios = $this->usuarioModel->findAll();
        

        $data = array(
            "usuarios" => $usuarios
        );
            return view ("usuarios/index",$data);

    }




    //informacion de usuarios (show)
    public function show($id){


$usuario = $this->usuarioModel->find($id);
$data = array("usuario"=> $usuario);
return view ("usuarios/show", $data);

       /*  $usuarios = $this->usuarioModel->find($id);
        echo "<h1> INFORMACION DE USUARIO $id </h1>";   
        echo "<p>   $usuarios[nombre] - $usuarios[telefono] <br> Correo: $usuarios[correo]</p>";
 */



    }

    //Formulario para crear usuario (show)
    public function create(){
        return view("usuarios/create");
    }

    //codigo para gurdar usuario en la base de datos (redirect -> index)
    public function store(){
        $data = array(
            "usuario_id" => $this-> request->getPost("usuario_id"),
            "evento_id" => $this-> request->getPost("evento_id"),
            "lista_productos" => $this-> request->getPost("lista_productos"),
            "total" => $this-> request->getPost("total"),
            "estado" => $this-> request->getPost("estado"),
            "create_at" => $this-> request->getPost("create_at"),
            "update_at" => $this-> request->getPost("update_at")

        );

            $this->usuarioModel->save($data);

            return redirect()->to("http://localhost/fotobook/public/index.php?/usuarios");


    }

    //Formulario para editar usuario (show)
    public function edit($id){

        $usuario = $this->usuarioModel->find($id);

        $data = array(
            "usuario" =>$usuario
        );

        return view("usuarios/edit", $data);

    }

    //codigo para actualizar usuario (redirect -> show)
    public function update($id){

        $data = array(
            "usuario_id" => $this-> request->getPost("usuario_id"),
            "evento_id" => $this-> request->getPost("evento_id"),
            "lista_productos" => $this-> request->getPost("lista_productos"),
            "total" => $this-> request->getPost("total"),
            "estado" => $this-> request->getPost("estado"),
            "create_at" => $this-> request->getPost("create_at"),
            "update_at" => $this-> request->getPost("update_at")

        );
        $this->usuarioModel->update($id,$data);

        return redirect()->to("http://localhost/fotobook/public/index.php?/usuarios/$id");

    }

    //codigo para eliminar usuarios de la DB (redirect -> index)
    public function delete($id){


    $this->usuarioModel->delete($id);
    return redirect()->to("http://localhost/fotobook/public/index.php?/usuarios");



    }

    public function login (){

        return view("usuarios/login");
        
        
    }


    public function validarLogin(){
        $correo = $this -> request ->getPOST("correo");
        $password = $this ->reqiest->getPOST("password");

        $usuario = $this->usuarioModel-> where("correo",$correo)-> where("password",$password)-> first();
        if (!$usuario) {
            
            return redirect()->to(base_url(). "/login");

        } else {
            session()->set($usuario);

            return redirect()->to(base_url(). "/usuario");

        }
    }
    public function logout() {

    }

}
<?php

namespace App\Models;
/* tabla like */
use CodeIgniter\Model;
    class UsuarioModel extends Model{
        
    protected $table = "pedidos";
    protected $primaryKey = "id";

    protected $allowedFields = [ "usuarios_id", "evento_id", "lista_productos", "total", "estado", "created_at", "updated_at" ];

    protected $useTimestamps = true;

}
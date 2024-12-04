<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function saludar (){
    
        echo "<h1> hola mundo </h1>";
    }

    public function saludar2 ($nombre){
    
        echo "<h1> hola $nombre </h1>";
    }

    public function saludar3 ($nombre, $edad){
    
        echo "Hola $nombre";

        echo($edad>=18)? "Eres mayor de edad " : "eres menor de edad ";
    }


    public function operaciones($num1, $num2, $operacion){

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 / $num2;

        echo "Numero uno: $num1 <br>";
        echo "Numero dos: $num2 <br>";

        switch($operacion) {

   
            case 's': echo "<br>suma: ".($suma); break;
            case 'r': echo "<br>resta: ".($resta); break;
            case 'm': echo "<br>multiplicacion: ".($multiplicacion); break;
            case 'd': echo "<br>division: ".($division); break;
            default : echo "<br>esa operacion no existe )="; break;
        }
       /* echo "Operaciones: <br>
                Suma: $suma <br>
                Resta: $resta <br>
                Multiplicacion: $multiplicacion <br>
                Division: $division";
        */





        
    }


    public function plantilla(){

        return view("plantilla");


    }


}








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "POST" action="<?= base_url()?>">
    
    <div class= "mb-3">
    <label class = "form-label"> Correo </label>
    <input class="form-control" type="email" name="correo" require>    
    </div>
    
    <div class= "mb-3">
    <label class = "form-label"> Contrasena </label>
    <input class="form-control" type="password" name="password" require>    
    </div>

    
    <button class ="btn btn-success btn-block" type="submit"> Iniciar Sesion </button>
    
    </form>
</body>
</html>
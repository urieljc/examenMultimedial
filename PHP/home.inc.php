<!-- <?php
include "coneccion.inc.php";

$sql = "select * from usuario";
$resultado = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultado) > 0) {
    echo "base datos conectado";
} else {
    echo "no existen ningun registro";
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Multimedial</title>

    <style type="text/css">
        body{
            background-color: #084B8A;
        }
        #datos{
            background-color: #D8D8D8;
            text-align: center;
            margin: 20px;
            margin-right: 80px;
            margin-left: 80px;
            padding: 1rem;
            border: 2px solid #ccc;
            border-radius: 25px;
            
        }
        #datos h1{
            font-weight: bold;
            font-style: italic;
            color: #B40404;
        }
        #datos h2{
            color: #0404B4;
            font-style: italic;
            
        }
        #datos h3{
            color: #0404B4;
            font-style: italic;
            font-weight: 200;
        }
        form{
            text-align: center;
            color: #BDBDBD;
            
        }
        #login{
            background-color: #D8D8D8;
            width: 300px;
            height: 200px;
            text-align: center;
            margin: auto;
            border-radius: 50px;
        }
        
        #login div{
            padding-top: 10px;
            
            margin: auto;
        }
        #login #text{
            background-color: #0404B4;
            padding-top:5px;
            padding-bottom: 5px;
            
        }
        #login #ingreso{
            font-weight: bold;
            font-style: italic;
            background-color: #B40404;
            color: #CEF6D8;
        }
        #nombre{
            background-color: #D8D8D8;
            width: 300px;
            height: 100px;
            text-align: center;
            margin: auto;
            border-radius: 50px;
            margin-bottom: 10px;
        }
        #nombre h3{
            padding: 5px;
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>

<body>

<div class="container">
    <div id="datos">
        <h1>Universidad Mayor de San Andres</h1>
        <h2>Facultad de Ciencias Puras y Naturales</h2>
        <h2>Carrera de Informatica</h2>
        <h3>Inf - 324 / Programacion Multimedial</h3>
    </div>

    <form method="post" action="">
        <div id="login">
            <div id="text">
                <h1>Ingreso</h1>
            </div>
            
            <div>
                <input type="text" class="textbox" id="ci" name="ci" placeholder="C.I." />
            </div>
            <div>
                <input type="password" class="textbox" id="clave" name="clave" placeholder="Clave"/>
            </div>
            <div id="boton">
                <input type="submit" value="Ingresar" name="ingreso" id="ingreso" />
            </div>
        </div>
    </form>
</div>
<div id="nombre">
    <h3>Realizado por:</h3>
    <h3>Bazan Panozo Juan Carlos</h3>
</div>
</body>

<?php
    include "coneccion.inc.php";
    session_start();
    if(isset($_POST['ingreso'])){

        $uname = mysqli_real_escape_string($conn,$_POST['ci']);
        $password = mysqli_real_escape_string($conn,$_POST['clave']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from usuario where ci='".$uname."' and clave='".$password."'";
            $result = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: pagina.inc.php');
            }else{
                echo "Invalido el usuario y la clave";
            }
    
        }
    
    }
?>

</html>
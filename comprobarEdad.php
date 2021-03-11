<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ComprobarEdad</title>
</head>
<body>
    <form action="comprobarEdad.php" method="post">
    <?php
        if (isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
            $edad = $_POST['edad'];

            $campos =array();

            /*if($nombre == " "){
                array_push($campos, "El campo nombre no puede estar vacío");
            }
            if($password == "" || strlen[$password]< 6){
                array_push($campos, "El campo password no puede estar vacío");
            }
            if($email == "" || strpos($email, "@") === false){
                array_push($campos, "Ingresar un correo valido");
            }*/
            if($edad == "" && strlen [$edad] < 2){
                array_push($campos, "Ingrese su edad");
            }
            if (count($campos)> 0){
                echo"<div class='Error'>";
                for($i = 0; $i < count($campos); $i++){
                    echo "<li>".$campos[$i]. "</i>";
                }

            }else{
                echo"<div class='Correcto'>
                            Datos correctos";
            }
            echo"</div>";
        }
        ?>
        <p>Nombre:<br/>
            <input type="text" name="nombre">
        </p>

        <p>
            Password:<br/>
            <input type="password" name="password">

        </p>
        <p>
            Correo:<br/>
            <input type="text" name="email">
        </p>

        <p>
            Edad:<br/>
            <input type="text" name="edad">
        </p>

        <p><input type="submit" value="Enviar datos"></p>

    </form>
</body>
</html>
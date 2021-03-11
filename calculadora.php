<?php

require "calculadora.html";

if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
    if ($_POST["operador"] == "suma") {
        print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
        print ('<br /><a href="calculadora.php">Volver</a>');
        echo "<br>";
    } elseif ($_POST["operador"] == "resta") {
        print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
        print ('<br /><a href="calculadora.php">Volver</a>');
        echo "<br>";
    } elseif ($_POST["operador"] == "multiplicacion") {
        print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
        print ('<br /><a href="calculadora.php">Volver</a>');
        echo "<br>";
    } elseif ($_POST["operador"] == "division") {
        print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
        print ('<br /><a href="calculadora.php">Volver</a>');
        echo "<br>";
    }
} else {
    echo "<br>";
    print("Ingresa alg&uacute;n valor" . "<br>");
    echo "<br>";
    print ('<br /><a href="calculadora.php">Volver</a>');
}
?>

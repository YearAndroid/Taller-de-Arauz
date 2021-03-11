<?php
//impuestos
require "indexH.html";
class Empleado {  
        private $campoN;
        private $dinero;
       // private $i = 0;
    public function pagar($campoN,$dinero){
        $this->nombre=$campoN;
        $this->salario=$dinero;
    }
    public function pagarImpuestos(){
        echo $this->nombre;
        echo ' ';
        if ($this->salario> 3000){
            echo 'Debe pagar impuestos';
    
        }else{
            echo'No paga impuestos';
            echo '<br>';
        }
    }
    
}
$nom = $_POST['txtnombre'];
$sala =$_POST['txtsalario'];
$empleado1= new Empleado();
$empleado1->pagar($nom,$sala);
$empleado1->pagarImpuestos();
//$empleado1->pagarImpuestos();








/*
class Empleado {
 /* private $nombre;
  private $sueldo;
  public function pagar($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function pagarImpuestos()
  {
    echo $this->nombre;
    echo ' ';
    if ($this->sueldo>3000)
      echo ' Debe pagar impuestos';
    else
      echo ' No paga impuestos';
    echo '<br>';
  }
}

$empleado1=new Empleado();
$empleado1->pagar('Maycol',2500);
$empleado1->pagarImpuestos();
$empleado1=new Empleado();
$empleado1->pagar('Jesus',4300);
$empleado1->pagarImpuestos();
*/
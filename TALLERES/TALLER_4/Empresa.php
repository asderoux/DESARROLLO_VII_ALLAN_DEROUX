<?php 
  require_once 'Empleado.php';
  require_once 'Gerente.php';
  require_once 'Desarrollador.php';
  class Empresa {
    
    private $empleados = [];

    public function addEmpleados(Empleado $empleado) {
      $this->Empleados[] = $empleado;
  }

  public function listarEmpleados(){
    foreach($this->empleados as $empleado){
      echo $empleado ->getNombre() . ", ID: " . $empleado ->getIdEmpleado() .", Salario Base: " . $empleado ->getSalarioBase() . "<br>";
    }

  }

  public function calcularNominaTotal(){
    $total = 0;
    foreach($this->empleados as $empleado){
      $total += $empleado ->getSalarioBase;
    }
  } 
}

?>
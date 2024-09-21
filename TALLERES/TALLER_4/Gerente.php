<?php
require_once 'Empleado.php';

class Gerente extends Empleado{
  private $departamento;

  public function __construct($nombre, $id_empleado,$salario_base, $departamento) {
    parent::__construct($nombre, $id_empleado, $salario_base);
    $this->departamento = $departamento;
  }

  public function asignarBono($bono) {
    return true;
  }
}
  

?>
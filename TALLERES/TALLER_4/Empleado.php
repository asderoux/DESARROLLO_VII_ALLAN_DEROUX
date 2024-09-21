<?php
require_once 'Evaluable.php';
class Empleado implements Evaluable {
  private $nombre;
  private $id_empleado;

  private $salario_base;

  public function __construct($nombre, $id_empleado, $salario_base) {
    $this->setnombre($nombre);
    $this->setIdEmpleado($id_empleado);
    $this->setSalarioBase($salario_base);

  }
public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getIdEmpleado() {
    return $this->id_empleado;
  }

  public function setIdEmpleado($id_empleado) {
    $this->id_empleado = $id_empleado;
  }

  public function setSalarioBase($salario_base) {
    $this->salario_base = $salario_base;
  }
  public function getSalarioBase(){
    return $this->salario_base;
  } 
  
  public function evaluarDesempeño(){
    return true;  
  }

}

?>
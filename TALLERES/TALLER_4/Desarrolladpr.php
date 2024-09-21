<?php 

  require_once 'Empleado.php';
  class Desarrollador extends Empleado {
    private $lenguajeProgramacion;
    private $NivelExperiencia;

    public function __construct($nombre,$id_empleado,$salario_base,$lenguajeProgramacion,$NivelExperiencia ){
      parent::__construct($nombre,$id_empleado,$salario_base);
    }

  }
?>
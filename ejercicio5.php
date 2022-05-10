<?php

class Person{
    //PROPIEDADES - ATRIBUTOS
    public $nombre;
    public $edad;
    //CONSTRUCTOR - Inicializa los atributos
    function __construct($tempNombre = '', $tempEdad = ''){
        $this->nombre = $tempNombre;
        $this->edad = $tempEdad;
    }
    function imprimirDatos(){
        return "Nombre: ".$this->nombre." - Edad:".$this->edad."<br>";
    }
}
//CLASE EMPLEADO HEREDA CLASS PERSON
class Empleado extends Person{
    //ATRIBUTO SUELDO
    public $sueldo;
    //NUEVO CONSTRUCTOR - carga sueldo
    function __construct($tempNombre = '', $tempEdad = '', $tempSueldo = ''){
        $this->nombre = $tempNombre;
        $this->edad = $tempEdad;
        $this->sueldo = $tempSueldo;
    }
    //METODO - Imprimir nombre y sueldo con/sin pago impuestos
    function pagarImpuestos(){
        if($this->sueldo > 3000){
            return "Nombre: ".$this->nombre." debes pagar impuestos<br>";
        }else{
            return "Nombre: ".$this->nombre." no debes pagar impuestos<br>";
        }
    }
}
//DEFINIR OBJETO 
$objetoPersona = new Person("Sandra", 34);
//LLAMAR A SUS METODOS
echo $objetoPersona->imprimirDatos();

$objetoEmpleado = new Empleado("Pepe", 30, 2000);
$objetoEmpleado2 = new Empleado("Juan", 20, 5000);
echo $objetoEmpleado->imprimirDatos();
echo $objetoEmpleado->pagarImpuestos();
echo $objetoEmpleado2->imprimirDatos();
echo $objetoEmpleado2->pagarImpuestos();

?>
<?php

class persona{
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;
    public $rfc;

    function constructorPersona($nombrec, $apellidoc, $edadc, $direccionc, $rfcc){

    }
}
class empleado extends persona{
    private $tiempo_trabajando;
    private $fecha_contratación; 
    private $turno;
    function constructorempleado($tiempo_trabajandoc,$fecha_contrataciónc,$turnoc){

    }


}
class cliente extends persona{

}
class tienda{
    
    private $rfc;
    private $nombre;
    private $turno;
    private $número_empleados;
    private $comisión;
    function constructortienda($rfcc,$nombrec,$turnoc,$número_empleadosc,$comisiónc){

    }
}

class mascota{
    private $especie;
    private $color;
    private $edad;
    private $fecha_llegada;
    private $cantidad;
    private $precio_Compra;
    private $precioVenta;
    function constructormascota($especiec,$colorc,$edadc,$fecha_llegadac,$cantidadc,$precio_Comprac,$precioVentac){

    }
}
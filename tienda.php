<?php

class persona{
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;
    public $rfc;

    function constructorPersona($nombrec, $apellidoc, $edadc, $direccionc, $rfcc){
        $this->nombre=$nombrec;
        $this->apellido=$apellidoc;
        $this->edad=$edadc;
        $this->direccion=$direccionc;
        $this->rfc=$rfcc;

    }
}
class empleado extends persona{
    private $no_Empleado;
    private $tiempo_trabajando;
    private $fecha_contratación; 
    private $turno;
    

    function constructorempleado($no_Empleadoc,$tiempo_trabajandoc,$fecha_contrataciónc,$turnoc){
        $this->no_Empleado=$no_Empleadoc;
        $this->tiempo_trabajando=$tiempo_trabajandoc;
        $this->fecha_contratación=$fecha_contrataciónc;
        $this->turno=$turnoc;

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

        $this->rfc=$rfcc;
        $this->nombre=$nombrec;
        $this->turno=$turnoc;
        $this->número_empleados=$número_empleadosc;
        $this->comisión=$comisiónc;
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
        $this->especie=$especiec;
        $this->color=$colorc;
        $this->edad=$edadc;
        $this->fecha_llegada=$fecha_llegadac;
        $this->cantidad=$cantidadc;
        $this->precio_Compra=$precio_Comprac;
        $this->precioVenta=$precioVentac;

    }
}
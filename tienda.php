<?php

class persona{
    public $Nombre;
    public $Apellido;
    public $Edad;
    public $Direccion;
    public $RFC;
}
class empleado extends persona{
    private $Tiempo_trabajando;
    private $fecha_contratación; 
    private $Turno;
}
class cliente extends persona{

}
class tienda{
    
    private $RFC;
    private $Nombre;
    private $Turno;
    private $Número_empleados;
    private $comisión;
}

class mascota{
    private $Especie;
    private $Color;
    private $edad;
    private $Fecha_llegada;
    private $cantidad;
    private $Precio_Compra;
    private $PrecioVenta;
}
<?php

class Persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $rfc;

    function __construct($nombrec, $apellidoc, $edadc, $direccionc, $rfcc){
        $this->nombre=$nombrec;
        $this->apellido=$apellidoc;
        $this->edad=$edadc;
        $this->direccion=$direccionc;
        $this->rfc=$rfcc;

    }
    function setnombre($nombrec){
        $this->nombre = $nombrec;
    }
    function getnombre(){
        return $this->nombre;
    }
    function setapellido($apellidoc){
        $this->apellido = $apellidoc;
    }
    function getapellido(){
        return $this->apellido;
    }
    function setedad($edadc){
        $this->edad = $edadc;
    }
    function getedad(){
        return $this->edad;
    }
    function setdireccion($direccionc){
        $this->direccion = $direccionc;
    }
    function getdireccion(){
        return $this->direccion;
    }
    function setrfc($rfcc){
        $this->rfc = $rfcc;
    }
    function getrfc(){
        return $this->rfc;
    }
}
class Empleado extends Persona{
    private $no_Empleado;
    private $tiempo_trabajando;
    private $fecha_contratación; 
    private $turno;
    
    function __construct($nombrec, $apellidoc, $edadc, $direccionc, $rfcc,$no_Empleadoc,$tiempo_trabajandoc,$fecha_contrataciónc,$turnoc){
        $this->nombre=$nombrec;
        $this->apellido=$apellidoc;
        $this->edad=$edadc;
        $this->direccion=$direccionc;
        $this->rfc=$rfcc;
        $this->no_Empleado=$no_Empleadoc;
        $this->tiempo_trabajando=$tiempo_trabajandoc;
        $this->fecha_contratación=$fecha_contrataciónc;
        $this->turno=$turnoc;

    }

    function setno_Empleado($no_Empleadoc){
        $this->no_Empleado = $no_Empleadoc;
    }
    function getno_Empleado(){
        return $this->no_Empleado;
    }
    function settiempo_trabajando($tiempo_trabajandoc){
        $this->tiempo_trabajando = $tiempo_trabajandoc;
    }
    function gettiempo_trabajando(){
        return $this->tiempo_trabajando;
    }
    function setfecha_contratación($fecha_contrataciónc){
        $this->fecha_contratación = $fecha_contrataciónc;
    }
    function getfecha_contratación(){
        return $this->fecha_contratación;
    }
    function setturno($turnoc){
        $this->turno = $turnoc;
    }
    function getturno(){
        return $this->turno;
    }





}
class Cliente extends Persona{

    function __construct($nombrec, $apellidoc, $edadc, $direccionc, $rfcc){
        $this->nombre=$nombrec;
        $this->apellido=$apellidoc;
        $this->edad=$edadc;
        $this->direccion=$direccionc;
        $this->rfc=$rfcc;

    }

}
class Tienda{
    
    private $rfc;
    private $nombre;
    private $turno;
    private $número_empleados;
    private $comisión;

    function __construct($rfcc,$nombrec,$turnoc,$número_empleadosc,$comisiónc){

        $this->rfc=$rfcc;
        $this->nombre=$nombrec;
        $this->turno=$turnoc;
        $this->número_empleados=$número_empleadosc;
        $this->comisión=$comisiónc;
    }
    function setrfc($rfcc){
        $this->rfc = $rfcc;
    }
    function getrfc(){
        return $this->rfc;
    }
    function setnombre($nombrec){
        $this->nombre = $nombrec;
    }
    function getnombre(){
        return $this->nombre;
    }
    function setturno($turnoc){
        $this->turno = $turnoc;
    }

    function getturno(){
        return $this->turno;
    }
    function setnúmero_empleados($número_empleadosc){
        $this->número_empleados = $número_empleadosc;
    }

    function getnúmero_empleados(){
        return $this->número_empleados;
    }
    function setcomisión($comisiónc){
        $this->comisión = $comisiónc;
    }

    function getcomisión(){
        return $this->comisión;
    }

}

class Mascota{
    private $especie;
    private $color;
    private $edad;
    private $fecha_llegada;
    private $cantidad;
    private $precio_Compra;
    private $precioVenta;

    function __construct($especiec,$colorc,$edadc,$fecha_llegadac,$cantidadc,$precio_Comprac,$precioVentac){
        $this->especie=$especiec;
        $this->color=$colorc;
        $this->edad=$edadc;
        $this->fecha_llegada=$fecha_llegadac;
        $this->cantidad=$cantidadc;
        $this->precio_Compra=$precio_Comprac;
        $this->precioVenta=$precioVentac;

    }
    function setespecie($especiec){
        $this->especie = $especiec;
    }

    function getespecie(){
        return $this->especie;
    }
    function setcolor($colorc){
        $this->color = $colorc;
    }

    function getcolor(){
        return $this->color;
    }
    function setedad($edadc){
        $this->edad = $edadc;
    }

    function getedad(){
        return $this->edad;
    }
    function setfecha_llegada($fecha_llegadac){
        $this->fecha_llegada = $fecha_llegadac;
    }

    function getfecha_llegada(){
        return $this->fecha_llegada;
    }
    function setcantidad($cantidadc){
        $this->cantidad = $cantidadc;
    }

    function getcantidad(){
        return $this->cantidad;
    }
    function setprecio_Compra($precio_Comprac){
        $this->precio_Compra = $precio_Comprac;
    }

    function getprecio_Compra(){
        return $this->precio_Compra;
    }
    function setprecioVenta($precioVentac){
        $this->precioVenta = $precioVentac;
    }

    function getprecioVenta(){
        return $this->precioVenta;
    }



}
$empleado1 = new Empleado('Pedro','Pascal',18,'colonia samira','RHGSTN1254S',1,'2 años','20/1/24','matutino');
$empleado2 = new Empleado('Pedro','Pascal',18,'colonia samira','RHGSTN1254S',1,'2 años','20/1/24','matutino');
$empleado3 = new Empleado('Pedro','Pascal',18,'colonia samira','RHGSTN1254S',1,'2 años','20/1/24','matutino');
$empleado4 = new Empleado('Pedro','Pascal',18,'colonia samira','RHGSTN1254S',1,'2 años','20/1/24','matutino');
$empleado5 = new Empleado('Pedro','Pascal',18,'colonia samira','RHGSTN1254S',1,'2 años','20/1/24','matutino');
$empleado6 = new Empleado('Pedro','Pascal',18,'colonia samira','RHGSTN1254S',1,'2 años','20/1/24','matutino');
// $empleado->SetNombre("Omar")."<br>";
// $empleado->SetTiempo("2 años")."<br>";
// $empleado->SetFEcha("2020/11/11")."<br>";
// $empleado->SetTurno("Matutino")."<br>";
// echo "el empleado: ".$empleado->GetNombre()." lleva trabajando ".$empleado->GetTiempo()." desde ".$empleado->GetFecha()." en el turno ".$empleado->GetTurno();

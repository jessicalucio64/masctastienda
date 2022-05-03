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

    public function DatosEmpleado(){
        echo "mi nombre es ".$this->nombre;
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


    public function DatosMascota(){
        echo "El ".$this->especie." de color ".$this->color." y de edad ".$this->edad." aun precio de: ".$this->precioVenta;
    }
}


$empleado1 = new Empleado('Pedro','Pascal',18,'colonia samira','PHGSTN1254S',1,'2 años','2020/1/24','matutino');
$empleado2 = new Empleado('Jorge','Rodriguez',21,'colonia del valle','JHGSTN1254S',2,'1 años','2021/1/24','matutino');
$empleado3 = new Empleado('Ramiro','Luvia',34,'colonia del norte','RHGSTN1254S',3,'3 años','2020/1/24','matutino');
$empleado4 = new Empleado('Maria','Sanchez',24,'colonia del sur','MHGSTN1254S',4,'2 meses','2020/1/24','vespertino');
$empleado5 = new Empleado('Rosa','Morales',27,'colonia del este','AHGSTN1254S',5,'8 meses','2020/1/24','vespertino');
$empleado6 = new Empleado('Julia','Torres',19,'colonia del oeste','JHGSTN1254S',6,'1 año','2020/1/24','vespertino');


$macota1 = new Mascota('perro','negro','1 año','2020/1/11',3,2500,5000);
$macota2 = new Mascota('gato','pardo','1 mes','2020/1/11',1,100,500);
$macota3 = new Mascota('tortuga','moteada','11 dias','2020/1/11',5,2500,5000);
$macota4 = new Mascota('hamster','blanco','1 mes','2020/1/11',1,500,800);
$macota5 = new Mascota('hamster','negro','1 mes','2020/1/11',1,500,800);
$macota6 = new Mascota('perro','blanco','2 mes','2020/1/11',1,900,8000);
$macota1->DatosMascota();

$cliente1=new cliente ("Guillermo", "Davila", "23", "perla 200", "A12SF345");
$cliente2=new cliente ("Daniela", "Torres", "26", "Altamirano 110", "D45besg");
$cliente3=new cliente ("Carlos", "Medina", "30", "coral 100", "JY533535g");
$cliente4=new cliente ("Isabel", "Flores", "24", "aguamarina #500", "T76H454");
$cliente5=new cliente ("Sandra", "Lopez", "23", "Amatista #300", "GR4564Dg");
$cliente6=new cliente ("Josue", "Herandez", "23", "azabache #600", "GTR645643F");


$empleado1->DatosEmpleado();


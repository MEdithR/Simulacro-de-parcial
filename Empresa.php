<?php
class Empresa{
    private $denominación;
    private $dirección;
    private $colClientes;
    private $colMotos;
    private $colVentasRe;

    public function __construct ($den,$direc,$clientes,$motos,$ventas){
        $this->denominacion = $den;
        $this->direccion = $direc;
        $this->colClientes = $clientes;
        $this->colMotos = $motos;
        $this->colVentas = $ventas;
    }

    public function getDenominacion (){
        return $this->denominacion;
    }
    
    public function getDireccion (){
        return $this->direccion;
    }

    
    public function getColClientes (){
        return $this->colClientes;
    }

    
    public function getColMotos (){
        return $this->colMotos;
    }

    public function getColVentas (){
        return $this->colVentas;
    }

    public function setDenominacion ($den){
        $this->denominacion = $den;
    }
    
    public function setDireccion ($direc){
        $this->direccion = $dierc;
    }

    
    public function setColClientes ($clientes){
        $this->ColClientes = $clientes;
    }

    
    public function setColMotos ($motos){
        $this->setColMotoss = $motos;
    }

    
    public function setcolVentas ($ventas){
       $this->colVentas = $ventas;
    
    }

    public function __toString(){
        $cadena="Denominacion: ". $this->getDenominacion."\n";
        $cadena .="Direccion: ".$this->getDireccion."\n";
        $cadena .="Coleccion de clientes: ----".$this->getColClientes."----\n";
        $cadena .="Coleccion de motos: ---- \n".$this->getColMotos."---- "."\n";
        $cadena .="Coleccion de ventas: ----".$this->getPrecioFinal."----\n";
        return $cadena;
    }

    public function retornatMoto($codigoMoto){
         
    }


}
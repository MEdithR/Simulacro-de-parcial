<?php
class Venta{
    private $nummero;
    private $fecha;
    private $refCliente;
    private $coleccionDMotos;
    private $precioFinal;
    
    public function __construc($num,$fecha,$refCli,$colDMoto,$pFinal){

    $this->numero=$num;
    $this->fecha=$fecha;
    $this->refCliente=$refCli;
    $this->coleccionDMotos=$colDMoto;
    $this->precioFinal=$pFinal;
     
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getRefCliente(){
        return $this->refCliente;
    }

    public function getColeccionDMotos(){
        return $this->coleccionDMotos;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setNumero($num){
        $this->numero=$num;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function setRefCliente($refCli){
        $this->refCliente=$refCli;
    }

    public function setColeccionDMotos($colDMoto){
        $this->coleccionDMotos=$colDMoto;
    }

    public function setPrecioFinal($pFinal){
        $this->precioFinal=$pFinal;
    }

    public function __toString(){
        $cadena="Numero: ". $this->getNumero."\n";
        $cadena=$cadena."Fecha: ".$this->getFecha."\n";
        $cadena=$cadena."Refercencia al cliente: ".$this->getRefCliente."\n";
        $cadena=$cadena."Coleccion de motos: ".$this->getColeccionDMotos."\n";
        $cadena=$cadena."Precio final".$this->getPrecioFinal."\n";
       }


}
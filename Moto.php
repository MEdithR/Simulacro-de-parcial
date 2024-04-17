<?php
class Moto{
    private $codigo;
    private $costo;
    private $anioFab;
    private $descripcion;
    private $porctIA;
    private $activa;

    public function __construct($codigo,$costo,$anioFab,$descripcion,$porctIA,$activa){
        $this->codigo=$cod;
        $this->costo=$cost;
        $this->anioFab=$anioF;
        $this->descripcion=$descri;
        $this->porctIA=$xIA;
        $this->activa=$acti;
    }

    
    public function getCodigo(){
        return $this->codigo;
    }

    
    public function getCosto(){
        return $this->costo;
    }

    public function getAnioFab(){
        return $this->aniofab;
    }

    public function getDescripcion(){
        return $this->getDescripcion;
    }

    public function getPorctIA(){
        return $this->porctIa;
    }

    public function getActiva(){
        return $this->activa;
    }

    public function setCodigo($cod){
        $this->codigo=$cod;
    }

    public function setCosto($cost){
        $this->costo=$cost;
    }

    public function setAnioFab($anioF){
        $this->aniofab=$anioF;
    }

    public function setDescripcion($descri){
        $this->descripcion=$descri;
    }

    public function setPorctIA($xIA){
        $this->porctIA=$xIA;
    }

    public function setActiva($acti){
        $this->activa=$acti;
    }

    
 /*Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
 Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
 la venta, el método realiza el siguiente cálculo:
 $_venta = $_compra + $_compra * (anio * por_inc_anual)
 donde $_compra: es el costo de la moto.
 anio: cantidad de años transcurridos desde que se fabricó la moto.
 por_inc_anual: porcentaje de incremento anual de la moto*/

    public function darPrecioVernta(){
        $_venta=-1;

        if($this->getActiva()=="false"){
            $_venta=-1;
        }else{
  
            $anioActual = intval(date("Y"));
            $_anio=$anioActual-$this->getAnioFab();
            $_venta = $this->getCosto()+$this->getCosto()*($_anio*$this->getPorctIA());

        }
        return $_venta;
    } 
    public function __toString(){
        return $this->getCodigo." ".$this->getCosto." ".$this->getAnioFab." ".$this->getDescripcion." ".$this->getPorctIA." ".$this->getActiva."\n";
    }
}
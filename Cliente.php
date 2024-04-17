<?php
class Cliente{
    private $nombre;
    private $apellido;
    private $baja;
    private $tipoDdoc;
    private $numDdoc;

    public function __construct($nom,$ape,$bja,$tDoc,$numD){
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->baja=$bja;
        $this->tipoDdoc=$tDoc;
        $this->numDdoc=$numD;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getBaja(){
        return $this->baja;
    }

    public function getTipoDdoc(){
        return $this->tipoDdoc;
    }

    public function getNumDoc(){
        return $this->numdoc;
    }

    public function setNombre($nom){
        $this->nombre=$nom;
    }

    public function setApellido($ape){
        $this->apellido=$ape;
    }

    public function setBaja($bja){
        $this->baja=$bja;
    }

    public function setTipoDdoc($tDoc){
        $this->getTipoDdoc=$tDoc;
    }

    public function setNumDdoc($numD){
        $this->numDdoc=$numD;
    }

    public function __toStriong(){
        return $this->getNombre()." ".$this->getApellido()." ".$this->getBaja()." ".$this->getTipoDdoc()." ".$this->getNumDoc(). "\n";
    }


}
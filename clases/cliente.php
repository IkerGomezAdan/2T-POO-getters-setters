<?php
class cliente{
    public string $nombre;
    public int $pedidos;
    public bool $activo;

    //Constructor
    public function __construct(string $dato, int $compras, bool $activo){
        $this->nombre=$dato;
        $this->pedidos=$compras;
        $this->activo=$activo;
    }
    
    //setters

    public function setNombre(string $nombre):void{
        $this->nombre=$nombre;
    }

    public function setPedidos(int $pedidos):void{
        $this->pedidos=$pedidos;
    }

    public function setActivo(bool $activo):void{
        $this->activo=$activo;
    }

    //getters

    public function getNombre():string{
        return $this->nombre;
    }

    public function getPedidos():int{
       return  $this->pedidos;
    }

    public function getActivo():bool{
        return $this->activo;
    }

}
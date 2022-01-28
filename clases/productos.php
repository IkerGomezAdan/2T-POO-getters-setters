<?php
class productos{
    public int $id;
    public string $nombre;
    public int $unidades;
    public int $precio;
    public $iva=0.21;


//constructor
    public function __construct(int $unidades, string $nombre, int $precio, int $id){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->unidades=$unidades;
    }

//setters

public function setId(int $id):void{
    $this->id=$id;
}

public function setNombre(string $nombre):void{
    $this->nombre=$nombre;
}

public function setUnidades(int $unidades):void{
    $this->unidades=$unidades;
}

public function setPrecio(int $precio):void{
    $this->precio=$precio;
}

//getters

public function getId():int{
   return  $this->id;
}

public function getNombre():string{
    return $this->nombre;
}

public function getUnidades():int{
    return  $this->unidades;

 }public function getPrecio():int{
    return  $this->precio;
 }
}
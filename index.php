<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POO PHP</h2>
    <?php

        echo "<h3>CLSAES Y OBJETOS</h3>";
        echo "<hr>";
        require("clases/clase1.php");
        require("clases/cliente.php");
        require("clases/productos.php");
        $objeto=new ClasePropiedades();
        echo $objeto ->ciudad;

        echo "<hr>";

        $cliente1= new Cliente("carmelo",5,true);
        echo $cliente1->nombre;
        echo "<hr>";
        //modifica nombre cliente
        $cliente1->setNombre("Carlos");
        //consulta nombre de nuevo
        echo $cliente1->nombre;
        echo "<hr>";

        $productos= new Productos(100, "Camisa", 5, 7.99);
    
        $productos->setPrecio(7.95);

        echo $productos->id, " ";
        echo $productos->nombre, " ";
        echo $productos->unidades, " ";
        echo $productos->precio, " ";
    ?>
</body>
</html>
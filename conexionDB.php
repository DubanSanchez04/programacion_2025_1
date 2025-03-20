<?php
$host="localhost";
$userDB="root";
$pwdDB="";
$nameDB="programacion_avanzada_db1";
//$portDB0="3306";
$conexDB=new mysqli($host,$userDB,$pwdDB,$nameDB);
if($conexDB->connect_error){
    echo $conexDB->connect_error;
    die();
}
echo "conexion exitosa";

$sql ="select * from estudiantes";
$resultadosSQL= $conexDB->query($sql);
if($resultadosSQL->num_rows>0){
    while($row=$resultadosSQL->fetch_assoc()){
        $id=$row['id'];
        $nombre=$row['nombre'];
        $cod=$row['codigo'];
        $email=$row['email'];
        echo "$id $cod $nombre $email <br>";
    }
}else{
    echo "<br>No hay registros<br>";
}

$sql ="insert into estudiantes (codigo,nombre,email) values ";
$sql.= "(23555,'Maria','maria@test.com')";
$resultadosSQL=$conexDB->query($sql);
if($resultadosSQL){
    echo "<br>Datos guardados<br>";
}else{
    echo"<br>no fue posible guardar la informacion<br>";
}

$conexDB->close();
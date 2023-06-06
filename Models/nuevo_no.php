<?php 
require_once 'Conection.php';


function traedependencias($con){
    $stm = $con->query("SELECT * FROM dependencias ORDER BY nombre_dependencia ASC");
    $dependencias = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $dependencias;
}


if(isset($_POST['nuevo'])){
    print '<pre>';
    var_dump($_POST);
    
}



?>
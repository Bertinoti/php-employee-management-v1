<?php

require_once "./employeeManager.php";

if (isset($_GET["modifyEmployee"])) {
    echo "entra?";
    updateEmployee($_POST, "../../resources/employees.json");
}

if (isset($_GET['addEmployee'])) {
    echo "estamos aqui ";
    //print_r($_POST['name']);
    // $checkDash= recorrer("../../resources/employees.json",$_POST["email"]);
    
    addEmployee("../../resources/employees.json");

    updateEmployee($_POST, "../../resources/employees.json");
}

if (isset($_GET['addEmployee'])) {
    addEmployee("../../resources/employees.json");
}


if(isset($_GET['delEmployee'])){
    $idEmployee =  $_POST['id'];
    deleteEmployee($idEmployee);
}
?>
<!-- <form action="./." method="post"></form> -->

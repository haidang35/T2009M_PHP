<?php

    $name = $_POST["name"];
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "t2009m_php";
    $conn = new mysqli($severname, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Connect err ...");
    }
    $txt_sql = "insert into listcategory(name) values('$name')";
    $rs = $conn->query($txt_sql);
    if( $rs === true ) {
        header("Location: ListCategory.php");
    } else {
        echo "Add new product failed";
    }
?>
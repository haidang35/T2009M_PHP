<?php
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $categoryId = $_POST["categoryid"];
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "t2009m_php";
    $conn = new mysqli($severname, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Connect err ...");
    }
    $txt_sql = "insert into listproduct(name, quantity, price, categoryid) values('$name',$quantity,$price, $categoryId)";
    $rs = $conn->query($txt_sql);
    if( $rs === true ) {
        header("Location: ListProduct.php?id=$categoryId");
    } else {
        echo "Add new product failed";
    }
?>
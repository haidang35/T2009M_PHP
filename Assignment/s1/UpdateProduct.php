<?php
    include_once "Database.php";
    $id = $_POST["id"];
    $categoryId = $_POST["categoryId"];
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $conn = connectDB();
    $txt_sql = "update listproduct set name='$name', quantity=$quantity, price=$price where id = $id ";
    if(updateDB($txt_sql)) {
        header("Location: ListProduct.php?id=$categoryId");
    } else {
        echo "Update product failed";
    }
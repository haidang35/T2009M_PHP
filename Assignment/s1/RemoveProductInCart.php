<?php
    session_start();
    $id = $_GET["id"];
    $listProduct = [];
    if($_SESSION["cart"]) {
        $listProduct = $_SESSION["cart"];
        foreach($listProduct as $key => $value) {
            if($id === $value["id"]) {
                unset($listProduct[$key]);
            }
        }
    }
    $_SESSION["cart"] = $listProduct;
    header("Location: Cart.php");


<?php
    session_start();
    include_once "Database.php";
    $id = $_POST["id"];
    $name = $_POST["name"];
    $quantity = (int)$_POST["quantity"];
    $price = (float)$_POST["price"];
    $categortId = $_POST["categoryId"];

    $product = [
        "id" => $id,
        "name" => $name,
        "quantity" => $quantity,
        "price" => $price,
        "categoryId" => $categortId
    ];
    $listProductInCart = [];
    if($_SESSION["cart"]) {
        $listProductInCart = $_SESSION["cart"];
    }
    if(count($listProductInCart) === 0) {
        $listProductInCart[] = $product;
    } else if(count($listProductInCart) > 0) {
        $checkUniqueProduct = false;
        foreach ($listProductInCart as $key => $item) {
            if($item["id"] === $product["id"]) {
                $item["quantity"] += $product["quantity"];
                $listProductInCart[$key] = $item;
                $checkUniqueProduct = true;
            }
        }
        if($checkUniqueProduct === false) {
            $listProductInCart[] = $product;
        }
    }
    $_SESSION["cart"] = $listProductInCart;
    $productsCurrent = [];
    $txt_sql = "select * from listproduct where id = $id";
    $productsCurrent = queryDB($txt_sql);
    $productCurrent = $productsCurrent[0];
    $productCurrent["quantity"] -= $product["quantity"];
    $quantityProductCurrent = $productCurrent["quantity"];
    $txt_sql2 = "update listproduct set quantity = $quantityProductCurrent where id = $id";
    if(updateDB($txt_sql2)) {
        header("Location: Cart.php");
    } else {
        echo "Add product to cart failed";
    }






<?php
    session_start();
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $listPlaceHolder = [];
    $placeHolder = [];
    $placeHolder[] = $name;
    $placeHolder[] = $phone;
    $placeHolder[] = $email;
    $placeHolder[] = $address;
    $placeHolder[] = $_SESSION["cart"];
    $listPlaceHolder[] = $placeHolder;
    $_SESSION["placeholder"] = $listPlaceHolder;
    $emty = [];
    $_SESSION["cart"] = $emty;
    header("Location: NotiOrder.php");




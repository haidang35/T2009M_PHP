<?php
    include_once "Database.php";
    $id = $_POST["id"];
    $name = $_POST["name"];
    $txt_sql = "update listcategory set name = '$name' where id = $id";
    if(updateDB($txt_sql)) {
        header("Location: ListCategory.php");
    } else {
        echo "Update category failed";
    }

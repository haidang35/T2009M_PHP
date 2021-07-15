<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/Checkout.css">
</head>
<body>
<?php
    session_start();
    $listProduct = [];
    if($_SESSION["cart"]) {
        $listProduct = $_SESSION["cart"];
    }

    ?>
<div class="checkout-page">
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-md-12">
                <form class="form" action="Placeholder.php" method="post" id="form-checkout">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="label-input">Họ và tên</label>
                            <input type="text" name="name" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label-input">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label-input">Email</label>
                            <input type="email" name="email" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label-input">Địa chỉ nhận hàng</label>
                            <input type="text" name="address" class="form-control" required/>
                        </div>
                    </div>
                </form>
                <label class="label-input">My cart: </label>
                <table class="table table-striped table-bordered">
                    <thead>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Into Money</th>
                    </thead>
                    <tbody>
                    <?php foreach ($listProduct as $key => $item) {?>
                        <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $item["name"] ?></td>
                            <td><?php echo $item["quantity"] ?></td>
                            <td><?php echo $item["price"] ?></td>
                            <td><?php echo $item["price"]*$item["quantity"] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="total-money-box">
                    <span class="total-money">Tổng tiền: </span>
                    <span class="number-money">
                    <?php
                    $totalMoney = 0;
                    foreach ( $listProduct as $item) {
                        $totalMoney += $item["quantity"]*$item["price"];
                    }
                    echo $totalMoney;
                    ?>
                </span>
                </div>
                <div class="btn-group-control">
                    <button form="form-checkout" type="submit" class="btn btn-success btn-lg" >Đặt hàng ngay</button>
                </div>
            </div>
        </div>

    </div>


</div>


</body>
</html>
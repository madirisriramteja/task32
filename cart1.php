<?php
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            // echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
            // header ("location:index.php");
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        $_SESSION['cart'][0] = $item_array;
        echo ($_SESSION['cart']);
    }
}

?>
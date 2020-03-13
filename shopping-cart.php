<?php
session_start();
require_once("db-connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>

        // Check if cart is empty
        function checkEmpty(cartEmpty){
            if(cartEmpty == 1){
                alert('Your cart is empty!');
                return(false);
            } else {
                return(true);
            } 
        }
     
    </script>
</head>
<body>
   
    <?php 

        $id = $_POST['pidAdded'];
        $totalCost = array();

        $query = "SELECT * FROM products where product_id=".$id;

        $result = mysql_query($query);
        
            if (mysql_num_rows($result) > 0) {
                
                while($row = mysql_fetch_assoc($result)) {

                    if(empty($_SESSION['shoppingcart'][$id])){
                        if(0 < $_POST['orderAmt'] && $_POST['orderAmt'] < 20){
                            $_SESSION['shoppingcart'][$id] = array(
                                'product_id' => $row['product_id'],
                                'product_name' => $row['product_name'],
                                'quantity' => $_POST['orderAmt'],
                                'unit_quantity' => $row['unit_quantity'],
                                'unit_price' => $row['unit_price'],
                            );
                        }
                    } else {
                        if($_POST['orderAmt'] > 0 && $_POST['orderAmt'] <= 20){
                            $_SESSION['shoppingcart'][$id]['quantity'] += $_POST['orderAmt'];
                        }
                    }
			
                    echo '<table class="cart" style="width:100%"><tr>';
                    
                    echo '<th>Product</th><th>Quantity</th><th>Cost</th></tr>';

                    foreach ($_SESSION["shoppingcart"] as $item) {

                        $price = $item['unit_price'] * $item['quantity'];

                        array_push($totalCost, $price);                      
                        
                        echo '<tr>';
                        echo '<td> '. $item['product_name']. ' (' . $item['unit_quantity'] .') </td>';
                        echo '<td> '. $item['quantity'] . ' </td>'; 
                        echo '<td> $'. number_format($price,2) .' </td>';
                        echo '</tr>';
                    }

                    echo '<tr><td style="font-weight: bold" >Total:</td><td></td><td> $'.number_format(array_sum($totalCost),2).'</td></tr>';

                    echo "</table>";
                   
                }

            } else {
                if(empty($_SESSION['shoppingcart'])){
                    echo "<p>Your shopping cart is empty.</p>";
                } else {
                    echo '<table class="cart" style="width:100%"><tr>';
                    
                    echo '<th>Product</th><th>Quantity</th><th>Cost</th></tr>';

                    foreach ($_SESSION["shoppingcart"] as $item) {

                        $price = $item['unit_price'] * $item['quantity'];

                        array_push($totalCost, $price);                      

                        echo '<tr>';
                        echo '<td> '. $item['product_name']. ' (' . $item['unit_quantity'] .') </td>';
                        echo '<td> '. $item['quantity'] . ' </td>'; 
                        echo '<td> $'. number_format($price,2) .' </td>';
                        echo '</tr>';
                    }

                    echo '<tr><td style="font-weight: bold" >Total:</td><td></td><td> $'.number_format(array_sum($totalCost),2).'</td></tr>';

                    echo "</table>";
                }
                
            }

        mysql_close($link);


        if(empty($_SESSION['shoppingcart'])){
            $cartEmpty = 1;
        } else {
            $cartEmpty = 0;
        }

    ?>

    <form action="checkout-form.php" target="product" method="POST" onsubmit="checkEmpty(<?php echo $cartEmpty ?>)">
        <input id="btnCheckout" type="submit" value="Checkout" name="checkout"  />
        <input id="btnClear" type="button" value="Clear Cart" name="clearCart" onclick="location.href = 'clear-session.php';" />
    </form>

</body>

</html>

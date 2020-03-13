<?php
require_once("db-connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>

        // Toggle hide shopping navigation
        $(document).ready(function(){
            $(window.parent.document).find("#hide").hide();
            $(window.parent.document).find("#heading").show();
        });

        // Validate item quantity before adding to cart
        function required(){
            var amount= document.forms["item-select"]["orderAmt"].value;
            if (amount > 0 && amount <= 20)  {
                return (true);
            } else {
                alert("Please enter a value between 1 and 20");
                return (false);
            }
        }

    </script>
</head>
<body>
<?php 

        $pid = $_GET['id'];

        $query = "SELECT * FROM products where product_id=".$pid;
         
        $result = mysql_query($query);
        
            if (mysql_num_rows($result) > 0) {

                while($row = mysql_fetch_assoc($result)) {
                    echo '<form id="item-select" action="shopping-cart.php?add='. $pid .'" method="POST" target="cart" onsubmit="required()">';
                    echo '<table style="width:100%"><tr>';
                    echo  $row["product_name"]. " (" . $row["unit_quantity"]. ")<br> Price: $" . $row["unit_price"]. "<br>";
                    echo "Amount Available: " .$row["in_stock"] . "<br>";
                    echo '<input type="hidden" name="pidAdded" value="'. $pid .'" />';
                    echo '<img src=img/' . $pid . ' width="50%" >';
                    echo '<input type="number" id="orderAmt" name="orderAmt" min="1" max="20" value="1">';
                    echo '<input id="addBtn" type="submit" value="Add to Cart" /></tr></table></form>';
                }
                
            } else {
                echo "Select an item from the left";
            }
            
        mysql_close($link);
        
    ?>
</body>
</html>   
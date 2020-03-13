<?php
session_start();
require_once("db-connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout Form</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>

        //Toggle hide shopping navigation
        $(document).ready(function(){
            $(window.parent.document).find("#hide").show();
            $(window.parent.document).find("#heading").hide();
        });
        
    </script>
</head>
<body>

    <?php 
    $session = $_SESSION['shoppingcart'];

    // Check if cart is empty
    if(isset($_POST['checkout'])){
        if($session == null){
            header('Location: product-data.php');
        }
    }

    //Purchase Summary
    echo "<span style='font-weight: bold'>Purchase Summary:</span>";
    echo '<table class="cart" style="width:100%"><tr><th>Product</th><th>Quantity</th><th>Cost</th></tr>';
    $totalCost = array();
    foreach ($session as $item) {

        $price = $item['unit_price'] * $item['quantity'];
        array_push($totalCost, $price);

        echo '<tr><td> '. $item['product_name']. ' (' . $item['unit_quantity'] .') </td>';
        echo '<td> '. $item['quantity'] . ' </td>'; 
        echo '<td> $'. number_format($price,2) .' </td></tr>';

    }
    echo '<tr><td style="font-weight: bold" >Total:</td><td></td><td>$'.number_format(array_sum($totalCost),2).'</td></tr></table>';

    //Send email upon purchase 
    if(isset($_POST['purchase'])){
        $address = $_POST['email']; 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = "Grocery Purchase";
        $from = "12568857@student.uts.edu.au";

        $message = "Thank you ". $first_name ." for your purchase from POTI Grocery! Your items totalled to: $" .number_format(array_sum($totalCost),2);

        $headers = "From:" . $from;
        $success = mail($address,$subject,$message,$headers);
        if (!$success) {
            echo "Something went wrong. Please try again...";
        } else {
            echo "<br>";
            echo "Mail Sent. Thank you for your purchase," . $first_name . ". We will contact you shortly. <br>";
            echo "<br>";
        }
        
    }

    ?>

    <p>Please fill in your details. <strong>*</strong> indicates a required field.</p>
    <form action="checkout-form.php" method="POST">
        <table style="width:100%">
                <tr>
                    <td>First Name<strong>*</strong>:</td>
                    <td><input type="text" name="first_name" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Last Name<strong>*</strong>:</td>
                    <td><input type="text" name="last_name" required></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Email Address<strong>*</strong>:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Address<strong>*</strong>:</td>
                    <td><input type="text" name="address1" required></td>
                </tr>
                <tr>
                    <td>Suburb<strong>*</strong>:</td>
                    <td><input type="text" name="suburb" required></td>
                </tr>
                <tr>
                    <td>State<strong>*</strong>:</td> 
                    <td><input type="text" name="state" required></td>
                </tr>
                <tr>
                    <td>Country<strong>*</strong>:</td>
                    <td>
                    <select name="state" required>
                                <option value="AU">Australia</option>
                                <option value="NZ">New Zealand</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td>Payment Type<strong>*</strong>:</td>
                    <td>
                    <select name="paymentType" required>
                                <option value="Visa">VISA</option>
                                <option value="MasterCard">Master Card</option>
                                <option value="PayPal">PayPal</option>
                            </select>
                    </td>
                </tr>
            </table>

    <input id="btnPurchase" type="submit" name="purchase" value="Purchase" />
    <input id="btnCancel" type="button" name="cancel" value="Cancel" onclick="location.href = 'product-data.php';"/>
    </form>
    <p>To continue shopping, click <span style="font-weight: bold">Cancel</span></p>

</body>
</html>

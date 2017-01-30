<?php
/**
 *HW 02 Grocery Shopping Tracker
 *800768070_HW02
 *Jennifer Tillman
 */

#Declare variables taken from HTML
$userBudget = filter_input(INPUT_POST,'userBudget');
$apple_Quan = filter_input(INPUT_POST, 'apple_Quan');
$banana_Quan = filter_input(INPUT_POST, 'banana_Quan');
$milk_Quan = filter_input(INPUT_POST, 'milk_Quan');
$cake_Quan = filter_input(INPUT_POST, 'cake_Quan');
$toast_Quan = filter_input(INPUT_POST, 'toast_Quan');
$cheese_Quan = filter_input(INPUT_POST, 'cheese_Quan');
$cookie_Quan = filter_input(INPUT_POST, 'cookie_Quan');
$water_Quan = filter_input(INPUT_POST, 'water_Quan');

#Declare Variables to Calculate Price and Budget

$apple_Price = $apple_Quan * 1.00;
$banana_Price = $banana_Quan * 0.50;
$milk_Price = $milk_Quan * 2.80;
$cake_Price = $cake_Quan * 10.00;
$toast_Price = $toast_Quan * 1.60;
$cheese_Price = $cheese_Quan * 4.50;
$cookie_Price = $cookie_Quan * 5.00;
$water_Price = $water_Quan * 1.00;
$total_Price = $apple_Price + $banana_Price + $milk_Price + $cake_Price + $toast_Price + $cheese_Price + $cookie_Price
    + $water_Price;


# Some more necessary Variable Declaration


#Tax Calculation
if ($total_Price > 10.00) {

    $tax = .015;

} else {

    $tax = .02;

}

#Total Amount Calculation

$total_Amount = ($total_Price * 1.0) + $tax;

#total_Amount = ($total_Price * $tax) + $total_Price;

#Did it exceed Budget Test

if ($total_Amount > $userBudget) {

    $message = "You have exceeded your budget $$userBudget, review your order!";
    echo "
    <style>
        .font_color {
            color: red;
            }
    </style>
            ";


} else {

    $message = "Thank you for shopping at our store!";

    echo "
    <style>
        .font_color {
            color: green;
            }
    </style>
            ";
}


?>

<style>

    .phpTable {

        border: double;

    }

    td, th {

        border-style: double;
        font-weight: bold;

    }

    th {

        font-weight: bold;

    }

    .water_img {

        height: 128px;
        width: 128px;

    }

    .font_bold {

        font-weight: bold;
    }

    .font_color {

        font-weight: bold;
    }

</style>

<table class="phpTable">

    <tr>

        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>

    </tr>

    <tr>

        <td><img src="img/apple.png"></td>
        <td><?= $apple_Quan; ?></td>
        <td><?= "$" . $apple_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/banana.png"></td>
        <td><?= $banana_Quan; ?></td>
        <td><?= "$" . $banana_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/milk.png"></td>
        <td><?= $milk_Quan; ?></td>
        <td><?= "$" . $milk_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/cake.png"></td>
        <td><?= $cake_Quan; ?></td>
        <td><?= "$" . $cake_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/toast.png"></td>
        <td><?= $toast_Quan; ?></td>
        <td><?= "$" . $toast_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/cheese.png"></td>
        <td><?= $cheese_Quan; ?></td>
        <td><?= "$" . $cheese_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/cookie.png"></td>
        <td><?= $cookie_Quan; ?></td>
        <td><?= "$" . $cookie_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/water.jpg" class="water_img"></td>
        <td><?= $water_Quan; ?></td>
        <td><?= "$" . $water_Price; ?></td>
    </tr>


    <tr>

        <td class="text_style">Total</td>
        <td colspan="2"><?= "$" . $total_Price; ?></td>

    </tr>


</table>

<p>

    <!-- Budget testing output goes here -->
    <span class="font_bold">Tax = <?= $tax; ?></span> <br> <br>
    <span class="font_bold">Total Amount = <?= $total_Amount ?></span> <br> <br>
    <span class="font_color"> <?= $message; ?></span>

</p>



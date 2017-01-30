<?php
/**
 *HW 02 Grocery Shopping Tracker
 *800768070_HW02
 *Jennifer Tillman
 */

#Declare variables taken from HTML
$userBudget = $_POST['userBudget'];
$apple_Quan = $_POST['apple_Quan'];
$banana_Quan = $_POST['banana_Quan'];
$milk_Quan = $_POST['milk_Quan'];
$cake_Quan = $_POST['cake_Quan'];
$toast_Quan = $_POST['toast_Quan'];
$cheese_Quan = $_POST['cheese_Quan'];
$cookie_Quan = $_POST['cookie_Quan'];
$water_Quan = $_POST['water_Quan'];

#Declare Variables to Calculate Price and Budget

$apple_Price = " ";
$banana_Price = " ";
$milk_Price = " ";
$cake_Price = " ";
$toast_Price = " ";
$cheese_Price = " ";
$cookie_Price = " ";
$water_Price = " ";
$total_Price = " ";

# Some more necessary Variable Declaration

$tax = " ";
$total_Amount = " ";
$exceeded_Budget_Message = "You have exceeded your budget $userBudget";
$budget_Success_message = "Thank you for shopping at our store!";




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

    .water_img{

        height: 128px;
        width: 128px;

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
        <td><?= $apple_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/banana.png"></td>
        <td><?= $banana_Quan; ?></td>
        <td><?= $banana_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/milk.png"></td>
        <td><?= $milk_Quan; ?></td>
        <td><?= $milk_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/cake.png"></td>
        <td><?= $cake_Quan; ?></td>
        <td><?= $cake_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/toast.png"></td>
        <td><?= $toast_Quan; ?></td>
        <td><?= $toast_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/cheese.png"></td>
        <td><?= $cheese_Quan; ?></td>
        <td><?= $cheese_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/cookie.png"></td>
        <td><?= $cookie_Quan; ?></td>
        <td><?= $cookie_Price; ?></td>
    </tr>

    <tr>

        <td><img src="img/water.jpg" class="water_img"></td>
        <td><?= $water_Quan; ?></td>
        <td><?= $water_Price; ?></td>
    </tr>


    <tr>

        <td class="text_style">Total</td>
        <td colspan="2"><?= $total_Price; ?></td>

    </tr>


</table>

<p>

    <!-- Budget testing output goes here -->

</p>



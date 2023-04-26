<html>

<head>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sriracha&display=swap" rel="stylesheet">
    <title>In-N-Out Order Ahead</title>
</head>

<body>
    <header>
        <img src="https://www.in-n-out.com/ResourcePackages/INNOUT/content/images/logo.svg?package=INNOUT" alt="In-N-Out Logo">
    </header>

    <main>
        <h1>In-N-Out Burger Online Ordering</h1>
        <?php
        // Output the form values for testing - comment out when done 
        /*echo '<pre>For testing purposes: ';
        print_r($_REQUEST);
        echo '</pre>';*/

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        
          
        /* Since we have programmed our form to only accept numeric inputs and included a default value of 0, you shouldn't have to check if a value exists. In other cases, with text inputs, you may need to do some validation, depending on how you setup the form. Note: You probably want to check that a $_POST or $_REQUEST variable exists just in case they come to this page without submitting the form. */

        $doubledouble_cost = number_format(3.45, 2);
        $cheeseburger_cost = number_format(2.40, 2);
        $hamburger_cost = number_format(2.10, 2);
        $fries_cost = number_format(1.60, 2);
        $combo_dbl_cost = number_format(6.70, 2);
        $combo_chs_cost = number_format(5.65, 2);
        $combo_ham_cost = number_format(5.35, 2);
        $sm_drink_cost = number_format(1.50, 2);
        $m_drink_cost = number_format(1.65, 2);
        $l_drink_cost = number_format(1.85, 2);
        $xl_drink_cost = number_format(2.05, 2);
        $shake_cost = number_format(2.15, 2);
        $milk_cost = number_format(0.99, 2);
        $coffee_cost = number_format(1.35, 2);

        /* A student is testing their program and has created code to calculate the cost of the food they have ordered */

        /* $subtotal = $_POST['doubledouble'] +  $_POST['cheeseburger'] + $_POST['hamburger'] + $_POST['fries']; */

        // Just for output purposes this student wanted to include some specific item counts in the output page.

        /* $total_burgers = $_POST['doubledouble'] +  $_POST['cheeseburger'] + $_POST['hamburger'];
$total_fries = $_POST['fries']; */

        // If you use a double quote you can include the variable inside the quotations without having to concatenate

        /* echo "Your subtotal of $total_burgers burgers and $total_fries fries is $subtotal.<br />"; */

        // With your group, test the code above and determine if anything needs to be fixed. Is the output reporting the correct amount of the order for the 4 items listed?

        // When you have it working, be sure to add in the rest of the menu items in the calculation and output the items ordered in this format: 

        // ITEM            QTY       PRICE      TOTAL_PRICE
        // Double Double    2        $3.45        $6.90
        // etc.

        // Note: Only output items ORDERED. If they didn't order anything, they shouldn't see it in the output
        // Hint: Use an IF statement to check if the quantity of the item is greater than 0. If so, output. If not, move on.
        $doubledouble_qty = $_POST['doubledouble'];
        $cheeseburger_qty = $_POST['cheeseburger'];
        $hamburger_qty = $_POST['hamburger'];
        $fries_qty = $_POST['fries'];
        $combo_dbl_qty = $_POST['combo_dbl'];
        $combo_chs_qty = $_POST['combo_chs'];
        $combo_ham_qty = $_POST['combo_ham'];
        $sm_drink_qty = $_POST['sm_drink'];
        $m_drink_qty = $_POST['m_drink'];
        $l_drink_qty = $_POST['l_drink'];
        $xl_drink_qty = $_POST['xl_drink'];
        $shake_qty = $_POST['shake'];
        $milk_qty = $_POST['milk'];
        $coffee_qty = $_POST['coffee'];

        $order_subtotal = 0;

        echo "<h2>Order Number: " . rand() . "</h2>";
        echo "<p>Thank you $firstname $lastname for placing your order. Please be on the lookout for an email notification to $email for a copy of this receipt and a phonecall to $telephone when your order is complete.</p>";

        echo "<table>
                <tr>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Cost</th>
                  <th>Total</th>
                </tr>";

        if ($doubledouble_qty > 0) {
            $tot_doubledouble = $doubledouble_qty * $doubledouble_cost;
            $order_subtotal += $tot_doubledouble;
            echo "<tr><td>Double Double</td><td>" . $doubledouble_qty . "</td><td>" . $doubledouble_cost . "</td><td>" . number_format($tot_doubledouble, 2) ."</td></tr>";
        }
        if ($cheeseburger_qty > 0) {
            $tot_cheeseburger = $cheeseburger_qty * $cheeseburger_cost;
            $order_subtotal += $tot_cheeseburger;
            echo "<tr><td>Cheeseburger</td><td>" . $cheeseburger_qty . "</td><td>" . $cheeseburger_cost . "</td><td>" . number_format($tot_cheeseburger, 2) . "</td></tr>";
        }
        if ($hamburger_qty > 0) {
            $tot_hamburger = $hamburger_qty * $hamburger_cost;
            $order_subtotal += $tot_hamburger;
            echo "<tr><td>Hamburger</td><td>" . $hamburger_qty . "</td><td>" . $hamburger_cost . "</td><td>" . number_format($tot_hamburger, 2) . "</td></tr>";
        }
        if ($fries_qty > 0) {
            $tot_fries = $fries_qty * $fries_cost;
            $order_subtotal += $tot_fries;
            echo "<tr><td>Fries</td><td>" . $fries_qty . "</td><td>" . $fries_cost . "</td><td>" . number_format($tot_fries, 2) . "</td></tr>";
        }
        if ($combo_dbl_qty > 0) {
            $tot_combo_dbl = $combo_dbl_qty * $combo_dbl_cost;
            $order_subtotal += $tot_combo_dbl;
            echo "<tr><td>Double Double Combo</td><td>" . $combo_dbl_qty . "</td><td>" . $combo_dbl_cost . "</td><td> " . number_format($tot_combo_dbl, 2) . "</td></tr>";
        }
        if ($combo_chs_qty > 0) {
            $tot_combo_chs = $combo_chs_qty * $combo_chs_cost;
            $order_subtotal += $tot_combo_chs;
            echo "<tr><td>Cheeseburger Combo</td><td>" . $combo_chs_qty . "</td><td>" . $combo_chs_cost . "</td><td>" . number_format($tot_combo_chs, 2) . "</td></tr>";
        }
        if ($combo_ham_qty > 0) {
            $tot_combo_ham = $combo_ham_qty * $combo_ham_cost;
            $order_subtotal += $tot_combo_ham;
            echo "<tr><td>Hamburger Combo</td><td>" . $combo_ham_qty . "</td><td>" . $combo_ham_cost . "</td><td>" . number_format($tot_combo_ham, 2) . "</td></tr>";
        }
        if ($sm_drink_qty > 0) {
            $tot_sm_drink = $sm_drink_qty * $sm_drink_cost;
            $order_subtotal += $tot_sm_drink;
            echo "<tr><td>Small Drink</td><td>" . $sm_drink_qty . "</td><td>" . $sm_drink_cost . "</td><td>" . number_format($tot_sm_drink, 2) . "</td></tr>";
        }
        if ($m_drink_qty > 0) {
            $tot_m_drink = $m_drink_qty * $m_drink_cost;
            $order_subtotal += $tot_m_drink;
            echo "<tr><td>Medium Drink</td><td>" . $m_drink_qty . "</td><td>" . $m_drink_cost . "</td><td>" . number_format($tot_m_drink, 2) . "</td></tr>";
        }
        if ($l_drink_qty > 0) {
            $tot_l_drink = $l_drink_qty * $l_drink_cost;
            $order_subtotal += $tot_l_drink;
            echo "<tr><td>Large Drink</td><td>" . $l_drink_qty . "</td><td>" . $l_drink_cost . "</td><td>" . number_format($tot_l_drink, 2) . "</td></tr>";
        }
        if ($xl_drink_qty > 0) {
            $tot_xl_drink = $xl_drink_qty * $xl_drink_cost;
            $order_subtotal += $tot_xl_drink;
            echo "<tr><td>Xtra Large Drink</td><td>" .  $xl_drink_qty . "</td><td>" . $xl_drink_cost . "</td><td>" . number_format($tot_xl_drink, 2) . "</td></tr>";
        }
        if ($shake_qty > 0) {
            $tot_shake = $shake_qty * $shake_cost;
            $order_subtotal += $tot_shake;
            echo "<tr><td>Shake</td><td>" . $shake_qty . "</td><td>" . $shake_cost . "</td><td>" . number_format($tot_shake, 2) . "</td></tr>";
        }
        if ($milk_qty > 0) {
            $tot_milk = $milk_qty * $milk_cost;
            $order_subtotal += $tot_milk;
            echo "<tr><td>Milk</td><td>" . $milk_qty . "</td><td>" . $milk_cost . "</td><td>" . number_format($tot_milk, 2) . "</td></tr>";
        }
        if ($coffee_qty > 0) {
            $tot_coffee = $coffee_qty * $coffee_cost;
            $order_subtotal += $tot_coffee;
            echo "<tr><td>Coffee</td><td>" .  $coffee_qty . "</td><td>" . $coffee_cost . "</td><td>" . number_format($tot_coffee, 2) . "</td></tr>";
        }
        echo "</table>";
        echo "<p>Your subtotal is " . number_format($order_subtotal, 2) . ".</p>";
        /*else {
  echo "not working";
}*/


        // Be sure to calculate tax of 9.5% (.095) in the total amount due
        $total_order = $order_subtotal * 1.095;
        echo "<p>Your total (with tax) is " . number_format($total_order, 2) . ".</p>";
        // Once you have your order total working, go back and get some information like the customer name, email, and phone number. Don't worry about payment information. Display this information with a made-up order number on the confirmation page. 

        ?>
    </main>
</body>

</html>
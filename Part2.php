<!DOCTYPE html>
<html>
<head>
    <title>Gun Shop System</title>
</head>
<body>
    <h2>Welcome to Adam's Gun shop</h2>
    <form method="post" action="">
        <label>Gun 1: AK-47</label>
        <label>Price: &#8369;300</label><br><br>

        <label>Gun 2: Berretta</label>
        <label>Price: &#8369;100</label><br><br>

        <label>Gun 3: SKS</label>
        <label>Price: &#8369;250</label><br><br>

        <label>Gun 4: RPK-74</label>
        <label>Price: &#8369;400</label><br><br>


        <label for="quantity1">Quantity of Gun 1:</label>
        <input type="number" id="quantity1" name="quantity1" min="0" required><br><br>

        <label for="quantity2">Quantity of Gun 2:</label>
        <input type="number" id="quantity2" name="quantity2" min="0" required><br><br>

        <label for="quantity3">Quantity of Gun 3:</label>
        <input type="number" id="quantity3" name="quantity3" min="0" required><br><br>

        <label for="quantity4">Quantity of Gun 4:</label>
        <input type="number" id="quantity4" name="quantity4" min="0" required><br><br>

        <label for="cash">Amount of Cash:</label>
        <input type="number" id="cash" name="cash" required><br><br>

        <input type="submit" name="submit" value="Submit Order">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $quantity1 = $_POST['quantity1'];
        $quantity2 = $_POST['quantity2'];
        $quantity3 = $_POST['quantity3'];
        $quantity4 = $_POST['quantity4'];
        $price1 = 300;
        $price2 = 100;
        $price3 = 250;
        $price4 = 400;
        $cash = $_POST['cash'];

        $total_cost = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3)+ ($quantity4 * $price4);

        $change = $cash - $total_cost;

        echo "<h3>Order Summary:</h3>";
        echo "Total Cost: &#8369;" . $total_cost . "<br>";
        if ($change >= 0) {
            echo "Change: &#8369;" . $change;
        } else {
            echo "Kulang pera mo! Dagdagan mo para sa school shoot mo bukas.";
        }
    }
    ?>
</body>
</html>
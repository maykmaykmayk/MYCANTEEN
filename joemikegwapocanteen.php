<?php
if(isset($_POST['orderButton'])){
    $food = $_POST['foodSelectField'];
    $quantity = $_POST['quantityTextField'];
    $cash = $_POST['cashTextField'];

    $foodPrice = 0;

    switch($food){
        case 'pizza':
            $foodPrice = 120;
            break;
        case 'salad':
            $foodPrice = 80;
            break;
        case 'sandwich':
            $foodPrice = 70;
            break;
        case 'sushi':
            $foodPrice = 100;
            break;
        case 'tacos':
            $foodPrice = 90;
            break;
    }

    $totalCost = $foodPrice * $quantity;
    $moneyChange = $cash - $totalCost;

    if($moneyChange >= 0){
        echo "<h2>THANK YOU FOR ORDERING!</h2>";
        echo "<h3>The total cost is: " . $totalCost . "</h3>";
        echo "<h3>Your change is: " . $moneyChange . "</h3>";
    }else{
        echo "<h2>NOT ENOUGH CASH! :(</h2>";
        $missingCash = abs($moneyChange);
        echo "<h2>YOU NEED " . $missingCash ." MORE IN CASH! </h2>";
    }
}
?>


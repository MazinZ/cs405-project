<?php
    require_once "authenticate.php";
    require_once "../dashboard/loginStaff.php";
    if(authenticate() == 0){
        $_SESSION['NEEDS_TO_SIGN_IN'] = true;
        header("Location: ../dashboard/login.php");
        die();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Page</title>
    </head>
    <body>
        <div>
            <h2>Staff Forms</h2>
            <ul>
                <li><a href="viewInventory.php">View Inventory</a></li>
                <li><a href="updateInventory.php">Update Inventory</a></li>
                <li><a href="viewPendingOrders.php">View/Ship Pending Orders</a></li>
            </ul>
        </div>
        <?php
            if(authenticate() == 2)
            {
                echo '<div>
                            <h2>Manager Forms</h2>
                            <ul>
                                <li><a href="salesStatistics.php">Sales Statistics</a></li>
                                <li><a href="salesPromotion.php">Sales Promotion</a></li>
                            </ul>
                        </div>';
            }
        ?>
    </body>
</html>

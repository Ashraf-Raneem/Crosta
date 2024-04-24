<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <!-- Add your CSS stylesheets and other meta tags here -->
</head>
<body>
    <header>
        <!-- Add header content if needed -->
    </header>

    <main>
        <h1>Order Confirmation</h1>
        <?php
        // Retrieve the order ID from the URL parameter
        $orderId = $_GET['order_id'];

        // Display a confirmation message with the order ID
        echo "<p>Your order with ID $orderId has been successfully placed. Thank you for shopping with us!</p>";
        ?>
    </main>

    <footer>
        <!-- Add footer content if needed -->
    </footer>
</body>
</html>
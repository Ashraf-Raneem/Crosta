<?php 
// Include the database connection file
include 'db_connection.php';

// Retrieve cart items from local storage or any other method you're using
$cartItems = json_decode($_COOKIE['cart'], true); // Assuming you're storing cart items in a cookie

// Connect to the database
$conn = new mysqli('localhost', 'username', 'password', 'crosta');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert customer information into the Customer table
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO customer (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    $customerId = $conn->insert_id; // Get the ID of the newly inserted customer
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insert order details into the OrderDetails table
foreach ($cartItems as $item) {
    $itemId = $item['id']; // Assuming each item has an ID
   // $quantity = $item['quantity'];
    $price = $item['price'];

    $sql = "INSERT INTO order_details (customer_id, menu_id, quantity, price) VALUES ('$customerId', '$itemId', '$quantity', '$price')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Insert order information into the Order table
// You can add additional details such as order notes, item category, size, etc. depending on your requirements

// Close the database connection
$conn->close();

// Redirect to the confirmation page
header("Location: confirmation.php?customer_id=$customerId");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    
    <img src="your-image-url-here.jpg">

    <form action="https://formbold.com/s/FORM_ID" method="POST">
      <div class="formbold-form-title">
        <h2 class="">Delivery information</h2>
        <p>
        Enter correct delivery information to get your items delivered to you. You can make the payment to the delivery man. 
        </p>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="name" class="formbold-form-label">
            Full name
          </label>
          <input
            type="text"
            name="name"
            id="name"
            class="formbold-form-input"
          />
        </div>

      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label"> Email </label>
          <input
            type="email"
            name="email"
            id="email"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="phone" class="formbold-form-label"> Phone number </label>
          <input
            type="text"
            name="phone"
            id="phone"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label">
          Street Address
        </label>
        <input
          type="text"
          name="address"
          id="address"
          class="formbold-form-input"
        />
      </div>



      <div class="formbold-checkbox-wrapper">
        <label for="supportCheckbox" class="formbold-checkbox-label">
          <div class="formbold-relative">
            <input
              type="checkbox"
              id="supportCheckbox"
              class="formbold-input-checkbox"
            />
          </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="notes" class="formbold-form-label">
            Special instructions you want to add
          </label>
          <input
            type="text"
            name="notes"
            id="notes"
            class="formbold-form-input"
          />
        </div>

      </div>
           

      <button type="submit" class="formbold-btn">Confirm Order</button>
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }
  .formbold-relative {
    position: relative;
  }
  .formbold-opacity-0 {
    opacity: 0;
  }
  .formbold-stroke-current {
    stroke: currentColor;
  }
  #supportCheckbox:checked ~ div span {
    opacity: 1;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    margin-bottom: 45px;
  }

  .formbold-form-title {
    margin-bottom: 30px;
  }
  .formbold-form-title h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
  }
  .formbold-form-title p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-top: 12px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    text-align: center;
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #536387;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-checkbox-label a {
    margin-left: 5px;
    color: #6a64f1;
  }
  .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }
  .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
</style>


</body>
</html>


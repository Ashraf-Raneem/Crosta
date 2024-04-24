<?php
// Step 1: Connect to the Database
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'crosta'; 

$conn = mysqli_connect($host, $username, $password, $database);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage() );
}

$sql = "SELECT * FROM menu";

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Initialize empty arrays to store data
    $item_names = array();
    $item_descriptions = array();
    $item_prices = array();
    $item_sizes = array();
    $item_categories = array();
    
    // Loop through each row and store data in arrays
    while ($row = $result->fetch_assoc()) {
        $item_names[] = $row["item_name"];
        $item_descriptions[] = $row["item_description"];
        $item_prices[] = $row["item_price"];
        $item_sizes[] = $row["item_size"];
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
             
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Crosta</title>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <div style="margin-left: 50px;">
   <div id="cart-items">

   </div>
  

    <div class="calc-container" style="padding-bottom:50px;">
      <div class="column">
          <div class="label">Subtotal</div>
          <div class="label">Delivery</div>
          <div class="label total-label">Total</div>
      </div>
      <div class="column-la">
          <div id="subtotal" class="value">395 ৳</div>
          <div >60 ৳</div>
          <div id="total" class="value total-value">455 ৳</div>
      </div>
    </div>
    
    <a id="clearButton" class="button-sub">
      Clear cart
      </a>

    <a href="user-details.php" style="margin-left:50px" class="button">
      Continue
    </a>
  
  </div>
</div>
  
    <div class="navbar">
        <div class="nav">
            <span>Barista Classes</span>
        </div>
        <div class="nav">
            <span>Our Story  </span>
        </div>
        <div class="nav head">
            <img src="./assets/icons/logo-md.png"/>
        </div>
        <div class="nav">
            <span>Menu</span>
        </div>
        <div class="nav">
            <span  onclick="openNav()">Cart [ <span id="cart-count">0</span> ]</span>
        </div>
    </div>


    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
 
    
  
    
 
        <div style=" height: 100px; position: relative;">

        </div>
    
        <div style="justify-content: flex-start; flex-direction: row; align-items: flex-start;  display: inline-flex">
          <div class="tab-container">
           
            <span class="text-main">MENU</span>
            
            <div class="text-sub" style="width: 65%;">Explore our curated selection of globally sourced beans, meticulously roasted to perfection, and Bangladesh’s first crosties<br/></div>
            <div class="tab">
              <button class="tablinks active" onclick="openCity(event, 'CoffeeTea')"><span class="text-main-2">Coffee & Tea</span></button>
              <button class="tablinks" onclick="openCity(event, 'SandwichesSides')">Sandwiches & Sides</button>
              <button class="tablinks" onclick="openCity(event, 'CrostiesCrepes')">Crosties & Crepes</button>
              <button class="tablinks" onclick="openCity(event, 'RefreshmentsDrinks')">Refreshments & Drinks</button>
              <button class="tablinks" onclick="openCity(event, 'Bottled')">Bottled</button>
            </div>
          </div>
            
          <div id="CoffeeTea" class="tabcontent" style="display: block;">
              
            <div class="container-col-1">
              <div class="sub-cat-h">Coffee (Hot)</div>
                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 36px; display: flex">
                  
                <?php
                    // Loop through each menu item and generate HTML dynamically
                      for ($i = 0; $i < count($item_names); $i++) {
                        echo '<div class="menu-item" onclick="addToCart(\'' . $item_names[$i] . '\', \'' . $item_prices[$i] . '\')">';
                      echo '<div class="item-description">';
                        echo '<span class="item-name">' . $item_names[$i] . '</span>';
                       echo '<p>' . $item_descriptions[$i] . '</p>';
                       echo '</div>';
                        echo '<div class="item-price">' . $item_prices[$i] . '</div>';
                        echo '</div>';
                          }
                ?>
            </div>
           </div>

              <div class="container-col-1">
                <div class="sub-cat-h">Coffee (Iced)</div>
                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 36px; display: flex">
                  <div class="menu-item">
                      <div class="item-description">
                        <span class="item-name">Espresso</span>
                        <p>A rich, concentrated shot of coffee served in a small cup. Available in single and double shots.</p>
                      </div>
                      <div class="item-price">140 / 175</div>
                    </div>
        
                    <div class="menu-item">
                      <div class="item-description">
                        <span class="item-name">Americano</span>
                        <p>Diluted espresso, milder flavour. </p>
                      </div>
                      <div class="item-price">140 / 175</div>
                    </div>
                </div>
              </div>
           
            </div>
            

          
        </div>
       
        
        
        <div class="footer">
            <div class="icon-container">
                <img class="menu-bottom-img" src="./assets/icons/icons-cheesecake.png">
                <img class="menu-bottom-img" src="./assets/icons/icons-coffee.png">
                <img class="menu-bottom-img" src="./assets/icons/icons-cup-with-straw.png">
                <img class="menu-bottom-img" src="./assets/icons/icons-pizza.png">
            </div>
            <div class="logo-xl">
                <img class="logo-xl"  src="./assets/icons/logo.png">
            </div>
            <div class="footer-info-container">
                <div class="grid">
                    <span class="head">Location</span>
                    <span>House-01, Sector-14, Shah Makhdum Ave, Uttara, Dhaka 1230</span>
                    <a href="Add-To-Menu-Frontend.php">Google maps</a>
                </div>
                <div class="grid">
                    <div class="contact head">
                        <span>Contact</span>
                        <span>Feedback</span>
                    </div>
                    <span>T: (+880) 1331508969</span>
                    <span>E: hello@crosta.com</span>
                </div>
                <div class="grid">
                    <span class="head">Socials</span>
                    <span class="underline">Instagram</span>
                    <span class="underline">Facebook</span>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span>&copy; Copyright Crosta. All rights reserved</span>
        </div>

     
  
</body>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
  
    // Hide all tab contents
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Remove "active" class from all tab links
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].classList.remove("active");
    }
  
    // Show the selected tab content
    document.getElementById(cityName).style.display = "block";
  
    // Add "active" class to the clicked tab link
    evt.currentTarget.classList.add("active");
  }
  </script>

  <script>/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
    function openNav() {
      document.getElementById("mySidenav").style.width = "680px";
      document.getElementById("main").style.marginRight = "680px";
    
    }
    
    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginRight = "0";
    
    }</script>

    <script>
      
      document.addEventListener("DOMContentLoaded", function() {
        const decrementBtn = document.querySelector('.decrement');
        const incrementBtn = document.querySelector('.increment');
        const countDisplay = document.querySelector('.count');
    
        let count = parseInt(countDisplay.innerText);
    
        decrementBtn.addEventListener('click', function() {
            if (count > 1) {
                count--;
                countDisplay.innerText = count;
            }
        });
    
        incrementBtn.addEventListener('click', function() {
            count++;
            countDisplay.innerText = count;
        });
    });
    </script>
    
    <script>
function updateCartCount() {
    // Retrieve cart items from local storage
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    // Select the cart count element
    let cartCountElement = document.getElementById('cart-count');

    // Update the cart count
    cartCountElement.innerText = cartItems.length;
}

// Call the updateCartCount function initially to set the cart count
updateCartCount();
      
function clearCart() {
    localStorage.clear();
    updateCartDisplay(); // Update cart display after clearing
  }

  // Function to update the cart display
  function updateCartDisplay() {
    // Retrieve cart items from local storage
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    // Select the cart items container
    let cartContainer = document.getElementById('cart-items');

    // Clear previous cart items
    cartContainer.innerHTML = '';

    // Total price variable
    let total = 0;

    // Loop through each item in the cart and add it to the cart container
    cartItems.forEach(item => {
      // Create a new cart item element
      let itemElement = document.createElement('div');
      itemElement.classList.add('cart-item');

      // Create an image element (placeholder image)
      let imgElement = document.createElement('img');
      imgElement.src = 'https://via.placeholder.com/114x110';

      // Create a container for the item name and price
      let itemDetailsElement = document.createElement('div');
      itemDetailsElement.classList.add('container-col-1');

      // Create elements for the item name and price
      let namePriceContainer = document.createElement('div');
      namePriceContainer.classList.add('name-price-container');
      namePriceContainer.innerHTML = `
          <span class="text-main-2">${item.name}</span>
          <span>${item.price} ৳</span>
      `;

      // Create the counter element (decrement, count, increment)
      let counterElement = document.createElement('div');
      counterElement.classList.add('counter');
      counterElement.innerHTML = `
          <div class="decrement">—</div>
          <div class="count">1</div>
          <div class="increment">+</div>
      `;

      // Append all elements to the cart item element
      itemElement.appendChild(imgElement);
      itemDetailsElement.appendChild(namePriceContainer);
      itemDetailsElement.appendChild(counterElement);
      itemElement.appendChild(itemDetailsElement);

      // Append the cart item element to the cart container
      cartContainer.appendChild(itemElement);
      total += item.price;
    });

    // Update the total value or any other calculations if necessary
  }

      // Calculate subtotal
      let subtotal = total;
    document.getElementById('subtotal').innerText = `${subtotal} ৳`;
    console.log(total);

    // Shipping cost
    let shipping = 60;
    console.log(shipping);

    // Calculate total
    let finalTotal = subtotal + shipping;
    document.getElementById('total').innerText = `${finalTotal} ৳`;
    console.log(finalTotal);

  // Call the updateCartDisplay function initially to populate the cart items
  updateCartDisplay();
        // Function to add items to the cart
        function addToCart(itemName, price) {
          console.log("addToCart function called");
            // Retrieve existing cart items from local storage or initialize an empty array
            let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

            // Add the new item to the cart
            cartItems.push({ name: itemName, price: price });

            // Save the updated cart items back to local storage
            localStorage.setItem('cart', JSON.stringify(cartItems));

            // Update the cart display
                updateCartDisplay();

    // Update the cart count
    updateCartCount();
        }

        // Function to update the cart display
    
    
   
updateCartDisplay();

    document.getElementById('clearButton').addEventListener('click', function() {
 
    localStorage.clear();
    console.log("Clear button clicked");
});
        
    </script>
   

  </html>
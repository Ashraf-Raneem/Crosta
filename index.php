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
        <div style="margin-left: 50px; ">
          <div style=" justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex; padding-bottom:50px;">
            <img src="https://via.placeholder.com/114x110" />
              <div class="container-col-1">
                <div class="name-price-container">
                    <span class="text-main-2">NUTELLA CREPE</span>
                    <span >220 ৳ </span>
                 </div>
                 <div id="counter" class="counter">
                  <div class="decrement">—</div>
                  <div class="count">1</div>
                  <div class="increment">+</div>
              </div>
              </div>
              
          </div>
      
          <div class="calc-container" style="padding-bottom:50px;">
            <div class="column">
                <div class="label">Subtotal</div>
                <div class="label">Delivery</div>
                <div class="label total-label">Total</div>
            </div>
            <div class="column-la">
                <div class="value">395 ৳</div>
                <div class="value">60 ৳</div>
                <div class="value total-value">455 ৳</div>
            </div>
          </div>
          
          <button class="button">
            PROCEED TO CHECKOUT
          </button>
        
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
            <span><a href="menu.php">Menu</a></span>
        </div>
        <div class="nav">
            <span onclick="openNav()">Cart [ 0 ]</span>
        </div>
    </div>

    <div class="cover">
        <div class="cover-text-wrapper">
            <div class="text-main">
                <span>Where Crosties meet artisanal coffee excellence</span>
            </div>
            <div class="text-sub" style="width:70%">
                <span>Indulge in our finest brews, master barista classes, and savor the essence of a true café experience.</span>
                <span>Explore our curated selection of globally sourced beans, meticulously roasted to perfection, and Bangladesh’s first crosties at <span style="font-weight: 500;">Crosta</span>.</span>
            </div>
        </div>
        <div class="cover-image-wrap">
            <img src="/assets/cuppizza.png" height="85%" >

        </div>
    </div>
   
    <div class="story">
        <div class="story-image">
            <img src="./assets/about_image.png" height="518px" height="700px">
        </div>
        <div class="story-text-wrap">
            <div class="text-main">
                <span>About CROSTA</span>
            </div>
            <div class="text-sub">
                <span>At Crosta, quality isn't just a promise; it's a way of life. Our commitment to excellence resonates in every aspect, from sourcing the finest coffee beans from around the world to the expert hands that craft each cup.</span>
                <p>Beyond exceptional beverages and culinary delights, Crosta offers an inviting ambience that beckons patrons to linger and savor moments of tranquility or connect over shared passions for coffee. Engage in our master barista classes conducted by seasoned professionals, where the intricate art of brewing is unveiled.. Crosta isn't just a café; it's a community hub fostering a love for coffee and the pursuit of excellence in every aspect of the coffee and crosties we make.</p>                    
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-action">
            <div class="menu-action-text">
                <span> Our MENU</span>
            </div>
            <div>
                <button class="menu-action-btn">
                    <span>More</span> 
                    <span>&rarr;</span>
                </button>
            </div>
            <div class="menu-action-image">
                <img src="./assets/menu_image.png" width="200px" height="180px">
            </div>
        </div>
        <div class="menu-details">
            <br><br>
            <div class="menu-details-container">
        
                <span class >Popular</span>
                <span>Price</span>
            
            </div>
            <br><br>
            
            <div class="menu-details-container underline">
                <span class="menu-item">Double Espresso</span>
                <span >199</span>
            </div>
            
            <div class="menu-details-container underline">
                <span class="menu-item">Cappucino</span>
                <span>210</span>
            </div>
            
            <div class="menu-details-container underline">
                <span class="menu-item">* Iced Latte</span>
                <span >199</span>
            </div>
            
            <div class="menu-details-container underline">
                <span class="menu-item">Pepperoni Crosties</span>
                <span >230</span>
            </div>

            <div class="menu-details-container">
                <span>Nutella Crepe</span>
                <span class="menu-item">220</span>
            </div>
        </div>
    </div>
    <div class="menu-bottom-img">
        <img src="./assets/menu_bottom.png" width="200px" height="250px">
    </div>
    <div class="barista">
        <div class="barista-text">
            <div class="text-main">
                <span>Become A Barista</span>
            </div>
            <div class="text-sub">
                <span>Our expert instructors guide you through the nuances of espresso extraction, milk frothing, and latte art, unlocking the secrets behind every satisfying sip. Whether you're a budding enthusiast or aspiring professional, our hands-on classes provide a rich blend of knowledge and skills to awaken the barista in you. Join us and master the alchemy of coffee, transforming every cup into a masterpiece.</span>
            </div>
            <div>
                <a class="btn">Discover</a>
            </div>
        </div>
        <div class="barista-image">
            <img src="./assets/barista_image.png">
            <span>De'Longhi La Specialista Espresso Machine</span>
        </div>
    </div>
    <div class="review">
        <div class="review-text">
            <div class="review-text-main">
                <span>From our guests</span>
            </div>
            <div class="review-text-sub">
                <span>We represent a vibrant hub celebrating diversity in both flavor and community. Join us as we bring together tastes from around the city, inviting everyone to savor our culinary delights and embrace the warmth of our inclusive space.</span>
            </div>
        </div>
        <div class="review-image">
            <img src="./assets/review_image.png">
        </div>
    </div>
    <div class="review-roller">
        <div class="review-roller-header">
            <span>From the Community</span>
        </div>
        <div class="roller-container">
            <div class="reviews-wrapper">
                <div class="testimonials-container">
                    <span class="testimonial-text">A warm, cozy and vibrant place. Good for hangouts, business or a date. Excellent service from the staff</span>
                    <p class="testimonial-from">Foodbizz</p>
                </div>
                <div class="testimonials-ex-border"></div>
            </div>
            <div class="reviews-wrapper">
                <div class="testimonials-container">
                    <span class="testimonial-text">From the moment you step in, the ambiance captivates, and each dish tells a story of innovation and perfection. Attentive staff and an impressive menu selection ensure an unforgettable culinary adventure.</span>
                    <p class="testimonial-from">Random Influencer</p>
                </div>
                <div class="testimonials-ex-border"></div>
            </div>
            <div class="reviews-wrapper">
                <div class="testimonials-container">
                    <span class="testimonial-text">An oasis of culinary delight! Impeccable service paired with a menu that astounds both in taste and presentation.</span>
                    <p class="testimonial-from">Random Influencer</p>
                </div>
                <div class="testimonials-ex-border"></div>
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
                <span>Google maps</span>
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
</html>
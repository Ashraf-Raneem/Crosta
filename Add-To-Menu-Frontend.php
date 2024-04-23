<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crosta - Add Items to Menu</title>
    <link rel="stylesheet" href="Add-To-Menu-Frontend.css">
</head>
<body>
    <h1>Add Items to Menu</h1>
    <form action="Add-To_Menu-Backend.php" method="POST">
    <p>
        Item name : <input type="text" name="item_name" required><br><br>
        Item description : <input type="text" name="item_description" required><br><br>
        Item price : <input type="number" name="item_price" required><br><br>
        Item size : <select type="text" name="item_size">
                        <option value="large">Large</option>
                        <option value="md">Medium</option>
                    </select><br><br>
        Item catagory : <select type="text" name="item_catagory">
                        <option value="cofi">Coffee & Tea</option>
                        <option value="crosti">Crosties</option>
                        <option value="ss">Sandwiches & Sides</option>
                        <option value="refresh">Refreshers</option>
                        <option value="desert">Dessert</option>
                        <option value="bottle">Bottled</option>
                    </select><br><br>
    </p>
    <button type="submit">Add Item</button>
    </form>
</body>
</html>
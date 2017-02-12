<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="post"
              id="edit_product_form">

            <label>Category ID:</label>
            <select name="category_id">
             <option selected value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
            </select><br> 

            <label>Code:</label>
            <input type="text" name="code" value="strat"/><br>

            <label>Name:</label>
            <input type="text" name="name" value="Fender Stratocaster"/><br>

            <label>List Price:</label>
            <input type="text" name="price" value="699.00"/><br>
            
            <input type="hidden" name="product_id" value="1"/><br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> 2017 My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
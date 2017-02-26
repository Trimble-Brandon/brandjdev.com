<?php include '../view/header.php'; ?>
    <main>

        <h2>Register Product</h2>
        <?php if (isset($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php else: ?>
            
        <?php endif; ?>
            
            // Build the product registration form
            <form action="." method="post">
                <label>Customer:</label>
                <?php foreach ($customers as $customer) :?>
                <label>
                    <?php echo $customer['firstName']. " ";?>
                    <?php echo $customer['lastName'];?>
                </label>
                <input type="hidden" name="customer_id" value="<?php echo $customer['customerID'];?>">
                <br>
                <br>
                <?php endforeach;?>
                <label for="product">Product:</label>
                <select name="product" id="product">
                    <?php foreach ($products as $product) : ?>
                        <option value="<?php echo $product['productCode']; ?>">
                            <?php echo $product['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
			
                <input type="hidden" name="customer_id" value="<?php echo $customer['customerID']; ?>">
                <input type="hidden" name="action" value="register_product">
                <br>
                <br>
                <input type="submit" value="Register Product">
            </form>
        
    </main>
<?php include '../view/footer.php'; ?>
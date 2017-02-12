<?php
    // Get Data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');

    // Validate Description
    if ($product_description === false)
    {
        $error_message = 'Description is required!';
    }

    // Validate List price
    else if ($list_price === false)
    {
        $error_message = 'List Price is required';
    }
    else if ($list_price <= 0 )
    {
        $error_message = 'List Price must be greater than zero, or you are lucky!';
    }

    // Validate Standard Discount
    else if ($discount_percent === false)
    {
        $error_message = 'Discount is required.';
    }
    else if ($discount_percent <= 0 )
    {
        $error_message = 'Discount must be greater than zero, or it is a crappy discount.';
    }
    else
    {
        $error_message = '';
    }

    // Send Error message if there is one
    if ($error_message != '')
    {
        include('index.php');
        exit();
    }

    // Calculate Discount, Discounted price and total after sales tax
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
    $sales_tax = .08;
    $sales_tax_amount = $discount_price * $sales_tax;
    $total_price = $sales_tax_amount + $discount_price;

    // Apply currency formatting
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
    $sales_tax_f = "80%";
    $sales_tax_amount_f = "$".number_format($sales_tax_amount, 2);
    $total_price_f = "$".number_format($total_price, 2);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>

        <br />

        <label>Sales Tax Rate:</label>
        <span><?php echo $sales_tax_f; ?></span><br>

        <label>Sales Tax Amount:</label>
        <span><?php echo $sales_tax_amount_f; ?></span><br>

        <label>Final Total Price:</label>
        <span><?php echo $total_price_f; ?></span><br>
    </main>
</body>
</html>

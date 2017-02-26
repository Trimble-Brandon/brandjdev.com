<?php
// Register the product and associate it with the customer
// Check the registrations table to see what data is expected
function add_registration($customer_id, $product_code) 
{
    $db = db_connect();
    
    $query = 'INSERT INTO registrations (customerID, productCode) VALUES (:customer_id, :product_code)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_id', $customer_id);
    $statement->bindValue(':product_code', $product_code);
    $response = $statement->execute();
    $statement->closeCursor();
    
    return $response;
}
?>
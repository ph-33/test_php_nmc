<?php
require_once('database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the categories from the database
if  ($category_id != false){
    $query = 'DELETE a,c FROM categories AS a LEFT JOIN products AS c ON a.categoryID = c.categoryID
    WHERE a.categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $success = $statement->execute();
    $statement->closeCursor();
}

// Display the categories List page
include ('category_list.php');
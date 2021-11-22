<?php
require dirname(__FILE__) . '/dbconnect.class.php';

class Box extends DBConnect {

    // Get the boxes for specific account id
    protected function getBoxes($accountId){
        $sql = "SELECT * FROM box WHERE account_id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$accountId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    // Match box to products using box id
    protected function getBoxToProduct($boxId){
        $sql = "SELECT * FROM box_to_product WHERE box_id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$boxId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    // Get the products for each box using product id
    protected function getProducts($productId){
        $sql = "SELECT * FROM product WHERE id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$productId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    // Get rating for box or product ? using product id

    protected function getRating($productId){
        $sql = "SELECT * FROM rating WHERE product_id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$productId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }


}
<?php
require_once dirname(__FILE__) . '/dbconnect.class.php';

class Box extends DBConnect {

    // Get the boxes for specific account id
    protected function getBoxes($accountId){
        $sql = "SELECT id, delivery_date FROM box WHERE account_id = ? ORDER BY delivery_date desc";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$accountId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    // Match box to products using box id
    protected function getBoxToProduct($boxId){
        $sql = "SELECT product_id FROM box_to_product WHERE box_id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$boxId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    // Get the products for each box using product id
    protected function getProducts($productId){
        $sql = "SELECT id, name, image_url FROM product WHERE id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$productId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    // Get rating for box or product ? using product id
    protected function getRating($accountId, $productId){
        $sql = "SELECT rating FROM rating WHERE account_id = ? and product_id = ?";
        $statement = $this->connectToDB()->prepare($sql);
        $statement->execute([$accountId, $productId]);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    // protected function setRating($productId, $accountId, $rating){   
    //     $sql = ""

    // }


}
<?php

require_once dirname(__FILE__) . '/boxes.class.php';

class BoxesView extends Box
{
    public function showProducts($accountId)
    {
        //$rating = $this->getRating($accountId, $id['product_id']);
        // print_r($rating['rating']);

        // Get the box ids from submitted account id
        $boxes = $this->getBoxes($accountId);

        // Array for storing the boxes
        $makeBoxes = array();

        // Loop through box ids 
        foreach ($boxes as $date) {
            $products = array(); // Initiliase array for storing product data
            $productIds = $this->getBoxToProduct($date['id']); // Get all product ids relating to each box id
            foreach ($productIds as $id) {
                $products[] = $this->getProducts($id['product_id']); // Get the individual products
            }
            $temp = array_merge(...$products); // Products has few empty arrays, remove these
            $makeBoxes[] = [$date['delivery_date'] => $temp]; // Set each box delivery date as key and then products array as value
        };
        return $makeBoxes;
    }

    public function getProductRating($accountId, $productId){
        $rating = $this->getRating($accountId, $productId);
        if (count($rating) <= 0 ){
            return '*';
        } else {
            $count = $rating[0]['rating'];
            $stars = str_repeat('* ', $count);
            return $stars;
        }
    }
}

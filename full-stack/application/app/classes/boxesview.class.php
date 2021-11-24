<?php

require_once dirname(__FILE__) . '/boxes.class.php';

class BoxesView extends Box {

    public function showBoxes($id){
        $results = $this->getBoxes($id);

        echo 'Box ID: '. $results[0]['id'];
        echo 'Delivery Date: ' . $results[0]['delivery_date']; 
    }

    public function showProducts($id){
        
        // Get the box id from submitted account id
        $boxId = $this->getBoxes($id)[0]['id']; 

        // Using box id get the product ids
        $boxToProductIds = $this->getBoxToProduct($boxId);

        // Loop through and store ids in an array 
        $productIds = array();
        foreach ($boxToProductIds as $id) { // Loop through and extract each individual product
            $productIds[] = $id['product_id'];
        };

        // Loop through product ids and get the individual products
        $products = array();
        foreach($productIds as $id){
            $products[] = $this->getProducts($id);
        };

        return $products;
        // echo 'Box ID: '. $results[0]['box_id'];
        // echo 'Delivery Date: ' . $results[0]['delivery_date']; 
        // 508, 
    }




}
<?php

require_once dirname(__FILE__) . '/boxes.class.php';

class BoxesView extends Box {

    public function showBoxes($id){
        $results = $this->getBoxes($id);

        echo 'Box ID: '. $results[0]['id'];
        echo 'Delivery Date: ' . $results[0]['delivery_date']; 
    }

    public function showProducts($id){
        
        // Get the box ids from submitted account id
        // $boxIds = array();
        $boxes = $this->getBoxes($id);
        // print_r($boxes);

        // Using box id get the product ids
        $makeBoxes = array();
        foreach($boxes as $individualBox){
            $makeBoxes[] = $individualBox['delivery_date'];
            $productIds = $this->getBoxToProduct($individualBox['id']);
            foreach($productIds as $id){
                $makeBoxes[] = $this->getProducts($id['product_id']);
            }
            
        };

        return $makeBoxes;




        // $boxToProductIds = $this->getBoxToProduct($boxIds);

        // Loop through and store ids in an array 
        // $productIds = array();
        // foreach ($boxToProductIds as $id) { // Loop through and extract each individual product
        //     $productIds[] = $id['product_id'];
        // };

        // Loop through product ids and get the individual products
        // $products = array();
        // foreach($productIds as $id){
        //     $products[] = $this->getProducts($id);
        // };

        // return $products;
        // echo 'Box ID: '. $results[0]['box_id'];
        // echo 'Delivery Date: ' . $results[0]['delivery_date']; 
        // 508, 
    }




}
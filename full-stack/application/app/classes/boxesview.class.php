<?php

require_once dirname(__FILE__) . '/boxes.class.php';

class BoxesView extends Box {

    public function showBoxes($id){
        $results = $this->getBoxes($id);

        echo 'Box ID: '. $results[0]['id'];
        echo 'Delivery Date: ' . $results[0]['delivery_date']; 
    }

    public function showProducts($id){
        $boxId = $this->getBoxes($id)[0]['id']; // Get the box id

        $boxToProductIds = $this->getBoxToProduct($boxId); // Get the product ids
        $productIds = array();
        foreach ($boxToProductIds as $id) { // Loop through and extract each individual product
            $products[] = $id['product_id'];
        };

        $products = array();
        
        print_r($products);
        // echo 'Box ID: '. $results[0]['box_id'];
        // echo 'Delivery Date: ' . $results[0]['delivery_date']; 
        // 508, 
    }




}
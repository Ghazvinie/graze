<?php
require dirname(__DIR__) . '/classes/boxes.class.php';

class BoxesView extends Box {

    public function showBoxes($id){
        $results = $this->getBoxes($id);

        echo 'Box ID: '. $results[0]['id'];
        echo 'Delivery Date: ' . $results[0]['delivery_date']; 
    }

    public function showProducts($id){
        $boxId = $this->getBoxes($id)[0]['id'];

        $boxToProductIds = $this->getBoxToProduct($boxId);
        $products = array();
        foreach ($boxToProductIds as $id) {
            $products[] = $id['product_id'];
        }
        print_r($products);
        // echo 'Box ID: '. $results[0]['box_id'];
        // echo 'Delivery Date: ' . $results[0]['delivery_date']; 
        // 508, 
    }




}
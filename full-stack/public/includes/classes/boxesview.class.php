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

        $boxToProduct = $this->getBoxToProduct($boxId);
        foreach ($boxToProduct as $id) {
            echo $id['product_id'] . "<br/>\n";
        }
        // echo 'Box ID: '. $results[0]['box_id'];
        // echo 'Delivery Date: ' . $results[0]['delivery_date']; 
    }


}
<?php
require dirname(__DIR__) . '/classes/Controller.class.php';

class BoxesController extends Controller
{
    public function boxesPost($view, $data)
    {
        // Render the view
        return $this->renderView($view);
    }

    public function getBoxesData($accountId, $boxesModel)
    {
        // Get the box ids from submitted account id
        $boxes = $boxesModel->getBoxes($accountId);

        // Array for storing the boxes
        $makeBoxes = array();

        // Loop through box ids 
        foreach ($boxes as $date) {
            $products = array(); // Initialises array for storing product data
            $productIds = $boxesModel->getBoxToProduct($date['id']); // Get all product ids relating to each box id
            foreach ($productIds as $id) {
                $products[] = $boxesModel->getProducts($id['product_id']); // Get the individual products
            }
            $temp = array_merge(...$products); // Products has few empty arrays, remove these
            $makeBoxes[] = [$date['delivery_date'] => $temp]; // Set each box delivery date as key and then products array as value
        };
        return $makeBoxes;
    }
}

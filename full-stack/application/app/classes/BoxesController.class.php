<?php
require dirname(__DIR__) . '/classes/Controller.class.php';

class BoxesController extends Controller
{
    private $accountId;

    public function boxesPost($view)
    {
        // Render the view
        return $this->renderView($view);
    }

    public function setAccountId($acctId)
    {
        $this->accountId = $acctId;
    }

    public function getBoxesData()
    {
        // Get the box ids from submitted account id
        $boxes = $this->getBoxes($this->accountId);

        // Array for storing the boxes
        $makeBoxes = array();

        // Loop through box ids 
        foreach ($boxes as $date) {
            $products = array(); // Initialises array for storing product data
            $productIds = $this->getBoxToProduct($date['id']); // Get all product ids relating to each box id
            foreach ($productIds as $id) {
                $products[] = $this->getProducts($id['product_id']); // Get the individual products
            }
            $temp = array_merge(...$products); // Products has few empty arrays, remove these
            $makeBoxes[] = [$date['delivery_date'] => $temp]; // Set each box delivery date as key and then products array as value
        };
        return $makeBoxes;
    }

    public function getProductRating($productId)
    {
        $rating = $this->getRating($this->accountId, $productId)[0]['rating'];
        if ($rating <= 0) {
            return '*';
        } else {
            $stars = str_repeat('* ', $rating);
            return $stars;
        }
    }

    public function setProductRating($num, $productId)
    {
        $this->setRating($this->accountId, $productId, $num);
    }
}

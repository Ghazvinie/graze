<?php
require dirname(__DIR__) . '/classes/Controller.class.php';

class BoxesController extends Controller
{

    /**
     * @param accountId Users account id
     */

    private $accountId;

    // Set account id
    public function setAccountId($acctId)
    {
        $this->accountId = $acctId;
    }

    // Get relevant data for display boxes and corresponding products
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
            };
            $temp = array_merge(...$products); // Products has few empty arrays, remove these
            $makeBoxes[] = [$date['delivery_date'] => $temp]; // Set each box delivery date as key and then products array as value
        };
        return $makeBoxes;
    }

    // Get product rating
    public function getProductRating($productId)
    {
        $rating = $this->getRating($this->accountId, $productId)[0]['rating'];
        if ($rating == '') { // Rating is missing
            return '*';
        } else if ($rating <= 0) { // Rating is set, but is 0
            return 'Zero *';
        } else {
            $stars = str_repeat('* ', $rating); // Set stars for rating
            return $stars;
        };
    }

    // Set product rating
    public function setProductRating($num, $productId)
    {
        $this->setRating($this->accountId, $productId, $num);
    }

    // Sanitise input number
    public function sanitiseNum($numToSanitise)
    {
        $numWhiteSpaceRemoved = str_replace(' ', '', $numToSanitise);
        $numToInt = (int)$numWhiteSpaceRemoved;
        return $numToInt;
    }
};

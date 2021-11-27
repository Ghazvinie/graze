<?php
require_once dirname(__DIR__, 2) . '/app/classes/BoxesView.class.php';
$boxesObj = new BoxesView();
$accountId = $_POST['account_id'];
$rating = $_POST['rating'];
echo $rating;
$productsData = $boxesObj->showProducts($accountId);

?>
<div class='container justify-content-center align-items-center mt-4'>
    <div class='row row-cols-4 justify-content-center align-items-center'>
        <?php foreach ($productsData as $key => $product) { ?>
            <div class='justify-content-center align-items-center col-md-3 my-5'>
                <?php foreach ($product as $date => $details) { ?>
                    <h4 class='text-center'>-Box-</h4>
                    <h5 class='text-center'>Date Ordered: <?php echo $date; ?> </h5>
                    <p class='text-center fw-bold'>Contents:</p>
                    <?php foreach ($details as $key => $text) { ?>
                        <div class='justify-content-center align-items-center m-2'>
                            <p class='text-center'><?php echo ucwords($text['name']); ?></p>
                            <div class='d-inline-flex justify-content-center align-items-center'> 
                                <p class='text-center fw-bold mb-0'>Rating: <?php echo $boxesObj->getProductRating($accountId, $text['id']) ?></p>
                                <form action='/changerating' method='POST'>
                                <input class='w-25 h-25 mx-3' type='number' min='0' max='3' name='rating'/>
                                <button class='btn btn-outline-success' type='submit'>Submit</button>
                                </form>
                        </div>
                            <img width='100%' height='200' class='m-1' src=<?php echo $text['image_url']; ?>></img>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
</div>
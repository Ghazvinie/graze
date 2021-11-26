<?php
require_once dirname(__DIR__, 2) . '/app/classes/boxesview.class.php';
// echo print_r($_SERVER);
// echo print_r($_POST['account_id']);
$boxesObj = new BoxesView();
$accountId = $_POST['account_id'];
$productsData = $boxesObj->showProducts($accountId);

?>
<div class='container justify-content-center align-items-center'>
    <div class='row row-cols-4'>
        <div>
            <ul>
                <?php
                foreach ($productsData as $product) {
                    foreach ($product as $productDetails) {
                        foreach ($productDetails as $key => $value) {
                            if ($key === 'name') {
                                //end 
                ?>

                                <li>
                                    <?php echo ucwords($value) ?>
                                </li>

                            <?php // start
                            }
                            if ($key === 'image_url') {

                            ?>
                                <img src='<?php echo $value; ?>' />
                            <?php
                            }




                            ?>
                <?php
                        }
                    }
                };
                ?>
            </ul>
        </div>
        
    </div>
</div>
</div>